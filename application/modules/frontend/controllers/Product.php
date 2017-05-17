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
        $this->global_setting = $this->common_model->getGlobalSettings();
    }

    /**
     * code for call product category
     */
    public function shopCategory($cat,$pg = '')
    {
        $products = $this->product_model->productsBycategory($limit = '', $offset = '',$cat);
        #Start:: pagination 
        #load pagination library 
        $totalrows = count($products);
        $this->load->library('pagination');
        $config['base_url'] = base_url() . "product/category/".$cat;
        $config['total_rows'] = $totalrows;
        $config['per_page'] = 10;
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
        if ($products != '') {
            $products = array_slice($products, $from, $lenth);
        }
        
        $this->template->set('global', $this->global_setting);
        $this->template->set('pg_link', $data['pg_link']);
        $this->template->set('products', $products);
        $this->template->set('page', 'shop_category');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('frontend')
                ->title($this->global_setting['site_title'] . ' | Shop Category')
                ->set_partial('header', 'partials/header')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('frontpages/shop_category');
    }

    /**
     * code for call product category
     */
    public function getSubCategory()
    {
        $cat = $this->common_model->getRecords(TABLES::$TRANS_PRODUCT_SUB_CATEGORIES, '', array('category_id' => $this->input->post('category')));
        $output = "";
        foreach ($cat as $cat) {
            $output .= "<option>" . $cat['sub_category_name'] . "</option>";
        }
        echo $output;
    }

    /**
     * code for call shop
     */
    public function shop()
    {
        $data['category_details'] = $this->product_model->getProductCategories();
        $data['products'] = $this->common_model->getRecords(TABLES::$MST_PRODUCTS,'',array('status'=>'1'),'created_on desc');
        $this->template->set('category_details', $data['category_details']);
        $this->template->set('products', $data['products']);
        $this->template->set('global', $this->global_setting);
        $this->template->set('page', 'shop');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('frontend')
                ->title($this->global_setting['site_title'] . ' | Shop')
                ->set_partial('header', 'partials/header')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('frontpages/shop');
    }

    public function productDetails($product_id = '')
    {
        $data = $this->common_model->commonFunction();
        $data['lang'] = $this->lang->language;
        $data['header'] = array("title" => 'Blog Details', "keywords" => "", "description" => "");
        $data['product_details'] = $this->product_model->getProductDetails($product_id);
        $variant = $this->common_model->getRecords(TABLES::$MST_TRANS_VARIANT,'*',array('product_id'=>$data['product_details'][0]['product_id']));
        $this->template->set('product_details', $data['product_details']);
		$this->template->set('global', $this->global_setting);
        $this->template->set('variant', $variant);
        $this->template->set('page', 'product_details');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('frontend')
                ->title('Razorclean | product')
                ->set_partial('header', 'partials/header')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('frontpages/product_details');
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
