<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class CONTACT_US extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('contact_us_model');
        $this->load->model('common_model');
        $this->global_setting = $this->common_model->getGlobalSettings();
    }

    /* Function to list all the Contact us start */

    public function listContactUs() {

        if (!$this->common_model->isLoggedIn()) {
            redirect(base_url() . "admin/login");
        }
        $data = $this->common_model->commonFunction();
        if (count($_POST) > 0) {
            $v = $this->input->post('btn_delete_all');

            $arr_contact_ids = $this->input->post('checkbox');
            if (count($arr_contact_ids) > 0) {
                if (count($arr_contact_ids) > 0) {
                    $this->common_model->deleteRows($arr_contact_ids, TABLES::$MST_CONTACT_US, "contact_id");
                    $this->common_model->deleteRows($arr_contact_ids, TABLES::$TRANS_CONTACT_FEEDBACK, "contact_id");
                }
                $this->session->set_userdata("msg", "<span class='success'>Records deleted successfully!</span>");
            }
        }
        $arr_contact_us = $this->contact_us_model->getContactUs('', '', 'contact_id desc');

        $this->template->set('global_setting', $this->global_setting);
        $this->template->set('arr_contact_us', $arr_contact_us);
        $this->template->set('page', 'contact_list');
        $this->template->set('global', $this->global_setting);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title($this->global_setting['site_title'] . ' | Manage Contact Us')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', 'partials/sidebar')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('contactus/contact_us_list');
    }

    /* Function to list all the Contact us end */


    /* Function to list view start */

    function view($contact_id = 0) {
        $contact_id = base64_decode($contact_id);
        if (!$this->common_model->isLoggedIn()) {
            redirect(base_url() . "backend/login");
        }
        $data = $this->common_model->commonFunction();
        $data['arr_contact'] = $this->common_model->getRecords(TABLES::$MST_CONTACT_US, "*", array("contact_id" => intval($contact_id)));
        $data['arr_feedback_contact'] = $this->common_model->getRecords(TABLES::$TRANS_CONTACT_FEEDBACK, "message_body,message_subject,reply_date", array("contact_id" => intval($contact_id)));
        $message = '';
        foreach ($data['arr_feedback_contact'] as $val) {
            $reply_msg = 'Please see below you replied on user message on ' . date($data['global']['date_format'], strtotime($val['reply_date'])) . ':- ' . PHP_EOL . PHP_EOL;
            $message .= $reply_msg . $val['message_body'] . PHP_EOL . PHP_EOL;
        }
        $reply_msg = 'Please see user message on ' . date($data['global']['date_format'], strtotime($data['arr_contact'][0]['contact_created_date'])) . ':- ' . PHP_EOL . PHP_EOL;
        $message .= $reply_msg . $data['arr_contact'][0]['contact_message'] . PHP_EOL . PHP_EOL;



        $this->template->set('global_setting', $this->global_setting);
        $this->template->set('page', 'contact_list');
        $this->template->set('arr_contact', $data['arr_contact']);
        $this->template->set('message', $message);
        $this->template->set('reply_msg', $reply_msg);
        $this->template->set('global', $this->global_setting);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title($this->global_setting['site_title'] . ' | Manage Contact Us')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', 'partials/sidebar')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('contactus/contact_us_view');
    }

    /* Function to list view end */


    /* Function to reply contact us start */

    function reply($contact_id = 0) {
        $contact_id = base64_decode($contact_id);
        if (!$this->common_model->isLoggedIn()) {
            redirect(base_url() . "backend/login");
        }
        $data = $this->common_model->commonFunction();
        $data['global'] = $this->common_model->getGlobalSettings();
        if ($this->input->post()) {
            $arr_insert_fields = array(
                "contact_id" => $_POST['contact_id'],
                "message_to" => addslashes($_POST['to']),
                "message_from_name" => addslashes($_POST['from_name']),
                "message_from_email" => addslashes($_POST['from_email']),
//                "message_subject" => addslashes($_POST['subject']),
                "message_body" => addslashes($_POST['message']),
                "reply_date" => date('Y-m-d H:i:s')
            );
            $last_id = $this->common_model->insertRow($arr_insert_fields, TABLES::$TRANS_CONTACT_FEEDBACK);
            $arr_update_fields = array(
                "contact_reply_status" => '1'
            );
            $arr_condition = array("contact_id" => $_POST['contact_id']);
            $this->common_model->updateRow(TABLES::$MST_CONTACT_US, $arr_update_fields, $arr_condition);
            $mail = $this->common_model->sendEmail(array($this->input->post('to')), array("email" => $data['global']['site_email'], "name" => $data['global']['site_title']), $this->input->post('subject'), $this->input->post('message'));
            if ($mail) {
                $this->session->set_userdata("msg", "<span class='success'>Reply message sent successfully!</span>");
            } else {
                $this->session->set_userdata("msg", "<span class='success'>Reply message sent failed!</span>");
            }
            redirect(base_url() . 'admin/contact-us');
        }
        $data['arr_contact'] = $this->common_model->getRecords(TABLES::$MST_CONTACT_US, "*", array("contact_id" => intval($contact_id)));
        $data['arr_feedback_contact'] = $this->common_model->getRecords(TABLES::$TRANS_CONTACT_FEEDBACK, "message_body,message_subject,reply_date", array("contact_id" => intval($contact_id)));
        $message = PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL;
        foreach ($data['arr_feedback_contact'] as $val) {
            $reply_msg = 'Please see below you replied on user message on ' . date($data['global']['date_format'], strtotime($val['reply_date'])) . ':- ' . PHP_EOL . PHP_EOL;
            $message .= $reply_msg . $val['message_body'] . PHP_EOL . PHP_EOL;
        }
        $reply_msg = 'Please see user message on ' . date($data['global']['date_format'], strtotime($data['arr_contact'][0]['contact_created_date'])) . ':- ' . PHP_EOL . PHP_EOL;
        $message .= $reply_msg . $data['arr_contact'][0]['contact_message'] . PHP_EOL . PHP_EOL;



        $this->template->set('global_setting', $this->global_setting);
        $this->template->set('page', 'contact_list');
        $this->template->set('arr_contact', $data['arr_contact']);
        $this->template->set('arr_feedback_contact', $data['arr_feedback_contact']);
        $this->template->set('message', $message);
        $this->template->set('reply_msg', $reply_msg);
        $this->template->set('global', $this->global_setting);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title($this->global_setting['site_title'] . ' | Manage Contact Us')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', 'partials/sidebar')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('contactus/contact_us_reply');
    }

    /* Function to reply contact us end */

    /*
     * function to submit contact form from frontend
     */

    public function submitContactFormFrontent() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('contact_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('contact_email', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('contact_phone', 'Mobile', 'trim|required');

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
            if ($insert) {
                $map ['status'] = '1';
                $map ['msg'] = "Your message has been sent successfully! We will respond within 24 hours. Thank you!";
                echo json_encode($map);
            }
        }
    }

}
