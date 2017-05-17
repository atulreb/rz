<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Training extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("common_model");
        $this->load->model("employee_model");
//        $this->load->library('form_validation');
        $data['user_session'] = $this->session->userdata('user_account');
        $this->userid = $data['user_session']['user_id'];
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
        ini_set('memory_limit', '200M');
        ini_set('upload_max_filesize', '200M');
        ini_set('post_max_size', '200M');
        ini_set('max_input_time', 3600);
        ini_set('max_execution_time', 3600);
    }

    public function addTrainingMaterial() {
        $employee = $this->common_model->getRecords(TABLES::$EMPLOYEES, '');
        if (count($_POST) > 0) {
            if ($_FILES['document']['name'] != '') {
                $_FILES['document']['name'];
                $_FILES['document']['type'];
                $_FILES['document']['tmp_name'];
                $_FILES['document']['error'];
                $_FILES['document']['size'];
                $config['file_name'] = time() . rand();
                $config['upload_path'] = 'uploads/training_material';
                $config['allowed_types'] = 'pdf|doc|docx|odt';
                $this->load->library('upload');
                $this->upload->initialize($config);
                if ($this->upload->do_upload('document')) {
                    $data['upload_data'] = $this->upload->data();
                    $ar = list($width, $height) = getimagesize($data['full_path']);
                    $upload_result = $this->upload->data();
                    $img_path = $upload_result['file_name'];
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_userdata('error', $error);
                    redirect(base_url() . 'admin/add-training-material');
                }

                foreach($_POST['emp_id'] as $p){
                    $arr_post_data1 = array(
                        "emp_id" => $p,
                        "document_path" => $img_path,
                        'created_time' => date("Y-m-d H:i:s"),
                        'created_by' => $this->userid,
                        'document_name' => $this->input->post('document_name')
                    );
                    $new_post_id = $this->common_model->insertRow($arr_post_data1, TABLES::$TRAINING_MATERIAL);
                }
                
            }
            $this->session->set_userdata('msg', "Training material uploaded successfully");
            redirect(base_url() . 'admin/add-training-material');
        }

        $this->template->set('employee', $employee);
        $this->template->set('page', 'add-training-material');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Employee Dashboard')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('employee/add_training_material');
    }

    /* Frontend : Manage Blog Start */

    public function TrainingMaterialListForEmployee() {
        if (!$this->common_model->isLoggedIn()) {
            redirect(base_url() . "admin/login");
        }

        $data['docs'] = $this->common_model->getRecords(TABLES::$TRAINING_MATERIAL,'',array('emp_id'=>$this->userid));

        $this->template->set('page', 'productlist');
        $this->template->set('docs', $data['docs']);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Employee List')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('employee/training_material');
    }

    public function addEmployee() {
        $this->load->library('form_validation');
        $session = $this->session->userdata('user_account');
        $data['global'] = $this->common_model->getGlobalSettings();
        $result = array();
        $empid = $this->employee_model->getEmployeeNumber();
//print_r($empid);
        if (empty($empid)) {
            $empid = 'E00001';
        } else {
            $empid = $empid[0]['number'];
        }
        if (count($_POST) > 0) {
            $this->form_validation->set_rules('emp_name', 'Employee Name', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[' . TABLES::$ADMIN_USER . '.email]');
            $this->form_validation->set_rules('emp_id', 'Employee', 'trim|required|is_unique[' . TABLES::$ADMIN_USER . '.username]');
            $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
            $this->form_validation->set_rules('hire_date', 'Phone', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
//                die();

                $this->template->set('error', validation_errors());
                $this->template->set('global', $data['global']);
                $this->template->set_theme('default_theme');
                $this->template->set_layout('backend')
                        ->title('Razorclean | Vendors List')
                        ->set_partial('header', 'partials/header')
                        ->set_partial('sidebar', 'partials/sidebar')
                        ->set_partial('footer', 'partials/footer');
                $this->template->build('employee/add_employee');
            } else {
                $password = rand(00000, 99999);

                $uid = $this->common_model->insertRow(array('email' => $this->input->post('email'),
                    'username' => $empid, 'password' => MD5($password),
                    'verified' => '1', 'role_id' => '2',
                    'user_status' => '1',
                    'created_time' => date("Y-m-d H:i:s")), TABLES::$ADMIN_USER);

                $user['emp_name'] = $this->input->post('emp_name');
                $user['emp_id'] = $uid;
                $user['phone'] = $this->input->post('phone');
                $user['address'] = $this->input->post('address');
                $user['starting_salary'] = $this->input->post('starting_salary');
                $user['hire_date'] = date("Y-m-d", strtotime($this->input->post('hire_date')));
                $user['start_date'] = date("Y-m-d", strtotime($this->input->post('start_date')));
                $user['created_by'] = $session['user_id'];
                $user['created_time'] = date('Y-m-d H:i:s');

                $uid = $this->common_model->insertRow($user, TABLES::$EMPLOYEES);

                if ($uid) {
                    $reserved_words = array(
                        "||EMPLOYEE_NAME||" => $this->input->post('emp_name'),
                        "||USERNAME||" => $empid,
                        "||PASSWORD||" => $password,
                        "||SITE_LINK||" => base_url() . 'login',
                        "||SITE_TITLE||" => $data['global']['site_title']
                    );

                    /* getting mail subect and mail message using email template title and lang_id and reserved works */

                    $email_content = $this->common_model->getEmailTemplateInfo('add-employee', $reserved_words);

                    /* sending admin user mail for forgot password */

                    /* 1.recipient array. 2.From array containing email and name, 3.Mail subject 4.Mail Body */

                    $mail = $this->common_model->sendEmail($this->input->post('email'), array("email" => $data['global']['site_email'], "name" => $data['global']['site_title']), $email_content['subject'], $email_content['content']);
                    $result ['status'] = '1';
                    $msg = "Employee has been added and credentials sent to email id";
                    $this->session->set_userdata('msg', $msg);
                    redirect(base_url() . 'admin/employee-list');
                }
            }
        }

        $this->template->set('page', 'productlist');
        $this->template->set('empid', $empid);
        $this->template->set('global', $data['global']);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Vendors List')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', 'partials/sidebar')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('employee/add_employee');
    }

    public function profile() {
        if (count($_POST) > 0) {
            $data = array("emp_name" => $this->input->post('emp_name'),
                "address" => $this->input->post('address'),
                "phone" => $this->input->post('phone'),
                "hire_date" => date("Y-m-d", strtotime($this->input->post('hire_date'))),
                "start_date" => date("Y-m-d", strtotime($this->input->post('start_date'))),
                "starting_salary" => $this->input->post('starting_salary'),
                "updated_by" => $this->userid,
            );
            $update = $this->common_model->updateRow(TABLES::$EMPLOYEES, $data, array('emp_id' => $this->userid));
            if ($update) {
                $this->session->set_userdata('msg', 'Profile updated successfully.');
                redirect(base_url() . 'employee/profile');
            }
        }
        $userdata = $this->common_model->getRecords(TABLES::$EMPLOYEES . ' as emp', 'emp.*, (select username from ' . TABLES::$ADMIN_USER . ' where id=emp.emp_id) as emp_id,(select email from ' . TABLES::$ADMIN_USER . ' where id=emp.emp_id) as email,', array('emp_id' => $this->userid));
        $this->template->set('userdata', $userdata);
        $this->template->set('page', 'profile');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Employee Dashboard')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('employee/profile');
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
