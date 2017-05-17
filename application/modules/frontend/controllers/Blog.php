<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Blog extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('cookie');
        $this->load->model("common_model");
        $this->load->model('blog_model');
    }

    public function viewBlogList($pg = '') {
		
        $data['global'] = $this->common_model->getGlobalSettings();
        $data = $this->common_model->commonFunction();
        $data['user_session'] = $this->session->userdata('user_account');
        #START Action :: Fetch all active Blog added by admin :   
        $data['arr_blog_data'] = $this->blog_model->getAllActiveBlogList($limit = '', $offset = '');
        $data['slide_arr_blog_data'] = $this->blog_model->getAllActiveBlogList($limit = 4, $offset = '');
        $data['archive_dates'] = $this->blog_model->getArchiveDates();

        foreach ($data["arr_blog_data"] as $key => $value) {
            $data['arr_blog_data'][$key]['user_details'] = $this->common_model->getRecords(TABLES::$ADMIN_USER, '*', array('id' => $value['posted_by']));
            $data['arr_blog_data'][$key]['comment'] = $this->common_model->getRecords(TABLES::$TRANS_BLOG_COMMENTS, 'comment_id', array('post_id' => $value['post_id'], 'status' => '1'));
        }
        $totalrows = count($data['arr_blog_data']);
        #Start:: pagination 
        #load pagination library                            
        $this->load->library('pagination');
        $config['base_url'] = base_url() . "blog";
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
            $pg1 = $pg - 1;
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
        $this->template->set('page', 'bloglist');
        $this->template->set('archive_dates', $data['archive_dates']);
        $this->template->set('arr_blog_data', $data['arr_blog_data']);
        $this->template->set('slide_arr_blog_data', $data['slide_arr_blog_data']);
        $this->template->set('pg_link', $data['pg_link']);
        $this->template->set('global', $data['global']);
        $this->template->set('user_session', $data['user_session']);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('frontend')
                ->title($data['global']['site_title']. ' | Blogs')
                ->set_partial('header', 'partials/header')
                ->set_partial('blog_sidebar', 'partials/blog_sidebar')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('blogs');
    }

    public function searchBlog($pg = '') {

        $search_term = ''; // default when no term in session or POST
        if ($this->input->post('search')) {
            // use the term from POST and set it to session
            $search_term = $this->input->post('search');
            $this->session->set_userdata('search_term', $search_term);
        } elseif ($this->session->userdata('search_term')) {
            // if term is not in POST use existing term from session
            $search_term = $this->session->userdata('search_term');
        }
        $data['global'] = $this->common_model->getGlobalSettings();
        $data = $this->common_model->commonFunction();
        $data['user_session'] = $this->session->userdata('user_account');
        #START Action :: Fetch all active Blog added by admin :   
        $data['arr_blog_data'] = $this->blog_model->getAllSearchBlog($search_term, $limit = '', $offset = '');

        $data['slide_arr_blog_data'] = $this->blog_model->getAllActiveBlogList($limit = 4, $offset = '');
        foreach ($data["arr_blog_data"] as $key => $value) {
            $data['arr_blog_data'][$key]['user_details'] = $this->common_model->getRecords(TABLES::$ADMIN_USER, '*', array('id' => $value['posted_by']));
            $data['arr_blog_data'][$key]['comment'] = $this->common_model->getRecords(TABLES::$TRANS_BLOG_COMMENTS, 'comment_id', array('post_id' => $value['post_id'], 'status' => '1'));
        }
        $totalrows = count($data['arr_blog_data']);
        #Start:: pagination 
        #load pagination library                            
        $this->load->library('pagination');
        $config['base_url'] = base_url() . "search_blog/";
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
            $pg1 = $pg - 1;
        }
        $data['archive_dates'] = $this->blog_model->getArchiveDates();
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
        $this->template->set('page', 'bloglist');
        $this->template->set('arr_blog_data', $data['arr_blog_data']);
        $this->template->set('pageno', $pg);
        $this->template->set('slide_arr_blog_data', $data['slide_arr_blog_data']);
        $this->template->set('pg_link', $data['pg_link']);
        $this->template->set('search_term', $search_term);
        $this->template->set('archive_dates', $data['archive_dates']);
        $this->template->set('global', $data['global']);
        $this->template->set('user_session', $data['user_session']);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('frontend')
                 ->title($data['global']['site_title']. ' | Blogs')
                ->set_partial('header', 'partials/header')
                ->set_partial('blog_sidebar', 'partials/blog_sidebar')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('search_blog');
    }

    public function archiveBlogs($year = '', $month = '', $pg = '') {
        $search_term = $month . " " . $year;
        $data['global'] = $this->common_model->getGlobalSettings();
        $data = $this->common_model->commonFunction();
        $data['user_session'] = $this->session->userdata('user_account');
        #START Action :: Fetch all active Blog added by admin :   
        $data['arr_blog_data'] = $this->blog_model->getArchiveBlogs($year, $month, $limit = '', $offset = '');
        $data['archive_dates'] = $this->blog_model->getArchiveDates();
        $data['slide_arr_blog_data'] = $this->blog_model->getAllActiveBlogList($limit = 4, $offset = '');
        foreach ($data["arr_blog_data"] as $key => $value) {
            $data['arr_blog_data'][$key]['user_details'] = $this->common_model->getRecords(TABLES::$ADMIN_USER, '*', array('id' => $value['posted_by']));
            $data['arr_blog_data'][$key]['comment'] = $this->common_model->getRecords(TABLES::$TRANS_BLOG_COMMENTS, 'comment_id', array('post_id' => $value['post_id'], 'status' => '1'));
        }
        $totalrows = count($data['arr_blog_data']);
        #Start:: pagination 
        #load pagination library                            
        $this->load->library('pagination');
        $config['base_url'] = base_url() . "blog/" . $year . "/" . $month;
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
            $pg1 = $pg - 1;
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
        $this->template->set('page', 'bloglist');
        $this->template->set('arr_blog_data', $data['arr_blog_data']);
        $this->template->set('slide_arr_blog_data', $data['slide_arr_blog_data']);
        $this->template->set('pg_link', $data['pg_link']);
        $this->template->set('search_term', $search_term);
        $this->template->set('archive_dates', $data['archive_dates']);
        $this->template->set('global', $data['global']);
        $this->template->set('user_session', $data['user_session']);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('frontend')
                ->title($data['global']['site_title']. ' | Archive Blogs')
                ->set_partial('header', 'partials/header')
                ->set_partial('blog_sidebar', 'partials/blog_sidebar')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('search_blog');
    }
    
    public function serviceFilterBlogs($service='', $pg = '') {
        $data['global'] = $this->common_model->getGlobalSettings();
        $data = $this->common_model->commonFunction();
        $data['user_session'] = $this->session->userdata('user_account');
        #START Action :: Fetch all active Blog added by admin :   
        $data['arr_blog_data'] = $this->blog_model->getServiceBlogs(urldecode($service), $limit = '', $offset = '');
        $data['archive_dates'] = $this->blog_model->getArchiveDates();
        $data['slide_arr_blog_data'] = $this->blog_model->getAllActiveBlogList($limit = 4, $offset = '');
        foreach ($data["arr_blog_data"] as $key => $value) {
            $data['arr_blog_data'][$key]['user_details'] = $this->common_model->getRecords(TABLES::$ADMIN_USER, '*', array('id' => $value['posted_by']));
            $data['arr_blog_data'][$key]['comment'] = $this->common_model->getRecords(TABLES::$TRANS_BLOG_COMMENTS, 'comment_id', array('post_id' => $value['post_id'], 'status' => '1'));
        }
        $totalrows = count($data['arr_blog_data']);
        #Start:: pagination 
        #load pagination library                            
        $this->load->library('pagination');
        $config['base_url'] = base_url() . "blog/service/" . $service;
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
            $pg1 = $pg - 1;
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
        $this->template->set('page', 'bloglist');
        $this->template->set('arr_blog_data', $data['arr_blog_data']);
        $this->template->set('slide_arr_blog_data', $data['slide_arr_blog_data']);
        $this->template->set('pg_link', $data['pg_link']);
        $this->template->set('archive_dates', $data['archive_dates']);
        $this->template->set('global', $data['global']);
        $this->template->set('user_session', $data['user_session']);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('frontend')
                ->title($data['global']['site_title']. ' | Blogs')
                ->set_partial('header', 'partials/header')
                ->set_partial('blog_sidebar', 'partials/blog_sidebar')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('search_blog');
    }

    public function allBlogs($pg = '') {
        $data['global'] = $this->common_model->getGlobalSettings();
        $data = $this->common_model->commonFunction();
        $data['user_session'] = $this->session->userdata('user_account');
        #START Action :: Fetch all active Blog added by admin :   
        $data['arr_blog_data'] = $this->blog_model->getAllActiveBlogList($limit = '', $offset = '');
        $data['slide_arr_blog_data'] = $this->blog_model->getAllActiveBlogList($limit = 4, $offset = '');
        $data['archive_dates'] = $this->blog_model->getArchiveDates();

        foreach ($data["arr_blog_data"] as $key => $value) {
            $data['arr_blog_data'][$key]['user_details'] = $this->common_model->getRecords(TABLES::$ADMIN_USER, '*', array('id' => $value['posted_by']));
            $data['arr_blog_data'][$key]['comment'] = $this->common_model->getRecords(TABLES::$TRANS_BLOG_COMMENTS, 'comment_id', array('post_id' => $value['post_id'], 'status' => '1'));
        }
        $totalrows = count($data['arr_blog_data']);
        #Start:: pagination 
        #load pagination library                            
        $this->load->library('pagination');
        $config['base_url'] = base_url() . "allblog";
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
            $pg1 = $pg - 1;
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
        $this->template->set('page', 'bloglist');
        $this->template->set('archive_dates', $data['archive_dates']);
        $this->template->set('arr_blog_data', $data['arr_blog_data']);
        $this->template->set('slide_arr_blog_data', $data['slide_arr_blog_data']);
        $this->template->set('pg_link', $data['pg_link']);
        $this->template->set('global', $data['global']);
        $this->template->set('user_session', $data['user_session']);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('frontend')
                ->title($data['global']['site_title']. ' | Blogs')
                ->set_partial('header', 'partials/header')
                ->set_partial('blog_sidebar', 'partials/blog_sidebar')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('search_blog');
    }

    public function getBlogDetails($post_id = '') {
        $data = $this->common_model->commonFunction();

        $data['blog_posts'] = $this->blog_model->getBlogDetails($post_id);
//        print_r(  $data['blog_posts']); die;
        if (!empty($data['blog_posts'])) {
            $data['blog_posts'][0]['user_details'] = $this->common_model->getRecords(TABLES::$ADMIN_USER, '*', array('id' => $data['blog_posts'][0]['posted_by']));
            foreach ($data["blog_posts"] as $key => $value) {
                $data['blog_posts'][$key]['comments'] = $this->common_model->getRecords(TABLES::$TRANS_BLOG_COMMENTS, '*', array('post_id' => $data['blog_posts'][0]['post_id'], 'status' => '1'), $order_by = 'comment_id DESC', $limit = '', $debug = 0);
            }
            foreach ($data["blog_posts"][0]['comments'] as $key => $value) {
                $user = $this->common_model->getRecords(TABLES::$ADMIN_USER, '*', array('id' => $value['commented_by']));
                $data["blog_posts"][0]['comments'][$key]['commented_user'] = ucfirst($user[0]['username']);
                $data["blog_posts"][0]['comments'][$key]['id'] = $user[0]['id'];
            }
            /* START:: Fetch data form mst blog table for image */
            $data["mst_blog_posts"] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, "", array("post_id" => $post_id), 'posted_on DESC', '', '');
        } else {
            $this->session->set_userdata('error_msg', "Blogs is either deleted by admin or currently unavailable.");
            redirect(base_url() . 'blog/list');
        }


        $data['post_comments'] = $this->getPostComments($post_id);
        $data['user_session'] = $this->session->userdata('user_account');
        $data['archive_dates'] = $this->blog_model->getArchiveDates();
        $this->template->set('page', 'blog_details');
        $this->template->set('blog_posts', $data['blog_posts']);
        $this->template->set('archive_dates', $data['archive_dates']);
        $this->template->set('post_comments', $data['post_comments']);
        $this->template->set('global', $data['global']);
        $this->template->set('user_session', $data['user_session']);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('frontend')
                ->title($data['global']['site_title'].' | '.$data['blog_posts'][0]['post_title'])
                ->set_partial('header', 'partials/header')
                ->set_partial('blog_sidebar', 'partials/blog_sidebar')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('blog_details');
    }

    private function getPostComments($post_id) {
        $condition_to_pass = array("`post_id`" => $post_id, "b.status" => "1");
        $order = ('comment_on desc');
//        $this->load->model("user_model");
        $arr_comments = $this->blog_model->getPostComments("", $condition_to_pass, $order, '');
        foreach ($arr_comments as $key => $value) {
            $arr_comments[$key]['user_details'] = $this->common_model->getRecords(TABLES::$ADMIN_USER, '*', array('id' => $value['commented_by']));
        }
        return $arr_comments;
    }

    /* function to add comments */

    public function addComment($post_id = '') {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('message', 'Blog content', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_userdata('error_msg', validation_errors());
            redirect(base_url() . $post_id . "#error_msg");
        }
        $postid = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, 'post_id', array('slug' => $post_id));
//        if (!$this->common_model->isLoggedIn()) {
//            $this->session->set_userdata('error_msg', 'Please login to post comment');
//            redirect(base_url() . $post_id . "#error_msg");
//        }
        $data['user_session'] = $this->session->userdata('user_account');
        #START Action :: Insert user comment on data base :
        $arr_to_insert = array(
            "post_id" => $postid[0]['post_id'],
            "commenter_email" => $this->input->post('email'),
            "commented_by" => $data['user_session']['user_id'],
            "comment" => $this->input->post('message'),
            "comment_on" => date("Y-m-d H:i:s")
        );
        #inserting user details into the database
        $last_insert_id = $this->common_model->insertRow($arr_to_insert, TABLES::$TRANS_BLOG_COMMENTS);
        $this->session->set_userdata('success_msg', 'Your comment has been posted successfully');
        redirect(base_url() . $post_id . "#commentfrm");
    }

    /* Frontend : Manage Blog End */
}
