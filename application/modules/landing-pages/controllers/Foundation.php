<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foundation extends CI_Controller {

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
        $data['page'] = 'Towing';
        $data['testi_data'] = $this->getTestimonialData('Towing');
        $condition = "id IN (3960,3970,3922,3939,3947)";
        $data['states'] = $this->common_model->getRecords(TABLES::$STATES, '*', $condition);
        $data['jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '', array('service_category' => $data['page']), 'id desc', $this->resultsPerpage);
        $data['blogs'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('service_category' => $data['page'], 'status' => '1'), 'post_id desc', 3);
        $this->load->view('foundation/index', $data);
    }

    /**
     * code for call shop
     */
    public function poolCleaning() {
        $data['global_setting'] = $this->global_setting;
        $data['page'] = 'Pool Cleaning';
        $data['testi_data'] = $this->getTestimonialData('Pool Cleaning');
        $condition = "id IN (3960,3970,3922,3939,3947)";
        $data['states'] = $this->common_model->getRecords(TABLES::$STATES, '*', $condition);
        $data['blogs'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('service_category' => $data['page'], 'status' => '1'), 'post_id desc', 3);
        $data['jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '', array('service_category' => $data['page']), 'id desc', $this->resultsPerpage);
        $this->load->view('landing-pages/pool_cleaning', $data);
    }

    public function mobileDetail() {
        $data['global_setting'] = $this->global_setting;
        $data['page'] = 'Mobile Detail';
        $data['testi_data'] = $this->getTestimonialData('Mobile Detail');
        $condition = "id IN (3960,3970,3922,3939,3947)";
        $data['states'] = $this->common_model->getRecords(TABLES::$STATES, '*', $condition);
        $data['blogs'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('service_category' => $data['page'], 'status' => '1'), 'post_id desc', 3);
        $data['jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '', array('service_category' => $data['page']), 'id desc', $this->resultsPerpage);
        $this->load->view('landing-pages/mobile_detail', $data);
    }

    public function lawnCare() {
        $data['global_setting'] = $this->global_setting;
        $data['page'] = 'Lawn Care';
        $data['testi_data'] = $this->getTestimonialData('Lawn Care');
        $condition = "id IN (3960,3970,3922,3939,3947)";
        $data['states'] = $this->common_model->getRecords(TABLES::$STATES, '*', $condition);
        $data['blogs'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('service_category' => $data['page'], 'status' => '1'), 'post_id desc', 3);
        $data['jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '', array('service_category' => $data['page']), 'id desc', $this->resultsPerpage);
        $this->load->view('landing-pages/lawn_care', $data);
    }

    public function houseKeepers() {
        $data['global_setting'] = $this->global_setting;
        $data['page'] = 'Housekeepers';
        $data['testi_data'] = $this->getTestimonialData('Housekeepers');
        $condition = "id IN (3960,3970,3922,3939,3947)";
        $data['states'] = $this->common_model->getRecords(TABLES::$STATES, '*', $condition);
        $data['blogs'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('service_category' => $data['page'], 'status' => '1'), 'post_id desc', 3);
        $data['jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '', array('service_category' => $data['page']), 'id desc', $this->resultsPerpage);
        $this->load->view('landing-pages/housekeepers', $data);
    }

    public function buildingServices() {
        $data['global_setting'] = $this->global_setting;
        $data['page'] = 'Building Services';
        $data['testi_data'] = $this->getTestimonialData('Building Services');
        $condition = "id IN (3960,3970,3922,3939,3947)";
        $data['states'] = $this->common_model->getRecords(TABLES::$STATES, '*', $condition);
        $data['blogs'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('service_category' => $data['page'], 'status' => '1'), 'post_id desc', 3);
        $data['jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '', array('service_category' => $data['page']), 'id desc', $this->resultsPerpage);
        $this->load->view('landing-pages/building-services', $data);
    }

    public function security() {
        $data['global_setting'] = $this->global_setting;
        $data['page'] = 'Security';
        $data['testi_data'] = $this->getTestimonialData('Security');
        $condition = "id IN (3960,3970,3922,3939,3947)";
        $data['states'] = $this->common_model->getRecords(TABLES::$STATES, '*', $condition);
        $data['blogs'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('service_category' => $data['page'], 'status' => '1'), 'post_id desc', 3);
        $data['jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '', array('service_category' => $data['page']), 'id desc', $this->resultsPerpage);
        $this->load->view('landing-pages/security', $data);
    }

    public function handyman() {
        $data['global_setting'] = $this->global_setting;
        $data['page'] = 'Handyman';
        $data['testi_data'] = $this->getTestimonialData('Handyman');
        $condition = "id IN (3960,3970,3922,3939,3947)";
        $data['states'] = $this->common_model->getRecords(TABLES::$STATES, '*', $condition);
        $data['blogs'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('service_category' => $data['page'], 'status' => '1'), 'post_id desc', 3);
        $data['jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '', array('service_category' => $data['page']), 'id desc', $this->resultsPerpage);
        $this->load->view('landing-pages/handyman', $data);
    }

    public function painters() {
        $data['global_setting'] = $this->global_setting;
        $data['page'] = 'Painters';
        $data['testi_data'] = $this->getTestimonialData('Painters');
        $condition = "id IN (3960,3970,3922,3939,3947)";
        $data['states'] = $this->common_model->getRecords(TABLES::$STATES, '*', $condition);
        $data['blogs'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('service_category' => $data['page'], 'status' => '1'), 'post_id desc', 3);
        $data['jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '', array('service_category' => $data['page']), 'id desc', $this->resultsPerpage);
        $this->load->view('landing-pages/painters', $data);
    }

    public function pestControl() {
        $data['global_setting'] = $this->global_setting;
        $data['page'] = 'Pest Control';
        $data['testi_data'] = $this->getTestimonialData('Pest Control');
        $condition = "id IN (3960,3970,3922,3939,3947)";
        $data['states'] = $this->common_model->getRecords(TABLES::$STATES, '*', $condition);
        $data['blogs'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('service_category' => $data['page'], 'status' => '1'), 'post_id desc', 3);
        $data['jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '', array('service_category' => $data['page']), 'id desc', $this->resultsPerpage);
        $this->load->view('landing-pages/pest-control', $data);
    }
    
     public function foundation() {
        $data['global_setting'] = $this->global_setting;
        $data['page'] = 'Pest Control';
        $data['testi_data'] = $this->getTestimonialData('Foundation');
        $condition = "id IN (3960,3970,3922,3939,3947)";
        $data['states'] = $this->common_model->getRecords(TABLES::$STATES, '*', $condition);
        $data['blogs'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('service_category' => $data['page'], 'status' => '1'), 'post_id desc', 3);
        $data['jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '', array('service_category' => $data['page']), 'id desc', $this->resultsPerpage);
        $this->load->view('landing-pages/foundation', $data);
    }

    public function loadMoreJobs() {
        if (isset($_POST['page'])):
            $paged = $_POST['page'];
            $resultsPerPage = 2;
            $sql = "SELECT * FROM " . TABLES::$MST_JOBS . " where service_category= '" . $this->input->post('service_type') . "' ORDER BY `id` DESC";
            if ($paged > 0) {
                $page_limit = $resultsPerPage * ($paged - 1);
                $pagination_sql = " LIMIT  $page_limit, $resultsPerPage";
            } else {
                $pagination_sql = " LIMIT 0 , $resultsPerPage";
            }

            $query = $this->db->query($sql . $pagination_sql);
            if ($query->num_rows() > 0) {
                foreach ($query->result_array() as $data) {
                    ?>
                    <div class="col-md-6">
                        <article class="post post_mod-c clearfix">
                            <div class="entry-media">
                                <img class="img-responsive" src="<?php echo base_url() ?>media/landing-pages/towing/assets/media/posts/220x130/4.jpg" height="130" width="220" alt="Foto">
                            </div>
                            <div class="entry-main">
                                <h3 class="entry-title ui-title-inner">
                                    <a href="javascript:;" onclick="applyJob(<?php echo $data['id'] ?>)"><?php echo $data['job_title'] ?></a>
                                </h3>
                                <div class="border-decor border-decor_mod-b"></div>
                                <div class="entry-content">
                                    <p><?php echo $data['short_desc'] ?></p>
                                </div>
                            </div>
                        </article>
                        <!-- end post -->
                    </div>

                    <?php
                }
            }
            if ($query->num_rows() == $resultsPerPage) {
                ?>

                <div style='text-align: center;'><button class="loadmore btn btn-primary btn_with_icon btn-effect" data-page="<?php echo $paged + 1; ?>">Load More</button></div>
                <?php
            } else {
                echo "<div style='clear:both;margin:20px'></div> <div  class='loadbutton'><h3 style='text-align: center;margin-top: 40px;'>No More Jobs</h3></li>";
            }
        endif;
    }

    public function getTestimonialData($servicetype) {
        return $this->common_model->getRecords(TABLES::$MST_TESTIMONIAL, '*', array('service' => $servicetype), 'id desc');
    }

}
