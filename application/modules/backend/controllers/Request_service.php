<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Request_service extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("common_model");
        $this->load->model("product_model");
//        $this->load->library('form_validation');
    }

    /* Frontend : Manage Blog Start */

    public function serviceRequestList() {
        if (!$this->common_model->isLoggedIn()) {
            redirect(base_url() . "admin/login");
        }

        $data['global'] = $this->common_model->getGlobalSettings();
        $data = $this->common_model->commonFunction();
        $data['user_session'] = $this->session->userdata('user_account');
        #START Action :: Fetch all active Blog added by admin :   
        $data['request_list'] = $this->common_model->getRecords(TABLES::$SERVICE_REQEST.' as sr', 'sr.*,(select name from '.TABLES::$STATES.' where id=sr.state) as state,(select name from '.TABLES::$CITIES.' where id=sr.city) as city');
//        print_r($data['arr_product_data']);


        $this->template->set('page', 'productlist');
        $this->template->set('request_list', $data['request_list']);
        $this->template->set('global', $data['global']);
        $this->template->set('user_session', $data['user_session']);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Vendors List')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', 'partials/sidebar')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('service_request_list');
    }

    public function requestServiceForm() {
        $this->load->library('form_validation');
        $result = array();
        $this->form_validation->set_rules('company_name', 'Company Name', 'trim|required');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('state', 'State', 'trim|required');
        $this->form_validation->set_rules('city', 'City', 'trim|required');
        $this->form_validation->set_rules('name', 'name', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $result ['status'] = '0';
            $result ['msg'] = validation_errors();
            echo json_encode($result);
            exit;
        } else {
            $user['company_name'] = $this->input->post('company_name');
            $user['email'] = $this->input->post('email');
            $user['phone'] = $this->input->post('phone');
            $user['name'] = $this->input->post('name');
            $user['service'] = $this->input->post('service');
            $user['state'] = $this->input->post('state');
            $user['city'] = $this->input->post('city');
            $user['created_time'] = date('Y-m-d H:i:s');

            $uid = $this->common_model->insertRow($user, TABLES::$SERVICE_REQEST);
            if ($uid) {
                $result ['status'] = '1';
                $result ['msg'] = "Thanks for the interest. We'll get back to you soon.";
                echo json_encode($result);
                exit;
            }
        }
    }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
