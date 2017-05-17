<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pest_Control extends CI_Controller {

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
        $this->load->view('pest-control/index', $data);
    }
    
    public function aboutus() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('pest-control/aboutus', $data);
    }
    public function contactus() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('pest-control/contactus', $data);
    }
    public function warrenty() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('pest-control/warrenty', $data);
    }
    public function protectionPlan() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('pest-control/protection_plans', $data);
    }
    public function commercialPlan() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('pest-control/commercial_plan', $data);
    }
    public function residentialPlan() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('pest-control/residential_plan', $data);
    }
    public function termiteProtection() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('pest-control/termite_protection', $data);
    }
    public function serviceAreas() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('pest-control/services_areas', $data);
    }
    public function serviceInformation() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('pest-control/service_information', $data);
    }
    public function services() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('pest-control/services', $data);
    }
    public function antControl() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('pest-control/ant_control', $data);
    }
    public function bedBugControl() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('pest-control/bed_bug_control', $data);
    }
    public function commercialControl() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('pest-control/commercial_pest_control', $data);
    }
    public function fireAnt() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('pest-control/fire_ant', $data);
    }
    public function fleaAndTick() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('pest-control/flea_and_tick_service', $data);
    }
    public function generalPest() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('pest-control/general_pest_service', $data);
    }
    public function mosquito() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('pest-control/mosquito_service', $data);
    }
    public function pestControlManagement() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('pest-control/pest_control_management', $data);
    }
    public function preConstruction() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('pest-control/pre_construction_services', $data);
    }
    public function residential() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('pest-control/residential_service', $data);
    }
    public function roachTreatment() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('pest-control/roach_treatment', $data);
    }
    public function rodentControl() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('pest-control/rodent_control', $data);
    }
    public function spiderControl() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('pest-control/spider_control', $data);
    }
    public function standardControl() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('pest-control/standard_control_services', $data);
    }
    public function termiteInspetionsControl() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('pest-control/termite_inspections_control', $data);
    }
    public function wildLife() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('pest-control/wildlife_services', $data);
    }
    public function getFreeEstimate() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('pest-control/get_free_estimate', $data);
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
            $msg = '<p>Hi Site Admin,</p><p>Below user has asked for estimate on pest control site.</p><p>Full Name - ' . stripslashes($this->input->post('contact_name')) . '</p><p>Email - ' . stripslashes($this->input->post('contact_email')) . '</p><p>Phone Number - ' . stripslashes($this->input->post('contact_phone')) . '</p><p> Zipcode : '.$this->input->post('zip').'</p><p>Message - ' . stripslashes($this->input->post('contact_message')) . '</p><p>Need help with - ' . stripslashes($this->input->post('help')) . '</p><p>Time to talk ' . stripslashes($this->input->post('time_to_contact')) . '</p><p> Thanks,<br>Razorclean Inc.';
            $this->common_model->sendEmail($this->global_setting['site_email'], array('email' => $this->input->post('contact_email'), 'name' => 'Razorclean'), 'Request for free estimate on pest control site', $msg);
            if ($insert) {
                $map ['status'] = '1';
                $map ['msg'] = "Your message has been sent successfully! We will respond within 24 hours. Thank you!";
                echo json_encode($map);
            }
        }
    }


    

}
