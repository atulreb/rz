<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Staffing extends CI_Controller {

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
        $data['latest_blog'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('status' => '1','service_category'=>'Staffing'),'','2');
		$data['footer_blog'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('status' => '1','service_category'=>'Staffing'),'','4');
		$data['footer_jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '', array('service_category' => 'Staffing'), 'id desc', '3');

        $this->load->view('staffing/index', $data);
    }

	
	public function aboutUs() {
        $data['global_setting'] = $this->global_setting;
		$data['footer_blog'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('status' => '1','service_category'=>'Staffing'),'','4');
        $data['page'] = 'Towing';
        $data['footer_jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '', array('service_category' => 'Staffing'), 'id desc', '3');
        $this->load->view('staffing/aboutus', $data);
    }
	
public function MeetTeam() {
        $data['global_setting'] = $this->global_setting;
        $data['page'] = 'Towing';
		$data['footer_jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '', array('service_category' => 'Staffing'), 'id desc', '3');
        $data['footer_blog'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('status' => '1','service_category'=>'Staffing'),'','4');
        $this->load->view('staffing/meet-the-team', $data);
    }
	
	public function contact() {
        $data['global_setting'] = $this->global_setting;
        $data['page'] = 'Towing';
		$data['footer_jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '', array('service_category' => 'Staffing'), 'id desc', '3');
        $data['footer_blog'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('status' => '1','service_category'=>'Staffing'),'','4');
        $this->load->view('staffing/contact', $data);
    }
	public function jobSeeker() {
        $data['global_setting'] = $this->global_setting;
        $data['page'] = 'Towing';
		$data['footer_jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '', array('service_category' => 'Staffing'), 'id desc', '3');
        $data['footer_blog'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('status' => '1','service_category'=>'Staffing'),'','4');
        $this->load->view('staffing/jobseeker', $data);
    }
	
	public function opportunities() {
		 $condition  = "id IN (3960,3970,3922,3939,3947,3919,3974,3930,3931,3938,3957,3966,3969,3976)";
        $states = $this->common_model->getRecords(TABLES::$STATES,'*',$condition);
        $data['states'] = $states;
        $data['global_setting'] = $this->global_setting;
        $data['page'] = 'Towing';
		$data['footer_jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '', array('service_category' => 'Staffing'), 'id desc', '3');
		$data['jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '','', 'id desc');
        $data['footer_blog'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('status' => '1','service_category'=>'Staffing'),'','4');
        $this->load->view('staffing/opportunities', $data);
    }
	public function employers() {
        $data['global_setting'] = $this->global_setting;
        $data['page'] = 'Towing';
		$data['footer_jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '', array('service_category' => 'Staffing'), 'id desc', '3');
        $data['footer_blog'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('status' => '1','service_category'=>'Staffing'),'','4');
        $this->load->view('staffing/employers', $data);
    }
	public function workForceSolutions() {
        $data['global_setting'] = $this->global_setting;
        $data['page'] = 'Towing';  
		$data['footer_jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '', array('service_category' => 'Staffing'), 'id desc', '3');
		$data['footer_blog'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('status' => '1','service_category'=>'Staffing'),'','4');		
        $this->load->view('staffing/workforce_solutions', $data);
    }
	public function workForceTools() {
        $data['global_setting'] = $this->global_setting;
        $data['page'] = 'Towing';  
		$data['footer_jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '', array('service_category' => 'Staffing'), 'id desc', '3');
		$data['footer_blog'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('status' => '1','service_category'=>'Staffing'),'','4');		
        $this->load->view('staffing/workforce_tools', $data);
    }
	public function recruitmentProcess() {
        $data['global_setting'] = $this->global_setting;
        $data['page'] = 'Towing';  
		$data['footer_jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '', array('service_category' => 'Staffing'), 'id desc', '3');		
		$data['footer_blog'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('status' => '1','service_category'=>'Staffing'),'','4');		
        $this->load->view('staffing/recruitment_process', $data);
    }
	public function privacyPolicy() {
        $data['global_setting'] = $this->global_setting;
        $data['page'] = 'Towing';     
		$data['footer_jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '', array('service_category' => 'Staffing'), 'id desc', '3');
		$data['footer_blog'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('status' => '1','service_category'=>'Staffing'),'','4');		
        $this->load->view('staffing/privacy-policy', $data);
    }
	
	public function blog($pg="") {
        $this->load->model('blog_model');
        $data['global_setting'] = $this->global_setting;
        $data['arr_blog_data'] = $this->blog_model->getAllActiveBlogListByService('Staffing', $limit = '', $offset = '');
        foreach ($data["arr_blog_data"] as $key => $value) {
            $data['arr_blog_data'][$key]['user_details'] = $this->common_model->getRecords(TABLES::$ADMIN_USER, '*', array('id' => $value['posted_by']));
            $data['arr_blog_data'][$key]['comment'] = $this->common_model->getRecords(TABLES::$TRANS_BLOG_COMMENTS, 'comment_id', array('post_id' => $value['post_id'], 'status' => '1'));
        }
        $totalrows = count($data['arr_blog_data']);
        #Start:: pagination 
        #load pagination library                            
        $this->load->library('pagination');
        $config['base_url'] = base_url() . "staffing/blog/";
        $config['total_rows'] = $totalrows;
        $config['per_page'] = 10;
        $config['prev_link'] = "<span><<</span>";
        $config['next_link'] = "<span>>></span>";
        $config['cur_page'] = $pg;
        $config['num_links'] = 6;
        $config['first_link'] = FALSE;
        $config['last_link'] = FALSE;
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><span  href="javascript:void(0);">';
        $config['cur_tag_close'] = '</span></li>';
        if ($pg == "") {
            $pg1 = "";
        } else {
            $pg1 = $pg ;
        }
        $from = intval(($pg1));
        if ($config['per_page'] == 1) {
            $lenth = 1;
        } else {
            $lenth = intval($config['per_page']);
        }
        $this->pagination->initialize($config);
        $data['pg_link'] = $this->pagination->create_links();
        if ($data['arr_blog_data'] != '') {
            $data['arr_blog_data'] = array_slice($data['arr_blog_data'], $from, $lenth);
        }
		$data['footer_jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '', array('service_category' => 'Staffing'), 'id desc', '3');
		$data['footer_blog'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('status' => '1','service_category'=>'Staffing'),'','4');
        $data['latest_blog'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('status' => '1'),'','5');
        $this->load->view('staffing/blog', $data);
    }
	
	 public function blogDetails($id){
		$data['footer_blog'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('status' => '1','service_category'=>'Staffing'),'','4');
        $data['blog_details'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('slug' => $id, 'status' => '1'));
        $data['global_setting'] = $this->global_setting;
		$data['footer_jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '', array('service_category' => 'Staffing'), 'id desc', '3');
        $this->load->view('staffing/blog-details', $data);
    }
	public function jobDetails($id){		
		$data['footer_blog'] = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS, '*', array('status' => '1','service_category'=>'Staffing'),'','4');
        $data['footer_jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '', array('service_category' => 'Staffing'), 'id desc', '3');
		$data['job_details'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '*', array('id' => $id));
        $data['slider_jobs'] = $this->common_model->getRecords(TABLES::$MST_JOBS, '', array('service_category' => 'Staffing'));
		$data['global_setting'] = $this->global_setting;
        $this->load->view('staffing/job-details', $data);
    }
	
	public function loadMoreJobs() {
        if (isset($_POST['page'])):
            $paged = $_POST['page'];
            $resultsPerPage = 3;
            $sql = "SELECT * FROM " . TABLES::$MST_JOBS . " where service_category= 'Staffing' ORDER BY `id` DESC";
            if ($paged > 0) {
                $page_limit = $resultsPerPage * ($paged - 1);
                $pagination_sql = " LIMIT $page_limit, $resultsPerPage";
            } else {
                $pagination_sql = " LIMIT 0 , $resultsPerPage";
            }

            $query = $this->db->query($sql . $pagination_sql);
			echo $this->db->last_query();
            if ($query->num_rows() > 0) {
                foreach ($query->result_array() as $data) {
                    ?>
                    <li class="portfolio_element span4 portfoliotagfilter-job-opportunities">
							<div class="portfolio_item">
                                    <a href="<?php echo base_url()?>media/landing-pages/staffing/wp-content/uploads/picking-packing-.jpg" class="prettyPhoto slideshow_24135" rel="prettyPhoto"></a>
										<div class="portfolio_thumbnail">
									

            <img width="520" height="337" src="<?php echo base_url()?>media/landing-pages/staffing/wp-content/uploads/picking-packing--520x337.jpg" class="attachment-portfolio size-portfolio wp-post-image" alt="" />
											<div class="portfolio_overlay">
                                    </div>
                                    <div class="center-bar">
                                        <a class="prettyPhotolink icon-search goup" rel="slideshow_24135"></a>
                                    </div>
								</div>
								<div class="portfolio_info">
									<a href="<?php echo base_url()."staffing/job-details/".$data['id']?>"><h5><?php echo $data['job_title']?></h5></a>
                            		<span class="portfolio_category"><a href="javascript:;" rel="tag"><?php echo $data['service_category']?></a></span>
								</div>
							</div>
						</li>

                    <?php
                }
            }else{
				echo "<div style='clear:both;margin:20px'></div> <div  class='loadbutton'><h3 style='text-align: center;margin-top: 40px;'>No More Jobs</h3></div>";
			}
           // if ($query->num_rows() == $resultsPerPage) {
                ?>

                <div style='text-align: center;'><button class="loadmore btn btn-primary btn_with_icon btn-effect" data-page="<?php echo $paged +1; ?>">Load More</button></div>
                <?php
            //} 
        endif;
    }
	

   
}
