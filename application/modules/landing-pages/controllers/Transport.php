<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Transport extends CI_Controller {

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
        $data['page'] = 'Towing';
        $data['testi_data'] = $this->getTestimonialData('Towing');
        $condition = "id IN (3960,3970,3922,3939,3947)";
        $data['states'] = $this->common_model->getRecords(TABLES::$STATES, '*', $condition);
        $data['jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '', array('service_category' => $data['page']), 'id desc', $this->resultsPerpage);
        $data['blogs'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('service_category' => $data['page'], 'status' => '1'), 'post_id desc', 3);
        $this->load->view('transport/index', $data);
    }

    /**
     * code for call towing landing page
     */
    public function review() {
        $data['global_setting'] = $this->global_setting;
        $data['page'] = 'Towing';
        $data['testi_data'] = $this->getTestimonialData('Towing');
        $condition = "id IN (3960,3970,3922,3939,3947)";
        $data['states'] = $this->common_model->getRecords(TABLES::$STATES, '*', $condition);
        $data['jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '', array('service_category' => $data['page']), 'id desc', $this->resultsPerpage);
        $data['blogs'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('service_category' => $data['page'], 'status' => '1'), 'post_id desc', 3);
        $this->load->view('transport/review', $data);
    }

    /**
     * code for call towing landing page
     */
    public function needQuote() {
        $data['global_setting'] = $this->global_setting;
        $data['page'] = 'Towing';
        $data['testi_data'] = $this->getTestimonialData('Towing');
        $condition = "id IN (3960,3970,3922,3939,3947)";
        $data['states'] = $this->common_model->getRecords(TABLES::$STATES, '*', $condition);
        $data['jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '', array('service_category' => $data['page']), 'id desc', $this->resultsPerpage);
        $data['blogs'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('service_category' => $data['page'], 'status' => '1'), 'post_id desc', 3);
        $this->load->view('transport/need-quote', $data);
    }

    /**
     * code for call towing landing page
     */
    public function contactUs() {
        $this->load->view('transport/contact_us');
    }

    public function submitReview() {

        if (count($_POST) > 0) {
            $data = array("reviewer_name" => $this->input->post('reviewer_name'),
                "email" => $this->input->post('reviewer_email'),
                "organisation" => $this->input->post('organisation'),
                "review" => $this->input->post('review'),
                "rating" => $this->input->post('rating'),
                "created_time" => date("Y-m-d H:i:s"));
            $insert = $this->common_model->insertRow($data, TABLES::$TRANSPORT_CUSTOMER_REVIEW);
            if ($insert) {
                $msg = '<p>Hi Site Admin,</p><p>Below user has posted review on transport site.</p><p>Reviewer Name - ' . $this->input->post('reviewer_name') . '</p><p>Reviewer Email - ' . $this->input->post('reviewer_email') . '</p><p>Organisation - ' . $this->input->post('organisation') . '</p><p>Review - ' . $this->input->post('review') . '</p><p>Rating - ' . $this->input->post('rating') . '</p><p> Thanks,<br>Razorclean Inc.';
                $this->common_model->sendEmail($this->global_setting['site_email'], array('email' => 'atul.suroshe@live.com', 'name' => 'Razorclean'), 'Posted review on transport', $msg);
                $this->session->set_userdata('msg', 'Thanks for the review. Your review has been posted.');
                redirect(base_url() . 'transport/customer-review');
            }
        }
    }

    public function submitContact() {
        if (count($_POST) > 0) {
            $msg = '<p>Hi Site Admin,</p><p>Below user has contacted on transport site.</p><p>Full Name - ' . $this->input->post('name') . '</p><p>Email - ' . $this->input->post('email') . '</p><p>Phone Number - ' . $this->input->post('phoneno') . '</p><p>Enquiries_for - ' . $this->input->post('enquiries_for') . '</p><p>Message - ' . $this->input->post('msg') . '</p><p> Thanks,<br>Razorclean Inc.';
            $this->common_model->sendEmail($this->global_setting['site_email'], array('email' => $this->input->post('email'), 'name' => 'Razorclean'), 'Enquiry on transport site', $msg);
            $this->session->set_userdata('msg', 'Thanks for the contacting. We\'ll get back to you soon.');
            redirect(base_url() . 'transport/contact-us');
        }
    }

    public function submitQuote() {
        if (count($_POST) > 0) {
            $msg = '<p>Hi Site Admin,</p><p>Below user has asked for quote on transport site.</p><p>Full Name - ' . stripslashes($this->input->post('name')) . '</p><p>Email - ' . stripslashes($this->input->post('email')) . '</p><p>Phone Number - ' . stripslashes($this->input->post('phoneno')) . '</p></p><p>Message - ' . stripslashes($this->input->post('msg')) . '</p><p> Thanks,<br>Razorclean Inc.';
            $this->common_model->sendEmail($this->global_setting['site_email'], array('email' => $this->input->post('email'), 'name' => 'Razorclean'), 'Need quote on transport site.', $msg);
            $this->session->set_userdata('msg', 'Thanks for the contacting. We\'ll get back to you soon.');
            redirect(base_url() . 'transport/need-a-quote');
        }
    }

    public function getTestimonialData($servicetype) {
        return $this->common_model->getRecords(TABLES::$MST_TESTIMONIAL, '*', array('service' => $servicetype), 'id desc');
    }

}
