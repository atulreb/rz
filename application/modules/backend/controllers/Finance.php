<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Finance extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("common_model");
        $this->load->model("Invoice_Model");
        $data['user_session'] = $this->session->userdata('user_account');
        //echo $this->session->userdata['user_account']['username']; die;

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
            redirect(base_url());
        }
    }

    /*
     * Add New Project User
     */

    public function invoices()
    {
        $data = $this->common_model->commonFunction();
        $invices = $this->common_model->getRecords(TABLES::$MST_SERVICE_INVOICE ." as invoice","invoice.*,(select CONCAT(fname,' ',lname) from tbl_user_details where user_id=invoice.user_id) as username");
        $this->template->set('global', $data['global']);
        $this->template->set('invices', $invices);
        $this->template->set('page', 'Invoices');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Invoices | RazorClean')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('finance/invoice_list');
    }

}
