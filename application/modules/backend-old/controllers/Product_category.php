<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product_category extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('product_category_model');
        $this->load->model('common_model');
    }

    /*  Function For Admin Login Backend Start */

    public function list1()
    {
        /* checking admin is logged in or not */
        if (!$this->common_model->isLoggedIn()) {
            redirect(base_url() . "admin/login");
        }
        if (count($this->input->post()) > 0) {


            $arr_category_ids = $this->input->post('checkbox');
            if (count($arr_category_ids) > 0) {

                $this->common_model->deleteRows($arr_category_ids, TABLES::$MST_SUB_CATEGORIES, "category_id");
            }
            $this->session->set_userdata('msg', 'Category has deleted successfully.');
            redirect(base_url() . "admin/category-list");
        }
        $data['cat_data'] = $this->product_category_model->getCategoryDetails();
        $data['arr_active_admin_details'] = $this->common_model->getRecords(TABLES::$ADMIN_USER, '', array('id' => '1'));
        $this->template->set('page', 'category_list');
        $this->template->set('cat_data', $data['cat_data']);
        $this->template->set('arr_active_admin_details', $data['arr_active_admin_details']);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Category List')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', 'partials/sidebar')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('admin/product_category/category_list');
    }

    public function index($category_id)
    {
       
        /* checking admin is logged in or not */
        if (!$this->common_model->isLoggedIn()) {
            redirect(base_url() . "admin/login");
        }

        if ($this->input->post()) {
            if ($category_id != "") {
 //die($category_id);
                if ($_FILES['cat_image']['name'] != '') {
                    $_FILES['cat_image']['name'];
                    $_FILES['cat_image']['type'];
                    $_FILES['cat_image']['tmp_name'];
                    $_FILES['cat_image']['error'];
                    $_FILES['cat_image']['size'];
                    $config['file_name'] = time() . rand();
                    $config['upload_path'] = "./uploads/category/";
                    $config['allowed_types'] = 'jpg|jpeg|gif|png';
                    $config['max_size'] = '9000000';
                    $this->load->library('upload');
                    $this->upload->initialize($config);
                    if ($this->upload->do_upload('cat_image')) {
                        $data['upload_data'] = $this->upload->data();
                        $ar = list($width, $height) = getimagesize($data['full_path']);
                        $upload_result = $this->upload->data();
                        $image_config = array(
                            'source_image' => $upload_result['full_path'],
                            'new_image' => "./uploads/category/",
                            'maintain_ratio' => false,
                            'width' => 585,
                            'height' => 585
                        );
                        $this->load->library('image_lib');
                        $this->image_lib->initialize($image_config);
                        $resize_rc = $this->image_lib->resize();
                        $img_path = $upload_result['file_name'];
                        @unlink('./uploads/category/' . $this->input->post('old_img_file'));
                    } else {
                        $error = array('error' => $this->upload->display_errors());
                    }
                } else {
                    $img_path = $this->input->post('old_img_file');
                }
                $update_data = array(
                    "category_name" => $this->input->post('cat_name'),
                    "category_title" => $this->input->post('cat_title'),
                    "category_metakeywords" => $this->input->post('cat_meta'),
                    "category_metadesc" => $this->input->post('cat_desc'),
                    "cat_image" => $img_path
                );
                
                $condition = array("category_id" => $category_id);
                $this->common_model->updateRow(TABLES::$MST_PRODUCT_CATEGORIES, $update_data, $condition);
                $this->session->set_userdata("msg", "<span class='success'>Category updated successfully!</span>");
                redirect(base_url() . "admin/product-category-list");
            } else {
                if ($_FILES['cat_image']['name'] != '') {
                    $_FILES['cat_image']['name'];
                    $_FILES['cat_image']['type'];
                    $_FILES['cat_image']['tmp_name'];
                    $_FILES['cat_image']['error'];
                    $_FILES['cat_image']['size'];
                    $config['file_name'] = time() . rand();
                    $config['upload_path'] = "./uploads/category/";
                    $config['allowed_types'] = 'jpg|jpeg|gif|png';
                    $config['max_size'] = '9000000';
                    $this->load->library('upload');
                    $this->upload->initialize($config);
                    if ($this->upload->do_upload('cat_image')) {
                        $data['upload_data'] = $this->upload->data();
                        $ar = list($width, $height) = getimagesize($data['full_path']);
                        $upload_result = $this->upload->data();
                        $image_config = array(
                            'source_image' => $upload_result['full_path'],
                            'new_image' => "./uploads/category/",
                            'maintain_ratio' => false,
                            'width' => 585,
                            'height' => 585
                        );
                        $this->load->library('image_lib');
                        $this->image_lib->initialize($image_config);
                        $resize_rc = $this->image_lib->resize();
                        $img_path = $upload_result['file_name'];
                    } else {
                        $error = array('error' => $this->upload->display_errors());
                    }
                }
                $cat_data = array(
                    "category_name" => $this->input->post('cat_name'),
                    "category_title" => $this->input->post('cat_title'),
                    "category_metakeywords" => $this->input->post('cat_meta'),
                    "category_metadesc" => $this->input->post('cat_desc'),
                    "cat_image" => $img_path
                );
                $this->product_category_model->addCategory($cat_data);
                $this->session->set_userdata('msg', 'Category has added successfully.');
                redirect(base_url() . "admin/product-category-list");
            }
        }
        $data['arr_active_admin_details'] = $this->common_model->getRecords(TABLES::$ADMIN_USER, '', array('id' => '1'));



        $this->template->set('page', 'add_category');
        $this->template->set('arr_active_admin_details', $data['arr_active_admin_details']);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Category List')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', 'partials/sidebar')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('admin/product_category/category_add');
    }

    public function editCategory($category_id)
    {
        if (!$this->common_model->isLoggedIn()) {
            redirect(base_url() . "admin/login");
        }

        #Getting Common data
        $data = $this->common_model->commonFunction();
        $this->load->model('product_category_model');
        $arr_newsletter_data = array();
        $arr_category_data = $this->product_category_model->getCategoryDetailById($category_id);
        if ($this->input->post()) {
            $category_details = array("category_name" => $this->input->post('cat_name'),
                "category_title" => $this->input->post('cat_title'),
                "category_metakeywords" => $this->input->post('cat_meta'),
                "category_metadesc" => $this->input->post('cat_desc'));
            $condition = array('category_id' => $category_id);
            $this->product_category_model->updateCategoryDetails($category_details, $condition);
            $this->session->set_userdata('msg', 'Category has updated successfully.');
            redirect(base_url() . "admin/product-category-list");
        }
        $data['arr_active_admin_details'] = $this->common_model->getRecords(TABLES::$ADMIN_USER, '', array('id' => '1'));


        $data['arr_category_data'] = $arr_category_data[0];


        $this->template->set('page', 'edit_category');
        $this->template->set('edit_id', $category_id);
        $this->template->set('arr_active_admin_details', $data['arr_active_admin_details']);
        $this->template->set('arr_category_data', $data['arr_category_data']);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Edit Category')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', 'partials/sidebar')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('admin/product_category/category_edit');
    }

    /* Code for subcategory details */

    public function sub_category()
    {
        /* checking admin is logged in or not */
        if (!$this->common_model->isLoggedIn()) {
            redirect(base_url() . "backend/login");
        }
        if ($this->input->post()) {
            $subcat_data = array(
                "category_id" => $this->input->post('cat_id'),
                "sub_category_name" => $this->input->post('sub_category_name')
            );
            $this->product_category_model->addSubCategory($subcat_data);
            $this->session->set_userdata('msg', 'Sub Category has added successfully.');
            redirect(base_url() . "admin/product-subcategory-list");
        }

        $data['category_data'] = $this->product_category_model->getCategoryDetails();



        $this->template->set('page', 'edit_category');
        $this->template->set('category_data', $data['category_data']);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Edit Category')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', 'partials/sidebar')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('admin/product_category/subcategory_add');
    }

    public function subcat_list()
    {
        /* checking admin is logged in or not */
        if (!$this->common_model->isLoggedIn()) {
            redirect(base_url() . "backend/login");
        }
        if (count($this->input->post()) > 0) {
            if (isset($_POST['btn_delete_all'])) {
                $arr_category_ids = $this->input->post('checkbox');
                if (count($arr_category_ids) > 0) {
                    $this->common_model->deleteRows($arr_category_ids, TABLES::$TRANS_PRODUCT_SUB_CATEGORIES, "sub_category_id");
                }
                $this->session->set_userdata('msg', 'Sub Category has deleted successfully.');
            }
        }


        $data['subcat_data'] = $this->product_category_model->getSubCategoryDetails();
        $this->template->set('page', 'edit_category');
        $this->template->set('subcat_data', $data['subcat_data']);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Edit Category')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', 'partials/sidebar')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('admin/product_category/subcategory_list');
    }

    public function editSubCategory($subcategory_id)
    {
        if (!$this->common_model->isLoggedIn()) {
            redirect(base_url() . "backend/login");
        }

        #Getting Common data
        $data = $this->common_model->commonFunction();
        $this->load->model('product_category_model');
        $arr_newsletter_data = array();
        $arr_subcategory_data = $this->product_category_model->getSubCategoryDetailById($subcategory_id);
        if ($this->input->post()) {
            $subcategory_details = array("category_id" => $this->input->post('cat_id'),
                "sub_category_name" => $this->input->post('sub_category_name'));
            $condition = array('sub_category_id' => $subcategory_id);
            $this->product_category_model->updateSubCategoryDetails($subcategory_details, $condition);
            $this->session->set_userdata('msg', 'Sub Category has updated successfully.');
            redirect(base_url() . "backend/product-subcategory-list");
        }
        $data['arr_active_admin_details'] = $this->common_model->getRecords(TABLES::$ADMIN_USER, '', array('id' => '1'));
        $data['edit_id'] = $subcategory_id;
        $data['title'] = "Edit Sub Category";
        $data['category_data'] = $this->product_category_model->getCategoryDetails();
        $data['arr_subcategory_data'] = $arr_subcategory_data[0];
        $data['main'] = 'backend/product_category/subcategory_edit';
        $this->load->view('backend/index', $data);
    }

}
