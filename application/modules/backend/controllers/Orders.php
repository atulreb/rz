<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Orders extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model("common_model");
        $this->load->model("blog_model");
		
		$data['user_session'] = $this->session->userdata('user_account');
		//echo $this->session->userdata['user_account']['username']; die;
		
		if ($data['user_session']['role_id'] == '1') {
            $this->sidebar = 'partials/sidebar';
        } else {
            $this->sidebar = 'partials/user_sidebar';
        }
		
        if (!$this->common_model->isLoggedIn()) {
            redirect(base_url());
        }
//        $this->load->library('form_validation');
    }

    /* Frontend : Manage Blog Start */

    public function index()
    {
        $this->load->model("Order_model");    
        $data['global'] = $this->common_model->getGlobalSettings();
        $data = $this->common_model->commonFunction();
        $data['user_session'] = $this->session->userdata('user_account');
        $invoice_record = $this->common_model->getRecords('tbl_invoices', array('invoice_id', 'invoice_number'), '', '','1');
        /* echo '<pre/>';
         print_r($invoice_record);*/
       // $orders = $this->common_model->getRecords(TABLES::$ORDER_SUMMARY,"*", array('ord_user_fk' => $data['user_session']['user_id'] ));
        $orders = $this->Order_model->getAllOrders($data['user_session']['user_id']);

        $this->template->set('page', 'bloglist');
        $this->template->set('orders', $orders);
        $this->template->set('global', $data['global']);
        $this->template->set('user_session', $data['user_session']);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Orders')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('order-details/order_list');
    }
    
    public function orderDetails($id){
        
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

    
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
