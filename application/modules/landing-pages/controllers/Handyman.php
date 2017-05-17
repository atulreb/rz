<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Handyman extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('common_model');
        $this->global_setting = $this->common_model->getGlobalSettings();
        $this->resultsPerpage = 2;
    }

    /**
     * code for call towing landing page
     */
    public function index() {
        $data['global_setting'] = $this->global_setting;
        $data['testi_data'] = $this->common_model->getRecords(TABLES::$MST_TESTIMONIAL, '*', array('service'=>'Handyman'));
        $this->load->view('handyman/index', $data);
    }  
    
    public function aboutus() {
        $data['global_setting'] = $this->global_setting;
        $data['testi_data'] = $this->common_model->getRecords(TABLES::$MST_TESTIMONIAL, '*', array('service'=>'Handyman'));
        $this->load->view('handyman/aboutus', $data);
    }  
    
    public function services() {
        $data['global_setting'] = $this->global_setting;
        $data['testi_data'] = $this->common_model->getRecords(TABLES::$MST_TESTIMONIAL, '*', array('service'=>'Handyman'));
        $this->load->view('handyman/services', $data);
    }    
    public function testimonials() {
        $data['global_setting'] = $this->global_setting;
        $data['testi_data'] = $this->common_model->getRecords(TABLES::$MST_TESTIMONIAL, '*', array('service'=>'Handyman'));
        $this->load->view('handyman/testimonials', $data);
    }    
    public function handymanTips() {
        $data['global_setting'] = $this->global_setting;
        $data['job_data'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '*', array('service_category'=>'Handyman'));
        $this->load->view('handyman/handyman_tips', $data);
    }     
    public function contactus() {
        $data['global_setting'] = $this->global_setting;
        $data['testi_data'] = $this->common_model->getRecords(TABLES::$MST_TESTIMONIAL, '*', array('service'=>'Handyman'));
        $this->load->view('handyman/contactus', $data);
    }    
    public function gallary() {
        $data['global_setting'] = $this->global_setting;
        $data['testi_data'] = $this->common_model->getRecords(TABLES::$MST_TESTIMONIAL, '*', array('service'=>'Handyman'));
        $this->load->view('handyman/gallary', $data);
    }    
    
    
    public function submitContactUsForm(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('contact_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('contact_email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('contact_phone', 'Phone', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $map ['status'] = '0';
            $map ['msg'] = validation_errors();
            echo json_encode($map);
        } else {
            $user['contact_name'] = $this->input->post('contact_name');
            $user['contact_email'] = $this->input->post('contact_email');
            $user['contact_phone'] = $this->input->post('contact_phone');
            $user['contact_message'] = $this->input->post('contact_message');
            $user['service_category'] = $this->input->post('service_category');
            $user['contact_created_date'] = date("Y-m-d H:i:s");
            $insert = $this->common_model->insertRow($user, TABLES::$MST_CONTACT_US);
            $msg = '<p>Hi Site Admin,</p><p>Below user has contacted on handyman site.</p><p>Full Name - ' . stripslashes($this->input->post('contact_name')) . '</p><p>Email - ' . stripslashes($this->input->post('contact_email')) . '</p><p>Phone Number - ' . stripslashes($this->input->post('contact_phone')) . '</p><p>Message - ' . stripslashes($this->input->post('contact_message')) . '</p><p>Time to talk ' . stripslashes($this->input->post('time_to_contact')) . '</p><p> Thanks,<br>Razorclean Inc.';
            $this->common_model->sendEmail($this->global_setting['site_email'], array('email' => $this->input->post('contact_email'), 'name' => 'Razorclean'), 'User contacted on handyman site', $msg);
            if ($insert) {
                $map ['status'] = '1';
                $map ['msg'] = "Your message has been sent successfully! We will respond within 24 hours. Thank you!";
                echo json_encode($map);
            }
        }
    }
    
    public function getFreeTips(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('fname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('contact_email', 'email', 'trim|required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $map ['status'] = '0';
            $map ['msg'] = validation_errors();
            echo json_encode($map);
        } else {
            $msg = '<p>Hi Site Admin,</p><p>Below user has asked for lawn care tips on lawn care site.</p><p>Full Name - ' . stripslashes($this->input->post('fname')) . ' '.stripslashes($this->input->post('lname')).'</p><p>Email - ' . stripslashes($this->input->post('contact_email')) . '</p><p> Thanks,<br>Razorclean Inc.';
            $this->common_model->sendEmail($this->global_setting['site_email'], array('email' => $this->input->post('contact_email'), 'name' => 'Razorclean'), 'Lawncare tips reuest on lawncare site.', $msg);
            $map ['status'] = '1';
            $map ['msg'] = "Your message has been sent successfully! We will respond within 24 hours. Thank you!";
            echo json_encode($map);
           
        }
    }
}
