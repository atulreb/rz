<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mobile_detail extends CI_Controller {

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
        $this->load->view('mobile-detail/index', $data);
    }
    /**
     * code for call towing landing page
     */
    public function aboutus() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('mobile-detail/aboutus', $data);
    }
    
    public function interiorAutoDetailingService() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('mobile-detail/interior_auto_detailing_service', $data);
    }
    
    public function freshenUpAutoDetailingService() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('mobile-detail/freshenup_auto_detailing_service', $data);
    }
    
    public function ultimateAutoDetailingService() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('mobile-detail/ultimate-auto-detailing-service', $data);
    }
    public function fullAutoDetailingService() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('mobile-detail/full-auto-detailing-service', $data);
    }
    
    public function exteriorAutoDetailingService() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('mobile-detail/exterior-auto-detailing-service', $data);
    }
    
    public function testimonials() {
        $data['global_setting'] = $this->global_setting;
        $data['testi_data'] = $this->common_model->getRecords(TABLES::$MST_TESTIMONIAL, '*', array('service'=>'Mobile Detail'), 'id desc');
        $this->load->view('mobile-detail/testimonials', $data);
    }
    public function contact() {
        $data['global_setting'] = $this->global_setting;
        $data['testi_data'] = $this->common_model->getRecords(TABLES::$MST_TESTIMONIAL, '*', array('service'=>'Mobile Detail'), 'id desc');
        $this->load->view('mobile-detail/contact', $data);
    }
    public function specialOffer() {
        $data['global_setting'] = $this->global_setting;
        $data['testi_data'] = $this->common_model->getRecords(TABLES::$MST_TESTIMONIAL, '*', array('service'=>'Mobile Detail'), 'id desc');
        $this->load->view('mobile-detail/special_offer', $data);
    }

    

}
