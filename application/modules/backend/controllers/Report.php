<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Report extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model("common_model");
        $this->load->model("product_model");
        $data['user_session'] = $this->session->userdata('user_account');
        $this->user_id = $data['user_session']['user_id'];
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
            redirect(base_url() . "login");
        }
    }

    /* Frontend : Manage Blog Start */

    public function expense()
    {
        if(isset($_GET['from_date']) && isset($_GET['to_date'])){
            
            $cond = "date >='".date("Y-m-d",strtotime($this->input->get('from_date')))."' and date <='".date("Y-m-d",strtotime($this->input->get('to_date')))."'";
            $data['expense'] = $this->common_model->getRecords(TABLES::$EXPENSE, '*',$cond);
            $this->template->set('expense', $data['expense']);
        }else{
            $data['expense'] = $this->common_model->getRecords(TABLES::$EXPENSE, '*');
            $this->template->set('expense', $data['expense']);
        }
        $data['global'] = $this->common_model->getGlobalSettings();
        $data = $this->common_model->commonFunction();
        $data['user_session'] = $this->session->userdata('user_account');
        #START Action :: Fetch all active Blog added by admin :   
        



        $this->template->set('page', 'productlist');
        
        $this->template->set('global', $data['global']);
        $this->template->set('user_session', $data['user_session']);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Vendors List')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('finance/expense_report');
    }

    public function submitVendor()
    {
        $this->load->library('form_validation');
        $result = array();
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $result ['status'] = '0';
            $result ['msg'] = validation_errors();
            echo json_encode($result);
            exit;
        } else {
            $user['name'] = $this->input->post('name');
            $user['email'] = $this->input->post('email');
            $user['phone'] = $this->input->post('phone');
            $user['message'] = $this->input->post('message');
            $user['service'] = $this->input->post('service');
            $user['created_time'] = date('Y-m-d H:i:s');

            $uid = $this->common_model->insertRow($user, TABLES::$VENDORS);
            if ($uid) {
                $result ['status'] = '1';
                $result ['msg'] = "Thanks for the interest. We'll get back to you soon.";
                echo json_encode($result);
                exit;
            }
        }
    }

    public function email()
    {
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.mailtrap.io',
            'smtp_port' => 2525,
            'smtp_user' => 'b235f254e975f4',
            'smtp_pass' => '87e6c1bd0095f6',
            'crlf' => "\r\n",
            'newline' => "\r\n",
            'mail_type' => "html",
            'charset' => 'iso-8859-1',
            'validate' => TRUE,
        );

        $this->load->library('email', $config);
        $this->email->initialize($config);


        // set the from address
        $this->email->from('atul.suroshe@gmail.com');

        // set the subject
        $this->email->subject("test");

        // set recipeinets
        $this->email->to("vrishalidemo@gmail.com");

        // set mail message
        $this->email->message("test msg");

        if ($attach != "") {
            $this->email->attach($attach);
        }

        // return boolean value for email send
        return $this->email->send();
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
