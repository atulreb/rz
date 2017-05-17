<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Towing extends CI_Controller {

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
		$data['page'] = 'home';
        $data['global_setting'] = $this->global_setting;
        $this->load->view('towing/index', $data);
    }

    /**
     * code for call towing landing page
     */
    public function towing() {
		$data['page'] = 'towing';
        $data['global_setting'] = $this->global_setting;
        $this->load->view('towing/towing', $data);
    }

    /**
     * code for call towing landing page
     */
    public function heavyEquipment() {
		$data['page'] = 'heavy';
        $data['global_setting'] = $this->global_setting;
        $this->load->view('towing/heavy_equipment', $data);
    }

    /**
     * code for call towing landing page
     */
    public function roadsideAssistant() {
		$data['page'] = 'roadside';
        $data['global_setting'] = $this->global_setting;
        $this->load->view('towing/roadside_assistant', $data);
    }

    /**
     * code for call towing landing page
     */
    public function junkCars() {
		$data['page'] = 'junk';
        $data['global_setting'] = $this->global_setting;
        $this->load->view('towing/junk_cars', $data);
    }

    /**
     * code for call towing landing page
     */
    public function contact() {
		$data['page'] = 'contact';
        $data['global_setting'] = $this->global_setting;
        $this->load->view('towing/contact', $data);
    }

    /**
     * code for call towing landing page
     */
    public function blog($pg = "") {
        $this->load->model('blog_model');
        $data['global'] = $this->global_setting;
        $data['arr_blog_data'] = $this->blog_model->getAllActiveBlogListByService('Towing', $limit = '', $offset = '');
        foreach ($data["arr_blog_data"] as $key => $value) {
            $data['arr_blog_data'][$key]['user_details'] = $this->common_model->getRecords(TABLES::$ADMIN_USER, '*', array('id' => $value['posted_by']));
            $data['arr_blog_data'][$key]['comment'] = $this->common_model->getRecords(TABLES::$TRANS_BLOG_COMMENTS, 'comment_id', array('post_id' => $value['post_id'], 'status' => '1'));
        }
        $totalrows = count($data['arr_blog_data']);
        #Start:: pagination 
        #load pagination library                            
        $this->load->library('pagination');
        $config['base_url'] = base_url() . "towing/blog/";
        $config['total_rows'] = $totalrows;
        $config['per_page'] = 5;
        $config['prev_link'] = "<span>«</span>";
        $config['next_link'] = "<span>»</span>";
        $config['cur_page'] = $pg;
        $config['num_links'] = 6;
        $config['first_link'] = FALSE;
        $config['last_link'] = FALSE;
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="javascript:void(0);">';
        $config['cur_tag_close'] = '</a></li>';
        if ($pg == "") {
            $pg1 = "";
        } else {
            $pg1 = $pg;
        }
        $from = intval(($pg1));
        if ($config['per_page'] == 1) {
            $lenth = 1;
        } else {
            $lenth = intval($config['per_page']);
        }
        $this->pagination->initialize($config);
        $data['pg_link'] = $this->pagination->create_links();
        if ($data['arr_blog_data'] != '') {
            $data['arr_blog_data'] = array_slice($data['arr_blog_data'], $from, $lenth);
        }
		$data['page'] = 'blog';
        $this->load->view('towing/blog', $data);
    }
	
	public function blogDetails($id){
        $data['blog_details'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('slug' => $id, 'status' => '1'));
        $data['global_setting'] = $this->global_setting;
        $this->load->view('towing/blog_details', $data);
    }

    public function callUs() {
        $this->load->helper('utility_helper');
        $this->load->model('common_model');
        $this->load->helper(array(
            'form',
            'url'
        ));
        $errors = array();
        $this->load->library('form_validation');
        $errorMsg = array();
        $err_num = 0;
        $this->form_validation->set_rules('contact_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('contact_email', 'Email', 'trim|required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $map ['status'] = 0;
            $map ['msg'] = validation_errors();
            echo json_encode($map);
        } else {
            $msg = '<p>Hi Site Admin,</p><p>Below user has requested a call for towing service.</p><p>Full Name - ' . stripslashes($this->input->post('contact_name')) . '</p><p>Email - ' . stripslashes($this->input->post('contact_email')) . '</p><p>Phone Number - ' . stripslashes($this->input->post('contact_phone')) . '</p><p> Thanks,<br>Razorclean Inc.';
            $this->common_model->sendEmail($this->global_setting['site_email'], array('email' => $this->input->post('contact_email'), 'name' => 'Razorclean'), 'Call request on towing service.', $msg);
            $map ['status'] = 1;
            $map ['msg'] = "Thanks for contacting. We'll get back to you soon.";
            echo json_encode($map);
        }
    }
    
    public function submitContactForm() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('contact_fname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('contact_lname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('contact_email', 'email', 'trim|required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $map ['status'] = '0';
            $map ['msg'] = validation_errors();
            echo json_encode($map);
        } else {
            $user['contact_name'] = $this->input->post('contact_fname')." ".$this->input->post('contact_lname');
            $user['contact_email'] = $this->input->post('contact_email');
            $user['contact_phone'] = $this->input->post('contact_phone');
            $user['contact_message'] = $this->input->post('request_service')." - ".$this->input->post('contact_message');
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
    
    public function junkCarSchedule() {
        $this->load->helper('utility_helper');
        $this->load->model('common_model');
        $this->load->helper(array(
            'form',
            'url'
        ));
        $errors = array();
        $this->load->library('form_validation');
        $errorMsg = array();
        $err_num = 0;
        $this->form_validation->set_rules('contact_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('contact_email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('contact_phone', 'Phone', 'trim|required');
        $this->form_validation->set_rules('contact_message', 'Message', 'trim|required');
        $this->form_validation->set_rules('year', 'Year', 'trim|required');
        $this->form_validation->set_rules('auto_type', 'Type', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $map ['status'] = '0';
            $map ['msg'] = validation_errors();
            echo json_encode($map);
        } else {
            $msg = '<p>Hi Site Admin,</p><p>Below user has requested to pickup unwanted car on towing service.</p><p>Full Name - ' . stripslashes($this->input->post('contact_name')) . '</p><p>Email - ' . stripslashes($this->input->post('contact_email')) . '</p><p>Phone Number - ' . stripslashes($this->input->post('contact_phone')) . '</p><p>Message - ' . stripslashes($this->input->post('contact_message')) . '</p><p>Type of Auto - ' . stripslashes($this->input->post('auto_type')) . '</p><p>Model - ' . stripslashes($this->input->post('model')) . '</p><p>Year - ' . stripslashes($this->input->post('year')) . '</p> Thanks,<br>Razorclean Inc.';
            $this->common_model->sendEmail($this->global_setting['site_email'], array('email' => $this->input->post('contact_email'), 'name' => 'Razorclean'), 'Unwanted car pickup request on towing service', $msg);
            $map ['status'] = '1';
            $map ['msg'] = "Thanks for contacting. We'll get back to you soon.";
            echo json_encode($map);
        }
    }
    public function equipmentMove() {
        $this->load->helper('utility_helper');
        $this->load->model('common_model');
        $this->load->helper(array(
            'form',
            'url'
        ));
        $errors = array();
        $this->load->library('form_validation');
        $errorMsg = array();
        $err_num = 0;
        $this->form_validation->set_rules('contact_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('contact_email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('contact_phone', 'Phone', 'trim|required');
        $this->form_validation->set_rules('contact_message', 'Message', 'trim|required');
        $this->form_validation->set_rules('eq_type', 'Equipment type', 'trim|required');
        $this->form_validation->set_rules('weight', 'Weight', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $map ['status'] = '0';
            $map ['msg'] = validation_errors();
            echo json_encode($map);
        } else {
            $msg = '<p>Hi Site Admin,</p><p>Below user has requested to to move heavy equipment on towing service.</p><p>Full Name - ' . stripslashes($this->input->post('contact_name')) . '</p><p>Email - ' . stripslashes($this->input->post('contact_email')) . '</p><p>Phone Number - ' . stripslashes($this->input->post('contact_phone')) . '</p><p>Message - ' . stripslashes($this->input->post('contact_message')) . '</p><p>Type of Equipment - ' . stripslashes($this->input->post('eq_type')) . '</p><p>Weight - ' . stripslashes($this->input->post('weight')) . '</p><p>Year - ' . stripslashes($this->input->post('year')) . '</p> Thanks,<br>Razorclean Inc.';
            $this->common_model->sendEmail($this->global_setting['site_email'], array('email' => $this->input->post('contact_email'), 'name' => 'Razorclean'), 'Request for heavy equipment move', $msg);
            $map ['status'] = '1';
            $map ['msg'] = "Thanks for contacting. We'll get back to you soon.";
            echo json_encode($map);
        }
    }

}
