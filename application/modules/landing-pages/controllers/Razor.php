<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Razor extends CI_Controller {

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
        $condition  = "id IN (3960,3970,3922,3939,3947,3919,3974,3930,3931,3938,3957,3966,3969,3976)";
        $states = $this->common_model->getRecords(TABLES::$STATES,'*',$condition);
        $data['states'] = $states;
        $data['jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '','', 'id desc', $this->resultsPerpage);
        $data['blogs'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array( 'status' => '1'), 'post_id desc', 3);
		$data['title'] = "Home";
        $this->load->view('razor/index', $data);
    }
    public function management() {
        $data['global_setting'] = $this->global_setting;
        $data['title'] = "Management";
        $this->load->view('razor/management', $data);
    }
	public function media() {
        $data['global_setting'] = $this->global_setting;
        $data['title'] = "Management";
        $this->load->view('razor/media', $data);
    }
    public function supplies() {
        $data['global_setting'] = $this->global_setting;
        $data['title'] = "Supplies";
        $this->load->view('razor/supplies', $data);
    }
    public function contracting () {
        $data['global_setting'] = $this->global_setting;
        $data['title'] = "Contracting";
        $this->load->view('razor/contracting', $data);
    }
    public function blog($pg="") {
         $this->load->model('blog_model');
        $data['global_setting'] = $this->global_setting;
        $data['arr_blog_data'] = $this->blog_model->getAllActiveBlog($limit = '', $offset = '');
        foreach ($data["arr_blog_data"] as $key => $value) {
            $data['arr_blog_data'][$key]['user_details'] = $this->common_model->getRecords(TABLES::$ADMIN_USER, '*', array('id' => $value['posted_by']));
            $data['arr_blog_data'][$key]['comment'] = $this->common_model->getRecords(TABLES::$TRANS_BLOG_COMMENTS, 'comment_id', array('post_id' => $value['post_id'], 'status' => '1'));
        }
        $totalrows = count($data['arr_blog_data']);
        #Start:: pagination 
        #load pagination library                            
        $this->load->library('pagination');
        $config['base_url'] = base_url() . "razor/blog/";
        $config['total_rows'] = $totalrows;
        $config['per_page'] = 10;
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
        $config['cur_tag_open'] = '<li class="current"><a href="javascript:void(0);">';
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
		$data['title'] = "Blogs";
        $data['latest_blog'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('status' => '1'),'','5');
        $this->load->view('razor/blog', $data);
    }
	
	 public function blogDetails($id){
        $data['blog_details'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('slug' => $id, 'status' => '1'));
        $data['global_setting'] = $this->global_setting;
		$data['title'] = $data['blog_details'][0]['post_title'];
        $data['latest_blog'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('status' => '1'),'','5');
        $this->load->view('razor/blog-details', $data);
    }
}