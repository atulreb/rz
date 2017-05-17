<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Dashboard extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('cookie');
        $this->load->model("common_model");
    }

    public function admin()
    {
        $this->template->set('page', 'dashboard');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Admin Dashboard')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', 'partials/sidebar')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('admin/dashboard');
    }
    
    public function employee()
    {
        $this->template->set('page', 'dashboard');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Employee Dashboard')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', 'partials/sidebar')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('employee/dashboard');
    }

}
