<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Login extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('cookie');
        $this->load->model("common_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function adminlogin()
    {
        $this->form_validation->set_rules('user_name', 'Username', 'trim|required');
        $this->form_validation->set_rules('user_password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $msg = validation_errors();
            $this->session->set_userdata('msg', $msg);
            redirect('login');
        }
        $user_name = trim($this->input->post('user_name'));
        $user_password = $this->input->post('user_password');
        $user_details = $this->common_model->getRecords(TABLES::$ADMIN_USER, '*', array('username' => $user_name, 'password' => md5($user_password)));
        $user_details1 = $this->common_model->getRecords(TABLES::$USER_DETAILS, '*', array('user_id' => $user_details[0]['id']));
        $map = array();
        if (count($user_details) > 0) {
            if (MD5($user_password) === $user_details[0]['password']) {
                if ($user_details[0]['verified'] == 1) {
                    $user = array();
                    $user['username'] = $user_details[0]['username'];
                    $user['email'] = $user_details[0]['email'];
                    $user['fname'] = $user_details1[0]['fname'];
                    $user['lname'] = $user_details1[0]['lname'];
                    $user['phone'] = $user_details1[0]['mobile'];
                    $user['user_id'] = $user_details[0]['id'];
                    $user['role_id'] = $user_details[0]['role_id'];
                    $this->session->set_userdata('user_account', $user);
                    $map ['msg'] = "Logged in successfully.";
                    if ($user_details[0]['role_id'] == 1) {
                        redirect('admin/dashboard');
                    } else if ($user_details[0]['role_id'] == 2) {
                        redirect('employee/dashboard');
                    } else if ($user_details[0]['role_id'] == 3) {
                        redirect('user/dashboard');
                    }else{
                        redirect('finance/dashboard');
                    }
                } else {
                    $this->session->set_userdata('msg', "Login to this site have been blocked by Admin.");
                    $map ['msg'] = "Logged in successfully.";
                    redirect('admin/login');
                }
            } else {
                $msg = "Email or password is wrong.";
            }
        } else {
            $msg = "Email or password is wrong.";
        }
        $this->session->set_userdata('msg', $msg);
        redirect('login');
    }

    /**
     * Code For Logout Functionality
     */
    public function logout()
    {
        $this->session->unset_userdata('adminsession');
        redirect(base_url() . "admin");
    }

}
