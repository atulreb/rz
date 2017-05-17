<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Employee extends CI_Controller {

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
    }

    public function dashboard() {
        $this->template->set('page', 'dashboard');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Employee Dashboard')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('employee/dashboard');
    }

    /* Frontend : Manage Blog Start */

    public function employeeList() {
        if (!$this->common_model->isLoggedIn()) {
            redirect(base_url() . "admin/login");
        }

        $data['global'] = $this->common_model->getGlobalSettings();
        $data = $this->common_model->commonFunction();
        $data['user_session'] = $this->session->userdata('user_account');
        #START Action :: Fetch all active Blog added by admin :   
        $data['employee_lsit'] = $this->employee_model->employeeList();
        //print_r($data['employee_lsit']);


        $this->template->set('page', 'productlist');
        $this->template->set('employee_lsit', $data['employee_lsit']);
        $this->template->set('global', $data['global']);
        $this->template->set('user_session', $data['user_session']);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Employee List')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', 'partials/sidebar')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('employee/employee_list');
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

    public function employeePayslips() {
        if (!$this->common_model->isLoggedIn()) {
            redirect(base_url() . "admin/login");
        }

        $data['payslip'] = $this->common_model->getRecords(TABLES::$EMP_SALARY, '', array('emp_id' => $this->userid));

        $this->template->set('page', 'payslip');
        $this->template->set('payslip', $data['payslip']);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Employee List')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('employee/employee_payslips');
    }
    public function viewEmployeeAllDocuments($id) {
        if (!$this->common_model->isLoggedIn()) {
            redirect(base_url() . "admin/login");
        }

        $data['docs'] = $this->common_model->getRecords(TABLES::$EMP_DOCUMENTS, '', array('emp_id' => $id));

        $this->template->set('page', 'payslip');
        $this->template->set('docs', $data['docs']);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Employee List')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('employee/employee_all_documents');
    }
    
    public function employeeDocuments() {
        if (!$this->common_model->isLoggedIn()) {
            redirect(base_url() . "admin/login");
        }

        $data['docs'] = $this->employee_model->getEmployeeDocuments();

        $this->template->set('page', 'docs');
        $this->template->set('docs', $data['docs']);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Employee List')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('employee/employee_documents');
    }
    

    public function uploadEmployeeDocument() {
        if (!$this->common_model->isLoggedIn()) {
            redirect(base_url() . "admin/login");
        }
        if (count($_POST) > 0) {
            $name_array = array();
            $count = count($_FILES['doc_file']['size']);

            foreach ($_FILES as $key => $value) {
                for ($s = 0; $s <= $count - 1; $s++) {
                    $_FILES['doc_file']['name'] = $value['name'][$s];
                    $_FILES['doc_file']['type'] = $value['type'][$s];
                    $_FILES['doc_file']['tmp_name'] = $value['tmp_name'][$s];
                    $_FILES['doc_file']['error'] = $value['error'][$s];
                    $_FILES['doc_file']['size'] = $value['size'][$s];
                    $config['upload_path'] = './uploads/employee_documents/';
                    $config['allowed_types'] = 'pdf|doc|docx|gif|jpg|png';
                    $config['file_name'] = time() . rand();
                    $config['max_size'] = '2500000';
//                    $config['max_width'] = '1024';
//                    $config['max_height'] = '768';
                    $this->load->library('upload', $config);
                    if($this->upload->do_upload('doc_file')){
                    
                    $data = $this->upload->data();
                    $name_array[] = $data['file_name'];     
                    }else{
                        
                    }
                }
            }
            $t = 0;
            foreach ($name_array as $value) {
                $mdata = array('emp_id' => $this->userid,'document_name'=> $_POST['doc_name'][$t], 'document' => $value, 'created_time' => date('Y-m-d H:i:s'));
                $this->common_model->insertRow($mdata,TABLES::$EMP_DOCUMENTS); 
                $t++;
            }
            
            $this->session->set_userdata('msg','Documents uploaded successfully');
            redirect(base_url().'employee/upload-document');
        }

        $this->template->set('page', 'payslip');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Employee List')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('employee/upload_document');
    }

     public function addPaySlip() {
        $this->load->library('M_pdf');
        if (count($_POST) > 0) {
            $empdata = $this->common_model->getRecords(TABLES::$EMPLOYEES .' as e','e.*,(select username from '.TABLES::$ADMIN_USER.' where id=e.emp_id) as username',array('emp_id'=>$this->input->post('emp_id')));
            $pdf = '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="http://54.208.126.92/Razorclean/media/frontend/img/logob.png" alt="" width="280" height="64" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
<table style="height: 150px;border-collapse:no-collapse" border="1"  width="622">
<tbody>
<tr>
<td>Employee Name</td>
<td>'.$empdata[0]['emp_name'].'</td>
</tr>
<tr>
<td>Employee Code</td>
<td>'.$empdata[0]['username'].'</td>
</tr>
<tr>
<td>Total Days</td>
<td>30</td>
</tr>
<tr>
<td>Present Days</td>
<td>'.$this->input->post('present_days').'</td>
</tr>
</tbody>
</table>
<table style="height: 125px;" style="height: 150px;border-collapse:no-collapse" border="1" width="622">
<tbody>
<tr>
<td>&nbsp;<strong>Component</strong></td>
<td><strong>Amount &nbsp;&nbsp;</strong></td>
</tr>
<tr>
<td>&nbsp;Basic</td>
<td>'.$this->input->post('salary').'</td>
</tr>
<tr>
<td>&nbsp;HRA</td>
<td>-</td>
</tr>
<tr>
<td>&nbsp;Conveyence</td>
<td>-</td>
</tr>
<tr>
<td>&nbsp;<strong>Total Amount</strong></td>
<td>'.$this->input->post('salary').'</td>
</tr>
</tbody>
</table>
<p>Note: This is automatic generated payment slip. So need of signature.</p>';
                $html1 = $pdf;
                $eid = explode('@',$this->input->post('emp_id'));
                $payslip = "./uploads/payslip/" . time() . "_" . $eid[0] . ".pdf";
                $this->m_pdf->pdf->mirrorMargins = 1;
                $html = mb_convert_encoding($html1, 'UTF-8', 'UTF-8');
                $this->m_pdf->pdf->WriteHTML($html);
                $this->m_pdf->pdf->Output($payslip, 'F');
                //$this->m_pdf->pdf->Output();
            //$this->m_pdf->pdf->Output();
                
            $data = array("emp_id" => $eid[0], 'month' => date("F Y",strtotime($this->input->post('month'))),
                'present_days' => $this->input->post('present_days'),
                'salary' => $this->input->post('salary'),
                'payslip' => $payslip,
                'created_time' => date("Y-m-d H:i:s"),
                'created_by' => $this->userid);
            $insert = $this->common_model->insertRow($data, TABLES::$EMP_SALARY);
            
            if ($insert) {
                
                $this->session->set_userdata('msg', 'Payment slip generated successfully.');
                redirect(base_url() . 'admin/add-payslip');
            }
        }
        $uid = $this->employee_model->employeeList();
        $this->template->set('employee', $uid);
        $this->template->set('page', 'productlist');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Employee Dashboard')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('employee/add_payslip');
    }


}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
