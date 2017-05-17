<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    /**
     * code for call signup form
     */
    public function createVcard()
    {
        $this->template->set('page', 'registration');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('default')
                ->title('Mobile | Sign up');
        $this->template->build('vcard_steps');
    }

    public function saveVcard()
    {
        $this->load->helper('utility_helper');
        $this->load->model('common_model');
        $this->load->helper(array(
            'form',
            'url'
        ));
        $errors = array();
        $this->load->library('form_validation');
        $errorMsg = array();
        $err_num = 0;

        $this->form_validation->set_rules('company_name', 'Company Name', 'trim|required');
        $this->form_validation->set_rules('job_title', 'Job Title', 'trim|required');
        $this->form_validation->set_rules('company_phone', 'Company Phone', 'trim|required');
        $this->form_validation->set_rules('company_website', 'Company Website', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $map ['status'] = 0;
            $map ['msg'] = validation_errors();
            echo json_encode($map);
        } else {
            $map = array();
            $user = array();
            $user['company_name'] = $this->input->post('company_name');
            $user['job_title'] = $this->input->post('job_title');
            $user['work_phone'] = $this->input->post('company_phone');
            $user['work_website'] = $this->input->post('company_website');
            $user['work_address'] = $this->input->post('work_address');
            $user['work_city'] = $this->input->post('work_city');
            $user['work_state'] = $this->input->post('work_state');
            $user['work_country'] = $this->input->post('work_country');
            $user['work_postal_code'] = $this->input->post('work_postal_code');

            $user['home_address'] = $this->input->post('home_address');
            $user['home_city'] = $this->input->post('home_city');
            $user['home_state'] = $this->input->post('home_state');
            $user['home_country'] = $this->input->post('home_country');
            $user['home_postal_code'] = $this->input->post('home_postal_code');
            $user['gender'] = $this->input->post('gender');
            $user['birthday'] = $this->input->post('birthday');
            $user['anniversary'] = $this->input->post('anniversary');
            $user['notes'] = $this->input->post('notes');

            $user['home_phone'] = $this->input->post('home_phone');
            $user['personal_title'] = $this->input->post('personal_title');
            $user['nick_name'] = $this->input->post('nick_name');
            $user['why_choose_desc'] = $this->input->post('why_choose_desc');
            $user['facebook_link'] = $this->input->post('facebook_link');
            $user['twitter_link'] = $this->input->post('twitter_link');
            $user['linkedin_link'] = $this->input->post('linkedin_link');


            $user['id'] = $this->input->post('id');

            $this->load->model('Login_model');

            $uid = $this->common_model->getRecords(TABLES::$ADMIN_USER, 'id', array('id' => $user['id']));
            if (count($uid) > 0) {
                if (isset($_FILES['why_choose_image']['name'])) {
                    $config = array();
                    $config['upload_path'] = './uploads/why_choose_images/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = 1024;
                    $config['max_width'] = 1024;
                    $config['max_height'] = 768;

                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload('why_choose_image')) {
                        $error = $this->upload->display_errors();
                        $map ['status'] = 0;
                        $map ['msg'] = $error;
                        echo json_encode($map);
                        exit;
                    } else {
                        $data = array('upload_data' => $this->upload->data());
                    }
                    $user['why_choose_image'] = base_url() . "uploads/why_choose_images/" . $user['id'] . "_" . $_FILES['why_choose_image']['name'];
                }

                if (isset($_FILES['why_choose_video']['name'])) {
                    $config1 = array();
                    $config1['upload_path'] = './uploads/why_choose_videos/';
                    $config1['allowed_types'] = 'mp4|mpeg|avi|3gp';
                    $config1['max_size'] = 20971520;

                    $this->load->library('upload', $config1);
                    $this->upload->initialize($config1);
                    if (!$this->upload->do_upload('why_choose_video')) {
                        $error1 = $this->upload->display_errors();
                        $map ['status'] = 0;
                        $map ['msg'] = $error1;
                        echo json_encode($map);
                        exit;
                    } else {
                        $data = array('upload_data' => $this->upload->data());
                    }
                    $user['why_choose_video'] = base_url() . "uploads/why_choose_videos/" . $user['id'] . "_" . $_FILES['why_choose_video']['name'];
                }

                if (isset($_FILES['business_opportunity_video']['name'])) {
                    $config3 = array();
                    $config3['upload_path'] = './uploads/business_opportunity_video/';
                    $config3['allowed_types'] = 'mp4|mpeg|avi|3gp';
                    $config3['max_size'] = 20971520;

                    $this->load->library('upload', $config3);
                    $this->upload->initialize($config3);
                    if (!$this->upload->do_upload('business_opportunity_video')) {
                        $error4 = $this->upload->display_errors();
                        $map ['status'] = 0;
                        $map ['msg'] = $error4;
                        echo json_encode($map);
                        exit;
                    } else {
                        $data = array('upload_data' => $this->upload->data());
                    }
                    $user['business_opportunity_video'] = base_url() . "uploads/business_opportunity_video/" . $user['id'] . "_" . $_FILES['business_opportunity_video']['name'];
                }
                $updatedata = $this->common_model->updateRow(TABLES::$ADMIN_USER, $user, array('id' => $user['id']));

                if (isset($_POST['business_strategy'])) {
                    if (!empty($_FILES['business_strat_video']['name'])) {
                        $filesCount = count($_FILES['business_strat_video']['name']);
                        //echo json_encode(count($_FILES['business_strat_video']['name']));
                        for ($i = 0; $i < $filesCount; $i++) {
                            $_FILES['business_strat_video']['name'] = $_FILES['business_strat_video']['name'][$i];
                            $_FILES['business_strat_video']['type'] = $_FILES['business_strat_video']['type'][$i];
                            $_FILES['business_strat_video']['tmp_name'] = $_FILES['business_strat_video']['tmp_name'][$i];
                            $_FILES['business_strat_video']['error'] = $_FILES['business_strat_video']['error'][$i];
                            $_FILES['business_strat_video']['size'] = $_FILES['business_strat_video']['size'][$i];

                            $uploadPath = './uploads/business_strategy_videos/';
                            $config2['upload_path'] = $uploadPath;
                            $config2['allowed_types'] = 'mp4|mpeg|avi|3gp';
                            $config2['max_size'] = 20971520;

                            $this->load->library('upload', $config2);
                            $this->upload->initialize($config2);
                            if ($this->upload->do_upload('business_strat_video')) {
                                $fileData = $this->upload->data();
                                $uploadData[$i]['file_name'] = $fileData['file_name'];
                            } else {
                                $error2 = $this->upload->display_errors();
                                $map ['status'] = 0;
                                $map ['msg'] = $error2;
                                echo json_encode($map);
                                exit;
                            }
                        }
                    }
                }
                for ($i = 0; $i < count($_POST['business_strategy']); $i++) {
                    //$video = base_url() . "uploads/business_strategy_videos/" . $user['id'] . "_" . $_FILES['business_strat_video']['name'][$i];
                    $this->common_model->insertRow(array('user_id' => $user['id'], 'description' => $_POST['business_strategy'][$i]), TABLES::$BUSINESS_STRAT);
                }
                $card_data = array();
                $map ['status'] = 1;
                $map ['msg'] = "Your vcard has been generated";
                echo json_encode($map);
            }
        }
    }

    public
            function generate_card()
    {

        /*
          Initialize an array to store the various vCard data
         */
        $card_data = array();

        /*
          If you leave this blank, the current timestamp will be used.
         */
        //$card_data['revision_date'] = "";

        /*
          Possible values are PUBLIC, PRIVATE, and CONFIDENTIAL. If you leave class
          blank, it will default to PUBLIC.
         */
        //$card_data['class'] = "PUBLIC";

        /*
          Contact's name data.
          If you leave display_name blank, it will be built using the first and last name.
         */
        //$card_data['display_name'] = "";
        $card_data['first_name'] = "Test";
        $card_data['last_name'] = "Person";
        $card_data['additional_name'] = "A"; //Middle name
        $card_data['name_prefix'] = "Mr.";  //Mr. Mrs. Dr.
        $card_data['name_suffix'] = ""; //DDS, MD, III, other designations.
        $card_data['nickname'] = "TP";

        /*
          Contact's company, department, title, profession
         */
        $card_data['company'] = "Test Company";
        //$card_data['department'] = "";
        $card_data['title'] = "Senior Web Developer";
        $card_data['role'] = "Developer";

        /*
          Contact's work address
         */
        //$card_data['work_po_box'] = "";
        //$card_data['work_extended_address'] = "";
        $card_data['work_address'] = "123 Main Street";
        $card_data['work_city'] = "New York";
        $card_data['work_state'] = "NY";
        $card_data['work_postal_code'] = "10023";
        //$card_data['work_country'] = "United States of America";

        /*
          Contact's home address
         */
        //$card_data['home_po_box'] = "";
        //$card_data['home_extended_address'] = "";
        $card_data['home_address'] = "456 Broadway";
        $card_data['home_city'] = "New York";
        $card_data['home_state'] = "NY";
        $card_data['home_postal_code'] = "10001";
        //$card_data['home_country'] = "United States of America";

        /*
          Contact's telephone numbers.
         */
        $card_data['office_tel'] = "";
        //$card_data['home_tel'] = "";
        $card_data['cell_tel'] = "(123) 456-7890";
        $card_data['fax_tel'] = "";
        //$card_data['pager_tel'] = "";

        /*
          Contact's email addresses
         */
        $card_data['email1'] = "email@domain.com";
        //$card_data['email2'] = "";

        /*
          Contact's website
         */
        $card_data['url'] = "http://www.yoursite.com";

        /*
          Some other contact data.
         */
        //$card_data['photo'] = "";  //Enter a URL.
        $card_data['birthday'] = "1979-01-02";
        $card_data['timezone'] = "-05:00";

        /*
          If you leave this blank, the class will default to using last_name or company.
         */
        //$card_data['sort_string'] = "";

        /*
          Notes about this contact.
         */
        $card_data['note'] = "Some notes go here.";


        /*
          Now we load up the library.
         */
        $this->load->library('vcard');

        /*
          Load the $card_data array into the library
         */
        $this->vcard->load($card_data);

        /*
          Now we can generate a vCard in a variety of ways.
         */

        // Generate a file on a server, providing a path and filename.
        // Path and filename are returned
        $path_and_filename = $this->vcard->generate_file & #40;'/path/to/filename.vcf'&#41;;
                // Generate a file on a server, providing only a path. Filename is generated.
                // Path and filename are returned
                $path_and_filename = $this->vcard->generate_file & #40;'/path/to/'&#41;;
                // Generate a vCard data string (to write to file yourself, etc.)
                // $string = $this->vcard->generate_string();
                // Generate a vCard and force download to the browser, providing a filename
                //$this->vcard->generate_download('filename.vcf');
                // Generate a vCard and force download to the browser, generate a filename automatically
                $this->vcard->generate_download();
    }

    function sendMail()
    {

        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.googlemail.com',
            'smtp_port' => 546,
            'smtp_user' => 'vrishalidemo@gmail.com', // your mail name
            'smtp_pass' => 'Test@123',
            'mailtype' => 'html',
            'newline' => '\r\n',
            'crlf' => '\r\n',
            'charset' => 'iso-8859-1',
            'mailpath' => '/usr/sbin/sendmail',
            'wordwrap' => TRUE
        );
        $this->load->library('email', $config);

        $message = 'test';
        $this->email->set_newline("\r\n");
        $this->email->from('vrishalidemo@gmail.com');
        $this->email->to('atul.suroshe@gmail.com');
        $this->email->subject('testing');
        $this->email->message($message);
        if ($this->email->send()) {
            echo 'Email sent.';
        } else {
            show_error($this->email->print_debugger());
        }
    }

}
