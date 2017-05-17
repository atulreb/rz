<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Cart extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('common_model');
        $this->global_setting = $this->common_model->getGlobalSettings();
    }

    public function checkout()
    {
        $cartdata = $this->cart->contents();
        $this->template->set('cart_data', $cartdata);
        $this->template->set('global_setting', $this->global_setting);
        $this->template->set('page', 'contact');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('frontend')
                ->title($this->global_setting['site_title'] . ' | Brand Services')
                ->set_partial('header', 'partials/header')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('frontpages/checkout');
    }

    public function addToCart()
    {
        $data = array(
            'id' => $this->input->post('id'),
            'qty' => $this->input->post('qty'),
            'price' => $this->input->post('price'),
            'name' => $this->input->post('name'),
            'options' => array('Size' => $this->input->post('size'))
        );
        $insert = $this->cart->insert($data);
        if ($insert) {
            $map['status'] = '1';
            $map['msg'] = 'Item added to cart';
            echo json_encode($map);
            exit();
        } else {
            $map['status'] = '0';
            $map['msg'] = 'Unable to add item t cart';
            echo json_encode($map);
            exit();
        }
    }

}
