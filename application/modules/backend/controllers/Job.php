<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Job extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("common_model");
        $this->load->model("product_model");
        $session = $this->session->userdata('user_account');
        $this->user_id = $session['user_id'];
//        $this->load->library('form_validation');
    }

    /* Frontend : Manage Blog Start */

    public function jobList() {
		if (!$this->common_model->isLoggedIn()) {
			$this->session->set_userdata(error);
            redirect(base_url() . "backend/login");
        }
        $data['global'] = $this->common_model->getGlobalSettings();
        $data = $this->common_model->commonFunction();
        $data['user_session'] = $this->session->userdata('user_account');
        #START Action :: Fetch all active Blog added by admin :   
        $data['job_data'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '*');
        $this->template->set('page', 'jobs_list');
        $this->template->set('job_data', $data['job_data']);
        $this->template->set('global', $data['global']);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Jobs')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', 'partials/sidebar')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('jobs/jobs_list');
    }

    /* Function to add blog post end */

    public function addJob() {

        if (!$this->common_model->isLoggedIn()) {
            $this->session->set_userdata('error', "Please sign in to add job.");
            redirect('backend/login');
        }
        $data = $this->common_model->commonFunction();
        if (count($_POST) > '0') {
            $arr_post_data = array(
                "job_title" => $this->input->post('job_title'),
                "short_desc" => $this->input->post('short_desc'),
                "state" => $this->input->post('state'),
                "long_desc" => $this->input->post('long_desc'),
                "status" => $this->input->post('status'),
                "service_category" => $this->input->post('service_category'),
                "posting_date" => date("Y-m-d", strtotime($this->input->post('posting_date'))),
                "created_by" => $this->user_id,
                "created_time" => date("Y-m-d H:i:s"),
            );
            $this->common_model->insertRow($arr_post_data, TABLES::$MST_JOBS);
            $this->session->set_userdata('success_msg', "Job posted successfully.");
            redirect(base_url() . 'admin/jobs-list');
        }
        $condition = "id IN (3960,3970,3922,3939,3947,3919,3974,3930,3931,3938,3957,3966,3969,3976)";
        $states = $this->common_model->getRecords(TABLES::$STATES, '*', $condition);
        $this->template->set('states', $states);
        $this->template->set('page', 'productlist');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Add Job')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', 'partials/sidebar')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('jobs/job_add');
    }

    /* Function to add blog post end */

    public function editJob($edit_id) {

        if (!$this->common_model->isLoggedIn()) {
			$this->session->set_userdata('error', "Please sign in continue.");
            redirect(base_url() . "backend/login");
        }

        $job_data = $this->common_model->getRecords(TABLES::$MST_JOBS, '*', array('id' => $edit_id));
        $data = $this->common_model->commonFunction();
        if (count($_POST) > '0') {


            $arr_post_data = array(
                "job_title" => $this->input->post('job_title'),
                "short_desc" => $this->input->post('short_desc'),
                "long_desc" => $this->input->post('long_desc'),
                "status" => $this->input->post('status'),
                "state" => $this->input->post('state'),
                "service_category" => $this->input->post('service_category'),
                "posting_date" => date("Y-m-d", strtotime($this->input->post('posting_date'))),
                "updated_by" => $this->user_id,
                "updated_time" => date("Y-m-d H:i:s"),
            );
            $this->common_model->updateRow(TABLES::$MST_JOBS, $arr_post_data, array('id' => $this->input->post('edit_id')));
            $this->session->set_userdata('success_msg', "Job details updated successfully.");
            redirect(base_url() . 'admin/jobs-list');
        }
        $condition = "id IN (3960,3970,3922,3939,3947,3919,3974,3930,3931,3938,3957,3966,3969,3976)";
        $states = $this->common_model->getRecords(TABLES::$STATES, '*', $condition);
        $this->template->set('states', $states);
        $this->template->set('job_data', $job_data);
        $this->template->set('edit_id', $edit_id);
        $this->template->set('page', 'productlist');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Edit Job')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', 'partials/sidebar')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('jobs/job_edit');
    }

    /* function to change job Status */

    public function changeStatus() {
        if ($this->input->post('post_id') != "") {
            #updating the user status.
            $arr_to_update = array(
                "status" => $this->input->post('post_status')
            );
            #condition to update record	for the user status
            $condition_array = array('id' => intval($this->input->post('post_id')));
            $this->common_model->updateRow(TABLES::$MST_JOBS, $arr_to_update, $condition_array);
            echo json_encode(array("error" => "0", "error_message" => "Status has changed successflly."));
        } else {
            #if something going wrong providing error message. 
            echo json_encode(array("error" => "1", "error_message" => "Sorry, your request can not be fulfilled this time. Please try again later"));
        }
    }

    public function getJobDescription() {
        if ($this->input->post('id') != "") {
            $jobdata = $this->common_model->getRecords(TABLES::$MST_JOBS, '*', array('id' => $this->input->post('id')));
			$sc = $jobdata[0]['service_category'];

            switch ($sc) {
                case "Towing":
                    $icon = "img/loading/towing.png";
                    break;
                case "Security":
                     $icon = "img/loading/security.png";
                    break;
                case "Mobile Detail":
                     $icon = "img/loading/mobile-detail.png";
                    break;
                case "Building Services":
                     $icon = "img/loading/building-services.png";
                    break;
                case "Housekeepers":
                     $icon = "img/loading/housekeeper.png";
                    break;
                case "Lawn Care":
                     $icon = "img/loading/lawn-care.png";
                    break;
                case "Painters":
                     $icon = "img/loading/painter.png";
                    break;
                case "Pool Cleaning":
                     $icon = "img/loading/pool-cleaning.png";
                    break;
                case "Handyman":
                     $icon = "img/loading/handyman.png";
                    break;
                case "Staffing":
                     $icon = "img/loading/staffing.png";
                    break;
                case "Pest Control":
                     $icon = "img/loading/pest-control.png";
                    break;
                case "Foundation":
                     $icon = "img/loading/foundation.png";
                    break;
                case "Transport":
                     $icon = "img/loading/transport.png";
                    break;
                default:
                     $icon = "img/loading/Main_Logo.png";
            }
            echo json_encode(array("status" => "1", "msg" => "Status has changed successflly.", "job_title" => $jobdata[0]['job_title'], "short_desc" => $jobdata[0]['short_desc'], "long_desc" => $jobdata[0]['long_desc'], "job_id" => $jobdata[0]['id'],"icon"=> frontend_asset_url().$icon));
        } else {
            #if something going wrong providing error message. 
            echo json_encode(array("status" => "0", "error_message" => "Sorry, your request can not be fulfilled this time. Please try again later"));
        }
    }

  public function getStateJobs() {
        if ($this->input->post('id') != "") {
            $jobdata = $this->common_model->getRecords(TABLES::$MST_JOBS, '*', array('state' => $this->input->post('id')));
            if(count($jobdata) > 0){
            //$output = '';
			
            $output .='<ul class="jobListing col-lg-8 ScrollStyle mCustomScrollbar" data-mcs-theme="dark" style="padding-left:0px;    overflow-y: scroll;">';
                            foreach ($jobdata as $job_data1) {
                                $output .='<li>
                                    <div class="job_list_icon">'.substr($job_data1['job_title'], '0', '1').'</div>
                                    <h4 class="col-lg-10" style="color:#ed1c24">
									<span style="width: 160px;float: left;height: 20px;overflow: hidden;">'.$job_data1['job_title'].'</span>
									<small style="color:#25aae1;cursor:pointer;" onclick="getJobDesc('.$job_data1['id'].')"> Job Description</small></h4>
                                    <p class="col-lg-10">'.$job_data1['short_desc'].'</p>
                                </li>';
                            } 


                        $output .='</ul>';
			

            echo json_encode(array("status" => "1","msg"=>"Data fetched", "result" => $output,"job_title" => $jobdata[0]['job_title'], "short_desc" => $jobdata[0]['short_desc'], "long_desc" => $jobdata[0]['long_desc'], "job_id" => $jobdata[0]['id']));
        } else {
            $output = "";
			#if something going wrong providing error message. 
            echo json_encode(array("status" => "0", "result" => $output,"job_title" => '', "short_desc" => '', "long_desc" => '', "job_id" => '', "error_message" => "Sorry, your request can not be fulfilled this time. Please try again later"));
        }
            
        }
    }

    public function applyToJob() {
        if ($this->input->post('job_id') == "") {
            $map ['status'] = '0';
            $map ['msg'] = "Something went wrong. Please try after some time.";
            echo json_encode($map);
            exit;
        }
        $this->load->library('form_validation');
        $this->form_validation->set_rules('full_name', 'Full Name', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
        $this->form_validation->set_rules('state', 'state', 'trim|required');
        $this->form_validation->set_rules('state', 'State', 'trim|required');
        $this->form_validation->set_rules('experience', 'Experience', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $map ['status'] = '0';
            $map ['msg'] = validation_errors();
            echo json_encode($map);
        } else {
            $user['applicant_name'] = $this->input->post('full_name');
            $user['email'] = $this->input->post('email');
            $user['mobile'] = $this->input->post('mobile');
            $user['message'] = $this->input->post('message');
            $user['state'] = $this->input->post('state');
            $user['state'] = $this->input->post('state');
            $user['job_id'] = $this->input->post('job_id');
            $user['apply_date'] = date("Y-m-d H:i:s");

            if (isset($_FILES['resume']['name'])) {
                $config = array();
                $config['upload_path'] = './uploads/resumes/';
                $config['allowed_types'] = 'pdf';
                $config['remove_spaces'] = TRUE;
                $config['encrypt_name'] = TRUE;
                $config['overwrite'] = FALSE;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('resume')) {
                    $error = $this->upload->display_errors();
                    $map ['status'] = 0;
                    $map ['msg'] = "Resume Error - " . $error;
                    echo json_encode($map);
                    exit;
                } else {
                    $data = array('upload_data' => $this->upload->data());
                }
                $user['resume'] = "uploads/resumes/" . $data['upload_data']['file_name'];
            }

            $uid = $this->common_model->insertRow($user, TABLES::$JOB_APPLICATIONS);
            if ($uid) {
                $map ['status'] = '1';
                $map ['msg'] = "Application submitted successfully";
                echo json_encode($map);
            }
        }
    }
 public function jobApplications() {
	 if (!$this->common_model->isLoggedIn()) {
			$this->session->set_userdata('error', "Please sign in continue.");
            redirect(base_url() . "backend/login");
        }
        $data['global'] = $this->common_model->getGlobalSettings();
        $data = $this->common_model->commonFunction();
        $data['user_session'] = $this->session->userdata('user_account');
        #START Action :: Fetch all active Blog added by admin :   
        $data['appliation_data'] = $this->common_model->getRecords(TABLES::$JOB_APPLICATIONS . ' as ja', 'ja.applicant_name,ja.email,ja.mobile,ja.message,ja.resume,ja.service_category,ja.experience,ja.apply_date,id,(select name from ' . TABLES::$STATES . ' where id = ja.state) as state,(select job_title from '.TABLES::$MST_JOBS.' where id=ja.job_id) as job_title', '', 'id desc');
        $this->template->set('page', 'job_applications');
        $this->template->set('appliation_data', $data['appliation_data']);
        $this->template->set('global', $data['global']);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Job Applications')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', 'partials/sidebar')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('jobs/jobs_applications');
    }
    public function getJobDetailsFront() {
        $data = $this->common_model->getRecords(TABLES::$MST_JOBS, "", array('id' => $this->input->post('job_id')));
        $response['job_id'] = $data[0]['id'];
        $response['job_title'] = $data[0]['job_title'];
        $response['short_desc'] = $data[0]['short_desc'];
        $response['long_desc'] = $data[0]['long_desc'];
        echo json_encode($response);
    }

}

/* End of file home.php */
    /* Location: ./application/controllers/home.php */
    