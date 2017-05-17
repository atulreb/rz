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

        $data['user_session'] = $this->session->userdata('user_account');
        if ($data['user_session']['role_id'] == '1') {
            $this->sidebar = 'partials/sidebar';
        } else if ($data['user_session']['role_id'] == '2') {
            $this->sidebar = 'partials/employee_sidebar';
        } else if ($data['user_session']['role_id'] == '3') {
            $this->sidebar = 'partials/user_sidebar';
        } else {
            $this->sidebar = 'partials/finance_sidebar';
        }
        if (!$this->common_model->isLoggedIn()) {
            redirect(base_url() . "login");
        }
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

    public function user()
    {
        $membership = $this->common_model->getRecords('tbl_user_details', 'is_member', array('user_id' => $this->session->userdata['user_account']['user_id']));


        $this->template->set('membership', $membership);

        $this->template->set('page', 'dashboard');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | User Dashboard')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('user/dashboard');
    }

    public function finance()
    {
        $membership = $this->common_model->getRecords('tbl_user_details', 'is_member', array('user_id' => $this->session->userdata['user_account']['user_id']));


        $this->template->set('membership', $membership);

        $this->template->set('page', 'dashboard');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | User Dashboard')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('finance/dashboard');
    }

}
