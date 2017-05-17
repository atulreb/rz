<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Invoice extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("common_model");
        $this->load->model("blog_model");
        $this->load->library('M_pdf');

        $data['user_session'] = $this->session->userdata('user_account');
//echo $this->session->userdata['user_account']['username']; die;

        if ($data['user_session']['role_id'] == '1') {
            $this->sidebar = 'partials/sidebar';
        } else if ($data['user_session']['role_id'] == '2') {
            $this->sidebar = 'partials/employee_sidebar';
        } else if ($data['user_session']['role_id'] == '3') {
            $this->sidebar = 'partials/user_sidebar';
        } else {
            $this->sidebar = 'partials/finance_sidebar';
        }
        if (!$this->common_model->isLoggedIn()) {
            redirect(base_url());
        }
//        $this->load->library('form_validation');
    }

    /* Frontend : Manage Blog Start */

    public function index() {
        $this->load->model("Invoice_model");
        $data['global'] = $this->common_model->getGlobalSettings();
        $data = $this->common_model->commonFunction();
        $data['user_session'] = $this->session->userdata('user_account');

// $orders = $this->common_model->getRecords(TABLES::$ORDER_SUMMARY,"*", array('ord_user_fk' => $data['user_session']['user_id'] ));
//        $invices = $this->Invoice_model->getAllInvoices($data['user_session']['user_id']);
        $invices = $this->common_model->getRecords(TABLES::$MST_SERVICE_INVOICE, "", array("user_id" => $data['user_session']['user_id']));
        $this->template->set('page', 'bloglist');
        $this->template->set('invices', $invices);
        $this->template->set('global', $data['global']);
        $this->template->set('user_session', $data['user_session']);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Orders')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('invoice/invoice_list');
    }

    public function orderDetails($id) {

        $this->load->model("Order_model");
        $data['global'] = $this->common_model->getGlobalSettings();
        $data = $this->common_model->commonFunction();

        if (!$this->common_model->isLoggedIn()) {
            $this->session->set_userdata('error_msg', "Please sign in to post your blog.");
            redirect('product-list');
        }

        $data = $this->common_model->commonFunction();

        $arrOrderData = $this->Order_model->getOrderDetails($id);
        $order = $this->Order_model->getOrderById($id);
        $data['user_session'] = $this->session->userdata('user_account');

        $this->template->set('page', 'bloglist');
        $this->template->set('global', $data['global']);
        $this->template->set('post_info', $arrOrderData);
        $this->template->set('order', $order);

        $this->template->set('user_session', $data['user_session']);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Order Details')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('order-details/order_details');
    }

    public function view_invoice($id) {
        $this->load->model("Invoice_model");
        $this->load->model("Order_model");

        $data['global'] = $this->common_model->getGlobalSettings();
        $data = $this->common_model->commonFunction();
        $data['user_session'] = $this->session->userdata('user_account');

// $orders = $this->common_model->getRecords(TABLES::$ORDER_SUMMARY,"*", array('ord_user_fk' => $data['user_session']['user_id'] ));
        $invoices = $this->Invoice_model->getInviceDetails($id);
//print_r($invoices);die();
        $invoicedata = $this->Invoice_model->getInvoiceData($id);

        $arrOrderData = $this->Order_model->getOrderDetails($id);
//print_r($invoicedata);die();
// echo FCPATH;die;
// $file = FCPATH.'uploads/invoice pdf files/abc@gmail.com/Invoice123.pdf';

        /* $order_table = "<table border='1' style='border:1px solid #000;padding:8px;border-collapse:collapse'><tr><th style='padding:5px'>Sr No</th><th style='padding:5px'>Item Name</th><th style='padding:5px'>Quantity</th><th style='padding:5px'>Price</th>";
          $sr = 0;

          $order_table .= "<tr><td style='padding:5px'>" . $sr . "</td><td style='padding:5px'>dsfsdf</td><td style='padding:5px'>dsfsdfsdf</td><td style='padding:5px'>sdfsdfsdfsdf</td></tr>";

          $order_table .= "</table>";

          $data['global'] = $this->common_model->getGlobalSettings();


          $html1 = $order_table; */


        $order_table = '<body>';

        $order_table .= '<div class="logo" style="position: absolute;  float: left; right: 0; top: 0; margin: 0;">';
        $order_table .= '<img style="height:150px;" src="">';
        $order_table .= '</div>';

        $order_table .= '<div class="logo" style="float: left; width: 54%; margin-top:15px; margin-bottom: 0pt; ">';
        $order_table .= '<img src="' . frontend_asset_url() . 'img/logob.png">';
        $order_table .= '</div>';

        $order_table .= '<div class="address" style="text-align: right;">';
        $order_table .= '<br/>';
        $order_table .= '<br/>';
        $order_table .= '<br/>';
        $order_table .= '</div>';

        $order_table .= '<div class="" style="margin-top:30 opt; background-color:#EEE;">';
        $order_table .= '<div class="title" style="font-weight: bold; font-size: 150%;">Invoice #' . $invoices[0]['invoice_number'] . '</div>';

        $order_table .= 'Invoice Date: ' . date('d M Y', strtotime($invoices[0]['invoice_date'])) . '<br/>';

        $order_table .= '</div>';

        $order_table .= '<div class="" style="margin-top:30 opt; ">';
        $order_table .= '<div class="" style="font-weight: bold; font-size: 150%;">Shipping Details</div>';
        $order_table .= $invoicedata[0]['ord_bill_address_01'] . '<br/>';
        $order_table .= $invoicedata[0]['bill_city'] . '<br/>';
        $order_table .= $invoicedata[0]['ord_bill_post_code'] . '<br/>';
        $order_table .= '<br/>';
        $order_table .= '<br/>';
        $order_table .= '</div>';
        $order_table .= '<br/>';
// $order_table .= '<table border="1" cellPadding="9" cellspacing="0" >';
//$order_table .= '<tbody>';
// $order_table .= '<tr>';
// $order_table .= '<th style="width:150%">Description</th>';
//  $order_table .= '<th>Total</th>';
//  $order_table .= '</tr>';

        /* $sub_total = 0;
          if(isset($invoice_details)){
          foreach ($invoice_details as $key => $value) {
          $product_detals = get_row_array('tbl_voro_store_products', array('id'=>$value['prod_id']));
          $total = $value["price"]*$value['prod_qty'];
          $sub_total = $sub_total + $total;

          $sub_total_sum = number_format((float)$sub_total, 2, '.', '');

          '<tr>';
          $order_table .= '<td></td>';
          $order_table .= '<td> USD</td>';

          $order_table .= '</tr>';

          }
          } */
        /*
          $credit = '0';
          $credit = number_format((float)$credit, 2, '.', '');
          $total= $sub_total - $credit;
          $total = number_format((float)$total, 2, '.', '');

          $order_table .= '<tr>';
          $order_table .= '<td class="table-description" align="right">Sub Total</td>';
          $order_table .= '<td class="table-description">USD</td>';
          $order_table .= '</tr>';

          $order_table .= '<tr>';
          $order_table .= '<td class="table-description" align="right">Credit</td>';
          $order_table .= '<td class="table-description">USD</td>';
          $order_table .= '</tr>';

          $order_table .= '<tr>';
          $order_table .= '<td class="table-description" align="right">Total</td>';
          $order_table .= '<td class="table-description">USD</td>';
          $order_table .= '</tr>';
          $order_table .= '</tbody>';
          $order_table .= '</table>';
         */
        $order_table .= '<h3>Order Details</h3>';

        $order_table .= '<table border="1" cellPadding="9" cellspacing="0" width="100%">';
        $order_table .= '<tbody>';
        $order_table .= '<tr>';
        $order_table .= '<th>Name</th>';
        $order_table .= '<th>Price</th>';
        $order_table .= '<th>Quantity</th>';
        $order_table .= '<th width="20%">Total</th>';
        $order_table .= '</tr>';

        /* if(isset($transaction_details)){
          foreach ($transaction_details as $key => $value) { */

        $order_table .= '<tr>';
        $order_table .= '<td>' . $invoicedata[0]['ord_det_item_name'] . '</td>';
        $order_table .= '<td>$' . $invoicedata[0]['ord_det_price'] . '</td>';
        $order_table .= '<td>' . $invoicedata[0]['ord_det_item_fk'] . '</td>';
        $order_table .= '<td>$' . $invoicedata[0]['ord_det_price_total'] . '</td>';
        $order_table .= '</tr>';

        /* }
          }
          else{

          $order_table .= '<tr>';
          $order_table .= '<td colspan="4" align="center">No Related Transactions Found</td>';
          $order_table .= '</tr>';
          } */

        $order_table .= '<tr>';
        $order_table .= '<td colspan="3" class="table-description" align="right">Total</td>';
        $order_table .= '<td class="table-description">$' . $invoicedata[0]['ord_det_price_total'] . '</td>';
        $order_table .= '</tr>';
        $order_table .= '</tbody>';
        $order_table .= '</table>';
        $order_table .= '<br/>';

        $order_table .= '<div class="center">';
        $order_table .= 'PDF Generated on';
        $order_table .= '</div>';

        $order_table .= '</body>';
        $html1 = $order_table;
        $pdfFilePath = "output_pdf_name.pdf";
        $this->m_pdf->pdf->mirrorMargins = 1;

        $this->m_pdf->pdf->SetHTMLHeader('<div style="text-align: right; font-weight: bold;">Invoice</div>', 'O');

        $this->m_pdf->pdf->SetHTMLHeader('<div style="border-bottom: 1px solid #000000;">My document</div>', 'E');

        $this->m_pdf->pdf->SetHTMLFooter('<table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 8pt; color: #000000; font-weight: bold; font-style: italic;"><tr><td width="33%"><span style="font-weight: bold; font-style: italic;">{DATE j-m-Y}</span></td><td width="33%" align="center" style="font-weight: bold; font-style: italic;">{PAGENO}/{nbpg}</td>
<td width="33%" style="text-align: right; ">My document</td></tr></table>');
        $this->m_pdf->pdf->SetHTMLFooter('<table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 8pt; color: #000000; font-weight: bold; font-style: italic;"><tr>
<td width="33%"><span style="font-weight: bold; font-style: italic;">My document</span></td><td width="33%" align="center" style="font-weight: bold; font-style: italic;">{PAGENO}/{nbpg}</td>
<td width="33%" style="text-align: right; ">{DATE j-m-Y}</td></tr></table>', 'E');
        $html = mb_convert_encoding($html1, 'UTF-8', 'UTF-8');
        $this->m_pdf->pdf->WriteHTML($html);

        $this->m_pdf->pdf->Output($pdfFilePath, 'F');
        $this->m_pdf->pdf->Output();
    }

    public function previewInvoice($id) {
        $this->load->model("Invoice_model");
        $global = $this->common_model->getGlobalSettings();
        $invoice_data = $this->Invoice_model->getInviceDetails($id);

//$products = $this->common_model->getRecords(TABLES::$ORDER_DETAILS, '', array('ord_det_order_number_fk' => $invoice_data[0]['ord_order_number']));

        $this->template->set('user_session', $data['user_session']);
        $this->template->set('global', $global);
        $this->template->set('products', $products);
        $this->template->set('invoice', $invoice_data);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Order Details')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('finance/preview_invoice');
    }

    public function pdfInvoice($id) {
        $this->load->model("Invoice_model");
        $data['global'] = $this->common_model->getGlobalSettings();
        $data['invoice'] = $this->Invoice_model->getInviceDetails($id);
        $data['products'] = $this->common_model->getRecords(TABLES::$ORDER_DETAILS, '', array('ord_det_order_number_fk' => $data['invoice'][0]['ord_order_number']));


        $pdfFilePath = "output_pdf_name.pdf";
        $html1 = $this->load->view('finance/preview_invoice', $data, true); //load the pdf_output.php by passing our data and get all data in $html varriable.
//echo $html1;die();
        $html = mb_convert_encoding($html1, 'UTF-8', 'UTF-8');

        $this->m_pdf->pdf->WriteHTML($html);

        $this->m_pdf->pdf->Output($pdfFilePath, 'F');
        $this->m_pdf->pdf->Output();
    }

    public function addRecurringInvoice() {
        $this->load->model('Order_model');
        $this->load->model('Invoice_model');
        $invoice_no = $this->Invoice_model->getServiceInvoiceNumber();
        //print_r($invoice_no);
        if (empty($invoice_no)) {
            $inv_no = "0000001";
        } else {
            $inv_no = $invoice_no[0]['number'];
        }
        if (count($_POST) > 0) {
            $invoice_no = $this->input->post('invoice_no');
            $arr = array("invoice_number" => $inv_no,
                "from_address" => $this->input->post('from_address'),
                "to_user_address" => $this->input->post('to_user_address'),
                "user_id" => $this->input->post('user_id'),
                "created_time" => date("Y-m-d H:i:s"),
                "total_amount" => $this->input->post('total_amount'),
                "notes" => $this->input->post('notes'),
            );
            $insert = $this->common_model->insertRow($arr, TABLES::$MST_SERVICE_INVOICE);
            for ($i = 0; $i < count($_POST['product_name']); $i++) {
                $transval = array("master_invoice_id" => $insert,
                    "product_name" => $_POST['product_name'][$i],
                    "amount" => $_POST['amount'][$i],
                    "product_desc" => $_POST['desc'][$i]
                );
                $this->common_model->insertRow($transval, TABLES::$TRANS_SERVICE_INVOICE);
            }
            redirect(base_url() . "finance/recurring-invoices");
        }

        $global = $this->common_model->getGlobalSettings();
        $invoice_no = $this->Order_model->getInvoiceNumber();
        $clients = $this->Invoice_model->getClients();
        $this->template->set('invoice_no', $invoice_no[0]['number']);
        $this->template->set('global', $global);
        $this->template->set('users', $clients);
        $this->template->set('products', $products);
        $this->template->set('invoice', $invoice_data);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Order Details')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('finance/add_recurring_invoice');
    }

    public function recurringInvoices() {

        $this->load->model('Order_model');
        $this->load->model('Invoice_model');
        $invoices = $this->common_model->getRecords(TABLES::$INVOICES . " as i", "i.*,(select concat(fname,' ',lname) from " . TABLES::$USER_DETAILS . " where user_id=i.user_id) as client_name", array('i.invoice_type' => 'membership', 'i.status' => 'unpaid'));
        $this->template->set('invoices', $invoices);
        $this->template->set('global', $global);
        $this->template->set('clients', $clients);
        $this->template->set('products', $products);
        $this->template->set('invoice', $invoice_data);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Order Details')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('finance/recurring_invoice_list');
    }

    public function payInvoice($payerid) {
        if (count($_POST) > 0) {
            $indata = $this->common_model->getRecords(TABLES::$INVOICES, '', array('invoice_id' => $payerid));
            $update_invoice = $this->common_model->updateRow(TABLES::$INVOICES, array('status' => 'paid'), array('invoice_id' => $payerid));
            $payment_data = array('order_no' => $indata[0]['order_number'], 'payment_date' => date("Y-n-d H:i:s"), 'total_amount_paid' => $this->input->post('paid_amount'), 'ack' => 'Success');
            $payment_insert = $this->common_model->insertRow($payment_data, TABLES::$PAYMENT);
            if ($payment_insert) {
                $this->session->userdata('msg', 'Invoice paid successfully');
                redirect(base_url() . "finance/recurring-invoices");
            }
        }
        $this->template->set('global', $global);
        $this->template->set('payerid', $payerid);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Order Details')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('finance/pay_invoice');
    }

    public function paymentReceived() {
        $data['global'] = $this->common_model->getGlobalSettings();
        $this->load->model('invoice_model');
        $payments = $this->common_model->getRecords(TABLES::$MST_SERVICE_INVOICE." as msi","msi.*,(select concat(fname,' ',lname) from " . TABLES::$USER_DETAILS . " where user_id=msi.user_id) as client_name",array('status'=>'1'));
        $this->template->set('global', $data['global']);
        $this->template->set('payments', $payments);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Order Details')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('finance/payments_received');
    }

    public function sendInvoiceInMail($id) {
        $this->load->model("Invoice_model");
        $data['global'] = $this->common_model->getGlobalSettings();
        $data['invoice'] = $this->Invoice_model->getInviceDetails($id);
        $data['invoice_data'] = $this->Invoice_model->getInviceDetails($id); 
        //print_r($data['invoice_data']);die();
        //$data['products'] = $this->common_model->getRecords(TABLES::$ORDER_DETAILS . ' as i', 'i.*,(select email from ' . TABLES::$ADMIN_USER . ' where id=' . $data['invoice_data'][0]['ord_user_fk'] . ') as client_mail', array('ord_det_order_number_fk' => $data['invoice_data'][0]['ord_order_number']));
        $html1 = $this->load->view('finance/invoice_email_template', $data, true);
        //echo $html1;die();
        $this->common_model->sendEmail($data['invoice_data'][0]['email'], array('email' => $data['global']['site_email'], 'name' => $data['global']['site_title']), 'Membership Invoce On RazorClean Inc', $html1);
        $this->session->set_userdata("msg", "Invoice has sent to user's email");
        redirect(base_url() . "finance/invoice-list");
    }

    public function InvoiceBillPayment($id) {

        $amount = $this->common_model->getRecords(TABLES::$MST_SERVICE_INVOICE, '', array('id' => $id));
        $product_name = 'Invoice Bill Payment';
        $product_id = $amount[0]['invoice_number'];
        $product_currency = 'USD';
        $product_price = $amount[0]['total_amount'];


//Here we can use paypal url or sanbox url.
        $paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
//Here we can used seller email id. 
        $merchant_email = 'vrishalidemo@gmail.com';
//here we can put cancle url when payment is not completed.
        $cancel_return = base_url()."donate-with-paypal/index.php";
//here we can put cancle url when payment is Successful.
        $success_return = base_url()."backend/invoice/successInvoiceBillPayment/" . $id;
        ?>
        <div style="margin-left: 38%"><img src="<?php echo backend_asset_url()?>images/ajax-loader.gif"/><img src="<?php echo backend_asset_url()?>images/processing_animation.gif"/></div>       

        <form name="myform" action="<?php echo $paypal_url; ?>" method="post" target="_top">
            <input type='hidden' name='business' value = "<?php echo $merchant_email; ?>">
            <input type='hidden' name='item_name' value = "<?php echo $product_name; ?>">
            <input type='hidden' name='item_number' value = "<?php echo $product_id; ?>">
            <input type='hidden' name='amount' value = "<?php echo $product_price; ?>">
            <input type='hidden' name='no_shipping' value='1'>
            <input type='hidden' name='currency_code' value = "<?php echo $product_currency; ?>">
            <input type='hidden' name='notify_url' value='<?php echo $success_return; ?>'>
            <input type='hidden' name='cancel_return' alue = "<?php echo $cancel_return ?>">
            <input type='hidden' name='return' value = "<?php echo $success_return; ?>">
            <input type='hidden' name='rm' value='2'>
            <!-- COPY and PASTE Your Button Code -->
            <input type="hidden" name="cmd" value="_xclick">
        </form>
        <script type="text/javascript">
            document.myform.submit();
        </script>
        <?php
    }
    
    

    public function successInvoiceBillPayment($id) {
        //print_r($_REQUEST['txn_id']);die();
        if (!empty($_REQUEST)) {
            $product_no = $_REQUEST['item_number']; // Product ID
            $product_transaction = $_REQUEST['txn_id']; // Paypal transaction ID
            $product_price = $_REQUEST['amt']; // Paypal received amount value
            $product_currency = $_REQUEST['cc']; // Paypal received currency type
            $product_status = $_REQUEST['st']; // Paypal product status  
            $this->common_model->updateRow(TABLES::$MST_SERVICE_INVOICE, array('payment_date'=>date("Y-m-d H:i:s"),'status' => '1', 'transaction_id' => $product_transaction), array('id' => $id));
        }
        $this->session->set_userdata('msg', 'Invoice paid successfully.');
        redirect(base_url() . 'user/invoice-list');
    }

    public function viewReceipt($id) {
        $this->load->model("Invoice_model");
        $this->load->model("Order_model");

        $data['global'] = $this->common_model->getGlobalSettings();
        $data['user_session'] = $this->session->userdata('user_account');
        $invoice_data = $this->Invoice_model->getServiceInviceDetails($id);
        //print_r($invoice_data);die;
        $order_table = '<body>';


        $order_table .= '<div class="address" style="">';
        $order_table .= '<br/>';
        $order_table .= '</div>';
        $order_table .= '<div style="padding:35px;">
                                    <div style="padding-bottom:35px;border-bottom:1px solid #eee;width:100%;">
                                        <div>
                                            <div style="text-transform: uppercase;font-weight: bold;">
                                                <div class="pull-left">
                                                    <img style="width: 160px;margin-top: -10px;margin-right: 10px;" src="' . frontend_asset_url() . 'img/logob.png">
                                                </div>
                                                <div class="pull-right">
                                                    ' . $invoice_data[0]['invoice_number'] . '
                                                </div>
                                            </div>
                                        </div>
                                        <div style="clear:both;"></div>
                                    </div>
                                    <div style="padding:35px 0 50px;text-align:center">
                                        <span style="text-transform: uppercase; border-bottom:1px solid #eee;font-size:13pt;">Payments Received</span>
                                    </div>
                                    <div style="width: 70%;float: left;">
                                        <div style="width: 100%;padding: 11px 0;">
                                            <div style="color:#999;width:35%;float:left;">Payment Date</div>
                                            <div style="width:65%;border-bottom:1px solid #eee;float:right;foat:right;">' . $invoice_data[0]['created_time'] . '</div>
                                            <div style="clear:both;"></div>
                                        </div>
                                        <div style="width: 100%;padding: 10px 0;">
                                            <div style="color:#999;width:35%;float:left;">Transaction ID</div>
                                            <div style="width:65%;border-bottom:1px solid #eee;float:right;foat:right;min-height:22px">' . $invoice_data[0]['transaction_id'] . '</div>
                                            <div style="clear:both;"></div>
                                        </div>
                                    </div>
                                    <div style="text-align:center;color:white;float:right;background:#1B9BA0;width: 25%;
                                         padding: 20px 5px;">
                                        <span> Amount Received</span><br>
                                        
                                        <span style="font-size:16pt;">' . $data['global']['currency_symbol'] . $invoice_data[0]['total_amount'] . '</span>
                                    </div>
                                    <div style="clear:both;"></div>
                                    <div style="padding-top:10px">
                                        <div style="width:75%;border-bottom:1px solid #eee;float:right"><strong>' . ucfirst($invoice_data[0]['fname']) . " " . ucfirst($invoice_data[0]['lname']) . '</strong>
                                        </div>
                                        <div style="color:#999;width:25%">Received From</div>
                                    </div>
                                    <div style="padding-top:25px">
                                        <div style="width:75%;border-bottom:1px solid #eee;float:right">Paypal</div>
                                        <div style="color:#999;width:25%">Payment Mode</div>
                                    </div>
                                    <div style="padding-top:25px">
                                        <div style="width:75%;border-bottom:1px solid #eee;float:right">' . $invoice_data[0]['notes'] . '</div>
                                        <div style="color:#999;width:25%">Notes</div>
                                    </div>

                                    <div style="margin-top:50px">
                                        <div style="width:100%">
                                            <div style="width:50%;float:left"><h4>Payment For</h4></div>
                                           
                                        </div>

                                        <table style="width:100%;margin-bottom:35px;table-layout:fixed;" cellpadding="0" cellspacing="0" border="0">
                                            <thead>
                                            <tr style="height:40px;background:#f5f5f5"><td>Sr No</td>
                                                <td style="padding:5px 10px 5px 10px;word-wrap: break-word;">
                                                    Service / Product                                                </td>
                                                <td style="padding:5px 10px 5px 5px;word-wrap: break-word;" align="right">
                                                    Amount                                                </td>
                                            </tr>
                                            </thead>
                                            <tbody>';
        $price = 0;
        $sr = 1;
        foreach ($invoice_data as $inv) {
            $order_table .='<tr style="border-bottom:1px solid #ededed"><td>' . $sr++ . '</td>
                                                    <td style="padding: 10px 0px 10px 10px;" valign="top">' . $inv['product_name'] . '</td>
                                                <td style="padding: 10px 10px 5px 10px;text-align:right;word-wrap: break-word;" valign="top">
                                                    ' . $data['global']['currency_symbol'] . $inv['amount'] . '                                                </td>
                                               
                                            </tr>';
            $price = $price + $inv['amount'];
        }

        $order_table .='<tr><td colspan=2 style=text-align:right><b>Total Amount</b></td><td style=text-align:right><b>' . $data['global']['currency_symbol'] . $price . '.00</b></td></tr></tbody>
                                        </table>
                                    </div>
                                </div>';
        $order_table .= '</body>';
        $html1 = $order_table;
        $pdfFilePath = "output_pdf_name.pdf";
        $this->m_pdf->pdf->mirrorMargins = 1;       
        $html = mb_convert_encoding($html1, 'UTF-8', 'UTF-8');
        $this->m_pdf->pdf->WriteHTML($html);

        $this->m_pdf->pdf->Output($pdfFilePath, 'F');
        $this->m_pdf->pdf->Output();
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
