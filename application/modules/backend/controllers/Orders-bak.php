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
//        $this->load->library('form_validation');
    }

    /* Frontend : Manage Blog Start */

    public function index()
    {
        $data['global'] = $this->common_model->getGlobalSettings();
        $data = $this->common_model->commonFunction();
        $data['user_session'] = $this->session->userdata('user_account');
        $orders = $this->common_model->getRecords(TABLES::$ORDER_SUMMARY,"*");
        $this->template->set('page', 'bloglist');
        $this->template->set('orders', $orders);
        $this->template->set('global', $data['global']);
        $this->template->set('user_session', $data['user_session']);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Orders')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', 'partials/sidebar')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('order-details/order_list');
    }
    
    public function orderDetails($id){
        $data['global'] = $this->common_model->getGlobalSettings();
        $data = $this->common_model->commonFunction();
        $data['user_session'] = $this->session->userdata('user_account');
        $orders = $this->common_model->getRecords(TABLES::$ORDER_DETAILS,"*",array('ord_det_order_number_fk'=>$id));
        $ord_d = $this->common_model->getRecords(TABLES::$ORDER_SUMMARY,"*",array('ord_order_number'=>$id));
//        print_r($ord_d);
        $this->template->set('page', 'bloglist');
        $this->template->set('orders', $orders);
        $this->template->set('ord_d', $ord_d);
        $this->template->set('global', $data['global']);
        $this->template->set('user_session', $data['user_session']);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Order Details')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', 'partials/sidebar')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('order-details/order_details');
    }

    
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
