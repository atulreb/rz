<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Donate extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->config->load('paypal');
        $this->load->library('form_validation');
        $this->load->model('common_model');
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
    }

    public function index() {
        $this->load->view('landing-pages/donate');
    }

    public function userDonationList() {
        $global = $this->common_model->getGlobalSettings();
        $session = $this->session->userdata('user_account');
        $data = $this->common_model->getRecords(TABLES::$DONATIONS, '', array('user_id' => $session['user_id'], 'status' => '1'));

        $this->template->set('global', $global);
        $this->template->set('donations', $data);
        $this->template->set('page', 'donations');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Donations')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('user/donations');
    }

    public function adminDonationList() {
        $global = $this->common_model->getGlobalSettings();
        $session = $this->session->userdata('user_account');
        $data = $this->common_model->getRecords(TABLES::$DONATIONS, '', array('status' => '1'));

        $this->template->set('donations', $data);
        $this->template->set('global', $global);
        $this->template->set('page', 'donations');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Donations')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('finance/donations');
    }

    public function foundationDonate() {
        $session = $this->session->userdata('user_account');
        if ($session['user_id'] == "") {
            $userid = "";
        } else {
            $userid = $session['user_id'];
        }
        $donat_data = array("user_id" => $userid, "name" => $this->input->post('name'), "email" => $this->input->post('name'), "phone" => $this->input->post('phone'), "amount" => $this->input->post('amount'), "message" => $this->input->post('message'));
        $lastid = $this->common_model->insertRow($donat_data, TABLES::$DONATIONS);
        
		$product_name = 'Donation';
        $product_currency = 'USD';
        $product_id = 4;
        $product_price = $_POST['amount'];
        //Here we can use paypal url or sanbox url.
        $paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
        //Here we can used seller email id. 
        $merchant_email = 'vrishalidemo@gmail.com';
        //here we can put cancle url when payment is not completed.
        $cancel_return = "http://localhost/donate-with-paypal/index.php";
        //here we can put cancle url when payment is Successful.
        $success_return = base_url() . "backend/donate/success/" . $lastid;
        ?>
        <div style="margin-left: 38%"><img src="<?php echo backend_asset_url()?><images/ajax-loader.gif"/><img src="<?php echo backend_asset_url()?>images/processing_animation.gif"/></div>
        <form name = "myform" action = "<?php echo $paypal_url; ?>" method = "post" target = "_top">
            <input type = "hidden" name = "cmd" value = "_donations">
            <input type = "hidden" name = "cancel_return" value = "<?php echo $cancel_return ?>">
            <input type = "hidden" name = "return" value = "<?php echo $success_return; ?>">
            <input type = "hidden" name = "business" value = "<?php echo $merchant_email; ?>">
            <input type = "hidden" name = "lc" value = "C2">
            <input type = "hidden" name = "item_name" value = "<?php echo $product_name; ?>">
            <input type = "hidden" name = "item_number" value = "<?php echo $product_id; ?>">
            <input type = "hidden" name = "amount" value = "<?php echo $product_price; ?>">
            <input type = "hidden" name = "currency_code" value = "<?php echo $product_currency; ?>">
            <input type = "hidden" name = "button_subtype" value = "services">
            <input type='hidden' name='rm' value='2'>
            <input type = "hidden" name = "no_note" value = "0">
        </form>
        <script type="text/javascript">
            document.myform.submit();
        </script>
        <?php
    }

    public function success($id) {

        if (!empty($_REQUEST)) {
            $update = $this->common_model->updateRow(TABLES::$DONATIONS, array('payment_date' => date("Y-m-d H:i:s", strtotime($_REQUEST['payment_date'])), 'transaction_id' => $_REQUEST['txn_id'], 'status' => '1'), array('id' => $id));
             redirect(base_url()."foundation");
		}
    }

    public function donationReceipt($id) {
        $global = $this->common_model->getGlobalSettings();
        $data = $this->common_model->getRecords(TABLES::$DONATIONS, '', array('id' => $id));
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
                                            </div>
                                        </div>
                                        <div style="clear:both;"></div>
                                    </div>
                                    <div style="padding:35px 0 50px;text-align:center">
                                        <span style="text-transform: uppercase; border-bottom:1px solid #eee;font-size:13pt;">Donation Receipt</span>
                                    </div>
                                    <div style="width: 70%;float: left;">
                                        <div style="width: 100%;padding: 11px 0;">
                                            <div style="color:#999;width:35%;float:left;">Payment Date</div>
                                            <div style="width:65%;border-bottom:1px solid #eee;float:right;foat:right;">' . date("d M Y H:i A",strtotime($data[0]['payment_date'])) . '</div>
                                            <div style="clear:both;"></div>
                                        </div>
                                        <div style="width: 100%;padding: 10px 0;">
                                            <div style="color:#999;width:35%;float:left;">Transaction ID</div>
                                            <div style="width:65%;border-bottom:1px solid #eee;float:right;foat:right;min-height:22px">' . $data[0]['transaction_id'] . '</div>
                                            <div style="clear:both;"></div>
                                        </div>
                                    </div>
                                    <div style="text-align:center;color:white;float:right;background:#1B9BA0;width: 25%;
                                         padding: 20px 5px;">
                                        <span> Amount Received</span><br>
                                        
                                        <span style="font-size:16pt;">' . $global['currency_symbol'] . $data[0]['amount'] . '</span>
                                    </div>
                                    <div style="clear:both;"></div>
                                    <div style="padding-top:10px">
                                        <div style="width:75%;border-bottom:1px solid #eee;float:right"><strong>' . ucfirst($data[0]['name']) . '</strong>
                                        </div>
                                        <div style="color:#999;width:25%">Received From</div>
                                    </div>
                                     <div style="padding-top:25px">
                                        <div style="width:75%;border-bottom:1px solid #eee;float:right">' . $global['currency_symbol'] . $data[0]['amount'] . '</div>
                                        <div style="color:#999;width:25%">Amount Received</div>
                                    </div>
                                    <div style="padding-top:25px">
                                        <div style="width:75%;border-bottom:1px solid #eee;float:right">Paypal</div>
                                        <div style="color:#999;width:25%">Payment Mode</div>
                                    </div>
                                    <div style="padding-top:25px">
                                        <div style="width:75%;border-bottom:1px solid #eee;float:right">' . $data[0]['message'] . '</div>
                                        <div style="color:#999;width:25%">Message</div>
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
