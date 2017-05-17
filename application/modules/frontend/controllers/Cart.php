<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Cart extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('common_model');
        $this->global_setting = $this->common_model->getGlobalSettings();
        $this->load->library('M_pdf');
        $this->config->load('paypal');

        $config = array(
            'Sandbox' => $this->config->item('Sandbox'), // Sandbox / testing mode option.
            'APIUsername' => $this->config->item('APIUsername'), // PayPal API username of the API caller
            'APIPassword' => $this->config->item('APIPassword'), // PayPal API password of the API caller
            'APISignature' => $this->config->item('APISignature'), // PayPal API signature of the API caller
            'APISubject' => '', // PayPal API subject (email address of 3rd party user that has granted API permission for your app)
            'APIVersion' => $this->config->item('APIVersion'), // API version you'd like to use for your call.  You can set a default version in the class and leave this blank if you want.
            'DeviceID' => $this->config->item('DeviceID'),
            'ApplicationID' => $this->config->item('ApplicationID'),
            'DeveloperEmailAccount' => $this->config->item('DeveloperEmailAccount')
        );

        // Show Errors
        if ($config['Sandbox']) {
            error_reporting(E_ALL);
            ini_set('display_errors', '1');
        }

        // Load PayPal library
        $this->load->library('paypal/paypal_pro', $config);
    }

    public function checkout()
    {
        $this->template->set('global', $this->global_setting);
        $this->load->model('Location_model');
        $list = $this->Location_model->getCountry();
        $cartdata = $this->cart->contents();
        $this->template->set('list', $list);
        //print_r($cartdata);
        $this->template->set('cart_data', $cartdata);
        $this->template->set('global_setting', $this->global_setting);
        $this->template->set('page', 'checkout');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('frontend')
                ->title($this->global_setting['site_title'] . ' | Brand Services')
                ->set_partial('header', 'partials/header')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('frontpages/checkout');
    }

    function placeOrder()
    {
        $this->template->set('global', $this->global_setting);
        $this->load->library('form_validation');
        $cartdata = $this->cart->contents();
        //print_r($cartdata);
//        die();
        $result = array();
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
        $this->form_validation->set_rules('country', 'Country', 'trim|required');
        $this->form_validation->set_rules('state', 'State', 'trim|required');
        $this->form_validation->set_rules('city', 'City', 'trim|required');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('zipcode', 'Zipcode', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $result ['status'] = 0;
            $result ['msg'] = validation_errors();
            echo json_encode($result);
            exit;
        } else {
            if ($this->input->post('payment_option') == 'pay_now') {
                $this->session->unset_userdata('PayPalResult');
                $cart['items'] = $cartdata;
                $cart['shopping_cart'] = array(
                    'items' => $cart['items'],
                    'subtotal' => $this->cart->total(),
                    'shipping' => 0,
                    'handling' => 0,
                    'tax' => 0
                );

                $idata = array();
                $os = array();
                $order_no = date("Ymd") . "-" . time() . "-" . mt_rand();
                $os['ord_order_number'] = $order_no;
               
                if (!empty($this->session->userdata('user_account'))) {
                    $data['user_session'] = $this->session->userdata('user_account');

                    $os['ord_user_fk'] = $data['user_session']['user_id'];
                } else {
                    $os['ord_user_fk'] = '1';
                }
                $os['ord_item_summary_total'] = $this->cart->total();
                $os['ord_sub_total'] = $this->cart->total();
                $os['ord_total'] = $this->cart->total();
                $os['ord_total_rows'] = count($idata);
                $os['ord_total_items'] = count($idata);
                $os['ord_status'] = "Placed";
                $os['ord_date'] = date("Y-m-d H:i:s");
                $os['ord_bill_name'] = $this->input->post('first_name') . " " . $this->input->post('last_name');
                $os['ord_bill_address_01'] = $this->input->post('address');
                $os['ord_bill_city'] = $this->input->post('city');
                $os['ord_bill_state'] = $this->input->post('state');
                $os['ord_bill_country'] = $this->input->post('country');
                $os['ord_bill_post_code'] = $this->input->post('zipcode');
                $os['ord_email'] = $this->input->post('email');
                $os['ord_phone'] = $this->input->post('phone');
                $os['delivery_option'] = "Online Payment";

                $cart['shopping_cart']['form_data'] = $os;
                $cart['shopping_cart']['type'] = 'shop';
                $cart['shopping_cart']['grand_total'] = number_format($cart['shopping_cart']['subtotal'] + $cart['shopping_cart']['shipping'] + $cart['shopping_cart']['handling'] + $cart['shopping_cart']['tax'], 2);
                $this->load->vars('cart', $cart);
                $this->session->set_userdata('shopping_cart', $cart);
                $this->template->set('page', 'order_review');
                $this->template->set('cart', $cart);
                $this->template->set_theme('default_theme');
                $this->template->set_layout('frontend')
                        ->title($this->global_setting['site_title'] . ' | Review Order')
                        ->set_partial('header', 'partials/header')
                        ->set_partial('footer', 'partials/footer');
                $this->template->build('paypal/demos/express_checkout/index');
            } else {
                $idata = array();
                $order_no = date("Ymd") . "-" . time() . "-" . mt_rand();
                $os = array();
                $os['ord_order_number'] = $order_no;
                $os['ord_user_fk'] = '1';
                $os['ord_item_summary_total'] = $this->cart->total();
                $os['ord_sub_total'] = $this->cart->total();
                $os['ord_total'] = $this->cart->total();
                $os['ord_total_rows'] = count($idata);
                $os['ord_total_items'] = count($idata);
                $os['ord_status'] = "Placed";
                $os['ord_date'] = date("Y-m-d H:i:s");
                $os['ord_bill_name'] = $this->input->post('first_name') . " " . $this->input->post('last_name');
                $os['ord_bill_address_01'] = $this->input->post('address');
                $os['ord_bill_city'] = $this->input->post('city');
                $os['ord_bill_state'] = $this->input->post('state');
                $os['ord_bill_country'] = $this->input->post('country');
                $os['ord_bill_post_code'] = $this->input->post('zipcode');
                $os['ord_email'] = $this->input->post('email');
                $os['ord_phone'] = $this->input->post('phone');
                $os['delivery_option'] = "Cash On Delivery";
                $insert = $this->common_model->insertRow($os, TABLES::$ORDER_SUMMARY);
                $order_table = "<table border='1' style='border:1px solid #000;padding:8px;border-collapse:collapse'><tr><th style='padding:5px'>Sr No</th><th style='padding:5px'>Item Name</th><th style='padding:5px'>Quantity</th><th style='padding:5px'>Price</th>";
                $sr = 0;
                foreach ($cartdata as $cdata) {
                    $sr++;
                    $idata['ord_det_cart_row_id'] = $cdata['rowid'];
                    $idata['ord_det_item_fk'] = $cdata['id'];
                    $idata['ord_det_item_name'] = $cdata['name'];
                    $idata['ord_det_quantity'] = $cdata['qty'];
                    $idata['ord_det_price_total'] = $cdata['price'] * $cdata['qty'];
                    $idata['ord_det_price'] = $cdata['price'];
                    $idata['ord_det_order_number_fk'] = $order_no;
                    $this->common_model->insertRow($idata, TABLES::$ORDER_DETAILS);
                    $order_table .= "<tr><td style='padding:5px'>" . $sr . "</td><td style='padding:5px'>" . $cdata['name'] . "</td><td style='padding:5px'>" . $cdata['qty'] . "</td><td style='padding:5px'>" . $cdata['price'] . "</td></tr>";
                }
                $order_table .= "</table>";

                $data['global'] = $this->common_model->getGlobalSettings();

                $reserved_words = array(
                    "||FIRST_NAME||" => $_POST['first_name'],
                    "||LAST_NAME||" => $_POST['last_name'],
                    "||ORDER_DETAILS_TABLE||" => $order_table,
                    "||SITE_TITLE||" => $data['global']['site_title']
                );

                $email_content = $this->common_model->getEmailTemplateInfo('order-placed', $reserved_words);

                $this->common_model->sendEmail($this->input->post('email'), array("email" => $data['global']['site_email'], "name" => $data['global']['site_title']), $email_content['subject'], $email_content['content']);

                $html1 = $order_table;
                $pdfFilePath = "output_pdf_name.pdf";
                $this->m_pdf->pdf->mirrorMargins = 1;

                $this->m_pdf->pdf->SetHTMLHeader('<div style="text-align: right; font-weight: bold;">My document</div>', 'O');

                $this->m_pdf->pdf->SetHTMLHeader('<div style="border-bottom: 1px solid #000000;">My document</div>', 'E');

                $this->m_pdf->pdf->SetHTMLFooter('<table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 8pt; color: #000000; font-weight: bold; font-style: italic;"><tr><td width="33%"><span style="font-weight: bold; font-style: italic;">{DATE j-m-Y}</span></td><td width="33%" align="center" style="font-weight: bold; font-style: italic;">{PAGENO}/{nbpg}</td>
<td width="33%" style="text-align: right; ">My document</td></tr></table>');
                $this->m_pdf->pdf->SetHTMLFooter('<table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 8pt; color: #000000; font-weight: bold; font-style: italic;"><tr>
<td width="33%"><span style="font-weight: bold; font-style: italic;">My document</span></td><td width="33%" align="center" style="font-weight: bold; font-style: italic;">{PAGENO}/{nbpg}</td>
<td width="33%" style="text-align: right; ">{DATE j-m-Y}</td></tr></table>', 'E');
                $html = mb_convert_encoding($html1, 'UTF-8', 'UTF-8');
                $this->m_pdf->pdf->WriteHTML($html);
                $this->cart->destroy();
                redirect(base_url() . "thank-you");
            }
        }
    }

    public function thankYou()
    {
        $this->template->set('global', $this->global_setting);
        $this->template->set('page', 'cart');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('frontend')
                ->title($this->global_setting['site_title'] . ' | Brand Services')
                ->set_partial('header', 'partials/header')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('frontpages/thank_you');
    }

    public function cart()
    {
        $this->template->set('global', $this->global_setting);
        $cartdata = $this->cart->contents();
        $this->template->set('cart_data', $cartdata);
        $this->template->set('global_setting', $this->global_setting);
        $this->template->set('page', 'cart');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('frontend')
                ->title($this->global_setting['site_title'] . ' | Brand Services')
                ->set_partial('header', 'partials/header')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('frontpages/cart');
    }

    public function addToCart()
    {
        $this->session->set_userdata('invoice_type','shop');
        $data = array(
            'id' => $this->input->post('id'),
            'qty' => $this->input->post('qty'),
            'price' => $this->input->post('price'),
            'name' => $this->input->post('name'),
            'options' => array('Size' => $this->input->post('size'))
        );
        $insert = $this->cart->insert($data);
        if ($insert) {
            $map['status'] = '1';
            $map['msg'] = 'Item added to cart';
            echo json_encode($map);
            exit();
        } else {
            $map['status'] = '0';
            $map['msg'] = 'Unable to add item t cart';
            echo json_encode($map);
            exit();
        }
    }
    public function addToCartMember()
    {
        $this->session->set_userdata('invoice_type','membership');
        $data = array(
            'id' => $this->input->post('id'),
            'qty' => $this->input->post('qty'),
            'price' => $this->input->post('price'),
            'name' => $this->input->post('name'),
            'options' => array('Size' => $this->input->post('size'))
        );
        $insert = $this->cart->insert($data);
        if ($insert) {
            $map['status'] = '1';
            $map['msg'] = 'Item added to cart';
            echo json_encode($map);
            exit();
        } else {
            $map['status'] = '0';
            $map['msg'] = 'Unable to add item t cart';
            echo json_encode($map);
            exit();
        }
    }

    public function removeCartItem()
    {
        $data = array(
            'rowid' => $this->input->post('rowid'),
            'qty' => '0',
        );
        $remove = $this->cart->update($data);
        if ($remove) {
            $map['status'] = '1';
            $map['msg'] = 'Item removed from cart';
            echo json_encode($map);
            exit();
        } else {
            $map['status'] = '0';
            $map['msg'] = 'Unable to remove item';
            echo json_encode($map);
            exit();
        }
    }

    public function updateCart()
    {
        $data = array(
            'rowid' => $this->input->post('rowid'),
            'qty' => $this->input->post('qty'),
        );
        $remove = $this->cart->update($data);
        if ($remove) {
            $map['status'] = '1';
            $map['msg'] = 'Item removed from cart';
            echo json_encode($map);
            exit();
        } else {
            $map['status'] = '0';
            $map['msg'] = 'Unable to remove item';
            echo json_encode($map);
            exit();
        }
    }

}
