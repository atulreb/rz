<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Building_services extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('common_model');
        $this->global_setting = $this->common_model->getGlobalSettings();
        $this->resultsPerpage = 2;
    }

    /**
     * code for call towing landing page
     */
    public function index() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('building_services/index', $data);
    }

    public function services() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('building_services/services', $data);
    }

    public function janitorialServices() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('building_services/janitorial_service', $data);
    }

    public function floorMaintainanceServices() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('building_services/floor-maintainance-service', $data);
    }

    public function deepCleanServices() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('building_services/deep-clean-service', $data);
    }

    public function terminalCleaningServices() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('building_services/terminal-cleaning-service', $data);
    }

    public function additionalServices() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('building_services/additional-service', $data);
    }

    public function hvacCleaning() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('building_services/hvac-cleaning', $data);
    }

    public function powerWashing() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('building_services/power-washing', $data);
    }

    public function restorationService() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('building_services/restoration-service', $data);
    }

    public function parkingSlotStriping() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('building_services/parking-slot-striping', $data);
    }

    public function officeCleaningServices() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('building_services/office-cleaning-service', $data);
    }

    public function contactUs() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('building_services/contact-us', $data);
    }

    public function aboutUs() {
        $data['global_setting'] = $this->global_setting;
        $this->load->view('building_services/about-us', $data);
    }

    public function carrers() {
        $data['global_setting'] = $this->global_setting;
        $data['jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS . ' as mj', 'mj.*,(select name from ' . TABLES::$STATES . ' where id=mj.state) as state_name', array('service_category' => 'Building Services'), 'id desc', '5');
        $this->load->view('building_services/careers', $data);
    }
	 public function airport() {
        $data['global_setting'] = $this->global_setting;
        $data['jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS . ' as mj', 'mj.*,(select name from ' . TABLES::$STATES . ' where id=mj.state) as state_name', array('service_category' => 'Building Services'), 'id desc', '5');
        $this->load->view('building_services/airport', $data);
    }
	public function commercialBuilding() {
        $data['global_setting'] = $this->global_setting;
        $data['jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS . ' as mj', 'mj.*,(select name from ' . TABLES::$STATES . ' where id=mj.state) as state_name', array('service_category' => 'Building Services'), 'id desc', '5');
        $this->load->view('building_services/commercial_building_cleaning', $data);
    }
    public function educationaliBuilding() {
        $data['global_setting'] = $this->global_setting;
        $data['jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS . ' as mj', 'mj.*,(select name from ' . TABLES::$STATES . ' where id=mj.state) as state_name', array('service_category' => 'Building Services'), 'id desc', '5');
        $this->load->view('building_services/educational_building_cleaning', $data);
    }
    public function financialBuilding() {
        $data['global_setting'] = $this->global_setting;
        $data['jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS . ' as mj', 'mj.*,(select name from ' . TABLES::$STATES . ' where id=mj.state) as state_name', array('service_category' => 'Building Services'), 'id desc', '5');
        $this->load->view('building_services/financial_building_cleaning', $data);
    }
    public function healthcareBuilding() {
        $data['global_setting'] = $this->global_setting;
        $data['jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS . ' as mj', 'mj.*,(select name from ' . TABLES::$STATES . ' where id=mj.state) as state_name', array('service_category' => 'Building Services'), 'id desc', '5');
        $this->load->view('building_services/healthcare_building_cleaning', $data);
    }
    public function windowCleaning() {
        $data['global_setting'] = $this->global_setting;
        $data['jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS . ' as mj', 'mj.*,(select name from ' . TABLES::$STATES . ' where id=mj.state) as state_name', array('service_category' => 'Building Services'), 'id desc', '5');
        $this->load->view('building_services/window_cleaning', $data);
    }
    public function retailBuilding() {
        $data['global_setting'] = $this->global_setting;
        $data['jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS . ' as mj', 'mj.*,(select name from ' . TABLES::$STATES . ' where id=mj.state) as state_name', array('service_category' => 'Building Services'), 'id desc', '5');
        $this->load->view('building_services/retail_building', $data);
    }
    public function religiousBuilding() {
        $data['global_setting'] = $this->global_setting;
        $data['jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS . ' as mj', 'mj.*,(select name from ' . TABLES::$STATES . ' where id=mj.state) as state_name', array('service_category' => 'Building Services'), 'id desc', '5');
        $this->load->view('building_services/religious_building', $data);
    }
    public function industrialBuilding() {
        $data['global_setting'] = $this->global_setting;
        $data['jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS . ' as mj', 'mj.*,(select name from ' . TABLES::$STATES . ' where id=mj.state) as state_name', array('service_category' => 'Building Services'), 'id desc', '5');
        $this->load->view('building_services/industrial_building', $data);
    }
    public function escalatorCleaning() {
        $data['global_setting'] = $this->global_setting;
        $data['jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS . ' as mj', 'mj.*,(select name from ' . TABLES::$STATES . ' where id=mj.state) as state_name', array('service_category' => 'Building Services'), 'id desc', '5');
        $this->load->view('building_services/escalator_cleaning', $data);
    }
    public function concretePolishing() {
        $data['global_setting'] = $this->global_setting;
        $data['jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS . ' as mj', 'mj.*,(select name from ' . TABLES::$STATES . ' where id=mj.state) as state_name', array('service_category' => 'Building Services'), 'id desc', '5');
        $this->load->view('building_services/concrete-polishing', $data);
    }
	
	 public function sportAreaCleaning() {
        $data['global_setting'] = $this->global_setting;
        $data['jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS . ' as mj', 'mj.*,(select name from ' . TABLES::$STATES . ' where id=mj.state) as state_name', array('service_category' => 'Building Services'), 'id desc', '5');
        $this->load->view('building_services/sportarea_cleaning', $data);
    }

    public function loadMoreJobs() {
        if (isset($_POST['page'])):
            $paged = $_POST['page'];
            $resultsPerPage = 5;
            $sql = "SELECT mj.*, (select name from " . TABLES::$STATES . " where id=mj.state) as state_name FROM " . TABLES::$MST_JOBS . " as mj where mj.service_category= 'Building Services' ORDER BY `id` DESC";

            if ($paged > 0) {
                $page_limit = $resultsPerPage * ($paged - 1);
                $pagination_sql = " LIMIT  $page_limit, $resultsPerPage";
            } else {
                $pagination_sql = " LIMIT 0 , $resultsPerPage";
            }

            $query = $this->db->query($sql . $pagination_sql);
//            echo $this->db->last_query();
            if ($query->num_rows() > 0) {
                foreach ($query->result_array() as $job) {
                    ?>
                    <div class="list-data">
                        <header>
                            <div class="row">
                                <div class="col-md-1 col-sm-2 hidden-xs">
                                    <div class="company-logo">
                                        <a href="<?php echo base_url() . "building-services/job-details/" . $job['id'] ?>"><img src="<?php echo base_url() ?>media/landing-pages/building-services/wp-content/plugins/simple-job-board/public/images/company.png" alt="" class="sjb-img-responsive " id=""/></a>
                                    </div>
                                </div>
                                <div class="col-md-11 col-sm-10 header-margin-top">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="job-info">
                                                <h4>
                                                    <a href="<?php echo base_url() . "building-services/job-details/" . $job['id'] ?>">
                                                        <span class="job-title"><?php echo $job['job_title'] ?></span> 
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <div class="job-location"><i class="fa fa-map-marker"></i><?php echo $job['state_name'] ?></div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                        </div>
                                        <div class="col-md-3 col-sm-4 col-xs-12">
                                            <div class="job-date"><i class="fa fa-calendar-check-o"></i><?php echo date("F d, Y", strtotime($job['created_time'])) ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>


                        <!-- Start Job Short Description 
                    ================================================== -->
                        <div class="job-description">
                            <p><?php echo $job['short_desc'] ?></p>
                            <p><a href="<?php echo base_url() . "building-services/job-details/" . $job['id'] ?>" class="btn btn-primary">Read More</a>
                            </p>
                        </div>
                    </div>


                    <?php
                }
            }
            if ($query->num_rows() == $resultsPerPage) {
                ?>

                <div style='text-align: center;margin-bottom:50px'><button class="loadmore btn btn-primary btn_with_icon btn-effect" data-page="<?php echo $paged + 1; ?>">Load More</button></div>
                <?php
            } else {
                echo "<div style='clear:both;margin:20px'></div> <div  class='loadbutton'><h3 style='text-align: center;margin-top: 40px;'>No More Jobs</h3></li>";
            }
        endif;
    }

    public function jobDetails($id) {
        $condition = "id IN (3960,3970,3922,3939,3947)";
        $data['job_id'] = $id;
        $data['states'] = $this->common_model->getRecords(TABLES::$STATES, '*', $condition);
        $data['global_setting'] = $this->global_setting;
        $data['job_detail'] = $this->common_model->getRecords(TABLES::$MST_JOBS . ' as mj', 'mj.*,(select name from ' . TABLES::$STATES . ' where id=mj.state) as state_name', array('id' => $id));
        $this->load->view('building_services/job_details', $data);
    }

    public function submitContactForm() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('contact_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('contact_phone', 'Phone', 'trim|required');
        $this->form_validation->set_rules('contact_email', 'email', 'trim|required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $map ['status'] = '0';
            $map ['msg'] = validation_errors();
            echo json_encode($map);
        } else {
            $user['contact_name'] = $this->input->post('contact_name');
            $user['contact_email'] = $this->input->post('contact_email');
            $user['contact_phone'] = $this->input->post('contact_phone');
            $user['contact_message'] = $this->input->post('contact_message');
            $user['service_category'] = $this->input->post('service_category');
            $user['contact_created_date'] = date("Y-m-d H:i:s");
            $insert = $this->common_model->insertRow($user, TABLES::$MST_CONTACT_US);
            if ($insert) {
                $msg = '<p>Hi Site Admin,</p><p>Below user has asked for free quote on building services.</p><p>Full Name - ' . stripslashes($this->input->post('contact_name')) . '</p><p>Email - ' . stripslashes($this->input->post('contact_email')) . '</p><p>Phone Number - ' . stripslashes($this->input->post('contact_phone')) . '</p><p>Message - ' . stripslashes($this->input->post('contact_message')) . '</p><p>Building Type - ' . stripslashes($this->input->post('building_type')) . '</p></p><p>Address - ' . stripslashes($this->input->post('address')) . '</p> Thanks,<br>Razorclean Inc.';
                $this->common_model->sendEmail($this->global_setting['site_email'], array('email' => $this->input->post('contact_email'), 'name' => 'Razorclean'), 'Request for quote on building services', $msg);
                $map ['status'] = '1';
                $map ['msg'] = "Your message has been sent successfully! We will respond within 24 hours. Thank you!";
                echo json_encode($map);
            }
        }
    }

    public function submitContactForm1() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('contact_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('contact_phone', 'Phone', 'trim|required');
        $this->form_validation->set_rules('contact_email', 'email', 'trim|required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $map ['status'] = '0';
            $map ['msg'] = validation_errors();
            echo json_encode($map);
        } else {
            $user['contact_name'] = $this->input->post('contact_name');
            $user['contact_email'] = $this->input->post('contact_email');
            $user['contact_phone'] = $this->input->post('contact_phone');
            $user['contact_message'] = $this->input->post('contact_message');
            $user['service_category'] = $this->input->post('service_category');
            $user['contact_created_date'] = date("Y-m-d H:i:s");
            $insert = $this->common_model->insertRow($user, TABLES::$MST_CONTACT_US);
            if ($insert) {
                $msg = '<p>Hi Site Admin,</p><p>Below user has contacted on building services.</p><p>Full Name - ' . stripslashes($this->input->post('contact_name')) . '</p><p>Email - ' . stripslashes($this->input->post('contact_email')) . '</p><p>Phone Number - ' . stripslashes($this->input->post('contact_phone')) . '</p><p>Message - ' . stripslashes($this->input->post('contact_message')) . '</p></p> Thanks,<br>Razorclean Inc.';
                $this->common_model->sendEmail($this->global_setting['site_email'], array('email' => $this->input->post('contact_email'), 'name' => 'Razorclean'), 'User contacted on building services', $msg);
                $map ['status'] = '1';
                $map ['msg'] = "Your message has been sent successfully! We will respond within 24 hours. Thank you!";
                echo json_encode($map);
            }
        }
    }

}
