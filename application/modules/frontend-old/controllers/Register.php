<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Register extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('utility_helper');
        $this->load->helper('form');
        $this->load->helper('cookie');
        $this->load->model("common_model");
        $this->load->library('form_validation');
    }

    public function admin()
    {
        
    }

    public function employee()
    {
        $result = array();
        $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[tbl_users.username]');
        $this->form_validation->set_message('is_unique', 'The %s is already registered. Please try with different usernmae');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $result ['status'] = 0;
            $result ['msg'] = validation_errors();
            echo json_encode($result);
            exit;
        } else {
            $user['username'] = $this->input->post('username');
            $user['role_id'] = 2;
            $user['password'] = md5($this->input->post('password'));
            $user['created_time'] = date('Y-m-d H:i:s');

            $uid = $this->common_model->insertRow($user, TABLES::$ADMIN_USER);
            if ($uid) {
                $result ['status'] = 1;
                $result ['msg'] = "Thanks for registration.. Redirecting to login page....";
                echo json_encode($result);
                exit;
            }
        }
    }

}
