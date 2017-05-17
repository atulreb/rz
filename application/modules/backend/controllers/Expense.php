<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Expense extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model("common_model");
        $this->load->model("product_model");
        $this->load->library('cart');
        $data['user_session'] = $this->session->userdata('user_account');
        $this->user_id = $data['user_session']['user_id'];
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
//        $this->load->library('form_validation');
    }

    /* Frontend : Manage Blog Start */

    public function expenseList()
    {
        $data['global'] = $this->common_model->getGlobalSettings();
        $data = $this->common_model->commonFunction();
        $data['user_session'] = $this->session->userdata('user_account');
        #START Action :: Fetch all active Blog added by admin :   
        $data['arr_expense_data'] = $this->common_model->getRecords(TABLES::$EXPENSE, '*');
//        print_r($data['arr_product_data']);


        $this->template->set('page', 'couponlist');
        $this->template->set('expense', $data['arr_expense_data']);
        $this->template->set('global', $data['global']);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Expense List')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('finance/expense_list');
    }

    public function addExpense()
    {

        if (!$this->common_model->isLoggedIn()) {
            $this->session->set_userdata('error_msg', "Please sign in to post your blog.");
            redirect('login');
        }
        $data = $this->common_model->commonFunction();
        if (count($_POST) > '0') {
            $arr_post_data = array(
                "expense" => $this->input->post('expense'),
                "date" => date("Y-m-d", strtotime($this->input->post('date'))),
                "amount" => $this->input->post('amount'),
                "category" => $this->input->post('category'),
                "reference" => $this->input->post('reference'),
                "created_by" => $this->user_id,
                "created_time" => date("Y-m-d H:i:s"),
            );
            $this->common_model->insertRow($arr_post_data, TABLES::$EXPENSE);
            $this->session->set_userdata('msg', "Expense added successfully.");
            redirect(base_url() . 'finance/expense-list');
        }
        $this->template->set('page', 'expenselist');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Add Expense')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('finance/add_expense');
    }

    /* Function to add blog post end */

    public function editExpense($edit_id)
    {

        if (!$this->common_model->isLoggedIn()) {
            $this->session->set_userdata('error_msg', "Please sign in to post your blog.");
            redirect('login');
        }

        $expense_data = $this->common_model->getRecords(TABLES::$EXPENSE, '*', array('id' => $edit_id));
        $data = $this->common_model->commonFunction();
        if (count($_POST) > '0') {
            $arr_post_data = array(
                "expense" => $this->input->post('expense'),
                "date" => date("Y-m-d", strtotime($this->input->post('date'))),
                "amount" => $this->input->post('amount'),
                "category" => $this->input->post('category'),
                "reference" => $this->input->post('reference'),
                "created_by" => $this->user_id,
                "created_time" => date("Y-m-d H:i:s"),
            );
            $this->common_model->updateRow(TABLES::$EXPENSE, $arr_post_data, array('id' => $edit_id));
            $this->session->set_userdata('msg', "Expense updated successfully.");
            redirect(base_url() . 'finance/expense-list');
        }

        $this->template->set('expense_data', $expense_data);
        $this->template->set('edit_id', $edit_id);
        $this->template->set('page', 'productlist');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Edit Expense')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('finance/edit_expense');
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
