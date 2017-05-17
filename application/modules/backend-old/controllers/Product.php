<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model("common_model");
        $this->load->model("product_model");
//        $this->load->library('form_validation');
    }

    /* Frontend : Manage Blog Start */

    public function productList()
    {
        $data['global'] = $this->common_model->getGlobalSettings();
        $data = $this->common_model->commonFunction();
        $data['user_session'] = $this->session->userdata('user_account');
        #START Action :: Fetch all active Blog added by admin :   
        $data['arr_product_data'] = $this->product_model->getAllProducts();
//        print_r($data['arr_product_data']);


        $this->template->set('page', 'productlist');
        $this->template->set('arr_product_data', $data['arr_product_data']);
        $this->template->set('user_session', $data['user_session']);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Blogs')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', 'partials/sidebar')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('admin/product/product_list');
    }

    public function getBlogDetails($post_id = '')
    {
        $data = $this->common_model->commonFunction();
        $data['lang'] = $this->lang->language;
        $data['header'] = array("title" => 'Blog Details', "keywords" => "", "description" => "");
        $data['blog_posts'] = $this->blog_model->getBlogDetails($post_id);
//        print_r(  $data['blog_posts']); die;
        if (!empty($data['blog_posts'])) {
            $data['blog_posts'][0]['user_details'] = $this->common_model->getRecords('user', 'id,firstname,lastname,profileimage', array('id' => $data['blog_posts'][0]['posted_by']));
            foreach ($data["blog_posts"] as $key => $value) {
                $data['blog_posts'][$key]['comments'] = $this->common_model->getRecords('trans_blog_comments', '*', array('post_id' => $post_id, 'status' => '1'), $order_by = 'comment_id DESC', $limit = '', $debug = 0);
            }
            foreach ($data["blog_posts"][0]['comments'] as $key => $value) {
                $user = $this->common_model->getRecords('user', 'id,firstname,lastname,profileimage,user_name', array('id' => $value['commented_by']));
                $data["blog_posts"][0]['comments'][$key]['commented_user'] = ucfirst($user[0]['user_name']);
                $data["blog_posts"][0]['comments'][$key]['commented_user_profile'] = $user[0]['profileimage'];
                $data["blog_posts"][0]['comments'][$key]['user_id'] = $user[0]['user_id'];
            }
            /* START:: Fetch data form mst blog table for image */
            $data["mst_blog_posts"] = $this->common_model->getRecords("mst_blog_posts", "", array("post_id" => $post_id), 'posted_on DESC', '', '');
        } else {
            $this->session->set_userdata('error_msg', "Blogs is either deleted by admin or currently unavailable.");
            redirect(base_url() . 'blog/list');
        }



        if ($this->session->userdata('language_id') == '17') {
            $data['header'] = array("title" => "Blog Details", "keywords" => "", "description" => "", "dashboard" => 1);
        } elseif ($this->session->userdata('language_id') == '12') {
            $data['header'] = array("title" => "ت�?اصيل بلوق", "keywords" => "", "description" => "", "dashboard" => '1');
        } else {
            $data['header'] = array("title" => "�?�客详细", "keywords" => "", "description" => "", "dashboard" => '1');
        }

        $data['arr_blog_details'] = $this->blog_model->getAllActiveBlogList($limit = '5', $offset = '');
        $data['post_id'] = $post_id;
        $data['post_comments'] = $this->getPostComments($post_id);
        $data['user_session'] = $this->session->userdata('user_account');
        $this->load->view('front/includes/header', $data);
//        $this->load->view('front/includes/header-2', $data);
        $this->load->view('front/blog/blogs-details', $data);
        $this->load->view('front/includes/footer');
    }

    /* Function to add blog post end */

    public function addProduct()
    {

        if (!$this->common_model->isLoggedIn()) {
            $this->session->set_userdata('error_msg', "Please sign in to post your blog.");
            redirect('blog/list');
        }
        $category = $this->common_model->getRecords(TABLES::$MST_PRODUCT_CATEGORIES, '*', array('status' => '1'), $order_by = 'category_name DESC');
        $subcategory = $this->common_model->getRecords(TABLES::$TRANS_PRODUCT_SUB_CATEGORIES, '*', '', $order_by = 'sub_category_name DESC');
        $data = $this->common_model->commonFunction();
        if (count($_POST) > '0') {

            if ($_FILES['product_image']['name'] != '') {
                $_FILES['product_image']['name'];
                $_FILES['product_image']['type'];
                $_FILES['product_image']['tmp_name'];
                $_FILES['product_image']['error'];
                $_FILES['product_image']['size'];
                $config['file_name'] = time() . rand();
                $config['upload_path'] = 'uploads/products';
                $config['allowed_types'] = 'jpg|jpeg|gif|png';
                $config['max_size'] = '9000000';
                $this->load->library('upload');
                $this->upload->initialize($config);
                if ($this->upload->do_upload('product_image')) {
                    $data1['upload_data'] = $this->upload->data();
                    //$ar = list($width, $height) = getimagesize($data1['full_path']);
                    $upload_result = $this->upload->data();
                    $image_config = array(
                        'source_image' => $upload_result['full_path'],
                        'new_image' => "uploads/products/400x400",
                        'maintain_ratio' => false,
                        'width' => 400,
                        'height' => 400
                    );
                    $this->load->library('image_lib');
                    $this->image_lib->initialize($image_config);
                    $resize_rc = $this->image_lib->resize();


                    $img_path = $upload_result['file_name'];
                } else {
                    $error = array('error' => $this->upload->display_errors());
                }
                $thumbnails = $this->upload_files("uploads/products/thumbnails", $_FILES['thumbnail']);
                $thumbs = serialize($thumbnails);

                $data['user_session'] = $this->session->userdata('user_account');
                $config = array(
                    'field' => 'slug',
                    'slug' => 'slug',
                    'table' => TABLES::$MST_PRODUCTS,
                    'id' => 'product_id',
                );
                $this->load->library('slug', $config);
                $slugdata = array(
                    'slug' => $this->input->post('name'),
                );
                $slug = $this->slug->create_uri($slugdata);

                $arr_post_data = array(
                    "name" => $this->input->post('name'),
                    "short_desc" => $this->input->post('short_desc'),
                    "long_desc" => $this->input->post('long_desc'),
                    "price" => $this->input->post('price'),
                    "selling_price" => $this->input->post('selling_price'),
                    'cat_id' => $this->input->post('cat_id'),
                    'subcat_id' => $this->input->post('subcat_id'),
                    'status' => $this->input->post('status'),
                    'thumbnails' => $thumbs,
                    'product_image' => serialize($img_path),
                    'tags' => $this->input->post('tags'),
                    'size' => $this->input->post('size'),
                    'color' => $this->input->post('color'),
                    'is_featured' => $this->input->post('is_featured'),
                    'slug' => $slug . ".html",
                    'created_by' => $data['user_session']['user_id']
                );
                $this->common_model->insertRow($arr_post_data, TABLES::$MST_PRODUCTS);
                $product_id = $this->db->insert_id();
                $arr_variant_data = $this->common_model->getRecords(TABLES::$MST_VARIANTS, 'variant_key', array('status' => '1'));
                $ar = array();

                foreach ($arr_variant_data as $key => $vd) {
                    foreach ($_POST[$vd['variant_key']] as $n) {
                        $in = $this->common_model->insertRow(array('key' => $vd["variant_key"], 'value' => $n,'product_id'=>$product_id), TABLES::$MST_TRANS_VARIANT);
                    }
                    $ar[] = $vd['variant_key'];
                }
            }
            $this->session->set_userdata('success_msg', "Your product has been updated successfully, Please wait for the admin approval.");
            redirect(base_url() . 'admin/product-list');
        }
        $data['arr_variant_data'] = $this->common_model->getRecords(TABLES::$MST_VARIANTS, '*', array('status' => '1'));
        $this->template->set('arr_variant_data', $data['arr_variant_data']);
        $this->template->set('category', $category);
        $this->template->set('subcategory', $subcategory);
        $this->template->set('page', 'productlist');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Blogs')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', 'partials/sidebar')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('admin/product/product_add');
    }

    private function upload_files($path, $files)
    {
        $config = array(
            'upload_path' => $path,
            'allowed_types' => 'jpg|jpeg|gif|png',
            'max_size' => '9000000',
        );

        $this->load->library('upload', $config);

        $images = array();
        $data1 = array();

        foreach ($files['name'] as $key => $image) {
            $_FILES['thumbnail[]']['name'] = $files['name'][$key];
            $_FILES['thumbnail[]']['type'] = $files['type'][$key];
            $_FILES['thumbnail[]']['tmp_name'] = $files['tmp_name'][$key];
            $_FILES['thumbnail[]']['error'] = $files['error'][$key];
            $_FILES['thumbnail[]']['size'] = $files['size'][$key];



            $this->upload->initialize($config);

            if ($this->upload->do_upload('thumbnail[]')) {
                $this->upload->data();
                $data1['upload_data'] = $this->upload->data();
                $fileName = $data1['upload_data'];

                $images[] = $fileName;

                $config['file_name'] = time() . rand();
                //$ar = list($width, $height) = getimagesize($data1['full_path']);
                $upload_result1 = $this->upload->data();
                $image_config1 = array(
                    'source_image' => $upload_result1['full_path'],
                    'new_image' => "uploads/products/thumbnails/135x163",
                    'maintain_ratio' => false,
                    'width' => 135,
                    'height' => 163
                );
                $this->load->library('image_lib');
                $this->image_lib->initialize($image_config1);
                $resize_rc = $this->image_lib->resize();
            } else {
                return false;
            }
        }

        return $images;
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
