<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Security extends CI_Controller {

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
        $this->load->view('security/index', $data);
    }

    public function aboutUs() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('security/about', $data);
    }

    public function security() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('security/security', $data);
    }

    public function investigations() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('security/investigations', $data);
    }

    public function eventpermits() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('security/eventpermits', $data);
    }

    public function mediacenter($pg="") {
        $this->load->model('blog_model');
        $data['global_setting'] = $this->global_setting;
        $data['arr_blog_data'] = $this->blog_model->getAllActiveBlogListByService('Security', $limit = '', $offset = '');
        foreach ($data["arr_blog_data"] as $key => $value) {
            $data['arr_blog_data'][$key]['user_details'] = $this->common_model->getRecords(TABLES::$ADMIN_USER, '*', array('id' => $value['posted_by']));
            $data['arr_blog_data'][$key]['comment'] = $this->common_model->getRecords(TABLES::$TRANS_BLOG_COMMENTS, 'comment_id', array('post_id' => $value['post_id'], 'status' => '1'));
        }
        $totalrows = count($data['arr_blog_data']);
        #Start:: pagination 
        #load pagination library                            
        $this->load->library('pagination');
        $config['base_url'] = base_url() . "security/mediacenter/";
        $config['total_rows'] = $totalrows;
        $config['per_page'] = 2;
        $config['prev_link'] = "<span><<</span>";
        $config['next_link'] = "<span>>></span>";
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
        $config['cur_tag_open'] = '<li ><a class="active" href="javascript:void(0);">';
        $config['cur_tag_close'] = '</a></li>';
        if ($pg == "") {
            $pg1 = "";
        } else {
            $pg1 = $pg ;
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
        $data['latest_blog'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('status' => '1'),'','5');
        $this->load->view('security/mediacenter', $data);
    }
    
    public function blogDetails($id){
        $data['blog_details'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('slug' => $id, 'status' => '1'));
        $data['global_setting'] = $this->global_setting;
        $this->load->view('security/blog_details', $data);
    }

    public function contact() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('security/contact', $data);
    }

    public function cybersecurity() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('security/cybersecurity', $data);
    }

    public function privacy() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('security/privacy', $data);
    }

    public function submitContactForm() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('contact_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('contact_phone', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('contact_email', 'email', 'trim|required|valid_email');

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
                $msg = '<p>Hi Site Admin,</p><p>Below user has inquired on security service.</p><p>Full Name - ' . stripslashes($this->input->post('contact_name')) . '</p><p>Email - ' . stripslashes($this->input->post('contact_email')) . '</p><p>Phone Number - ' . stripslashes($this->input->post('contact_phone')) . '</p><p>Message - ' . stripslashes($this->input->post('contact_message')) . '</p><p>Inquiry Type - ' . stripslashes($this->input->post('InquiryType')) . '</p></p> Thanks,<br>Razorclean Inc.';
                $this->common_model->sendEmail($this->global_setting['site_email'], array('email' => $this->input->post('contact_email'), 'name' => 'Razorclean'), 'Inquiry on security services', $msg);
                $map ['status'] = '1';
                $map ['msg'] = "Your message has been sent successfully! We will respond within 24 hours. Thank you!";
                echo json_encode($map);
            }
        }
    }

}
