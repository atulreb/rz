<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Testimonial extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("common_model");
        $this->load->model("blog_model");
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
        
//        $this->load->library('form_validation');
    }

    /* Frontend : Manage Blog Start */

    public function testimonialList() {
		if (!$this->common_model->isLoggedIn()) {
            redirect(base_url()."login");
        }
        $data['global'] = $this->common_model->getGlobalSettings();
        $data = $this->common_model->commonFunction();
        $data['user_session'] = $this->session->userdata('user_account');
        #START Action :: Fetch all active Blog added by admin :   
        $data['testi_data'] = $this->common_model->getRecords(TABLES::$MST_TESTIMONIAL, '*', '', 'id desc');
        $this->template->set('global', $data['global']);
        $this->template->set('page', 'testimonial_list');
        $this->template->set('testimonial_list', $data['testi_data']);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Testimonials')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', 'partials/sidebar')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('testimonials/testimonial_list');
    }

    /* function to change Blog Status */

    public function changeStatus() {
        if ($this->input->post('post_id') != "") {
            #updating the user status.
            $arr_to_update = array(
                "status" => $this->input->post('post_status')
            );
            #condition to update record	for the user status
            $condition_array = array('id' => intval($this->input->post('post_id')));
            $this->common_model->updateRow(TABLES::$MST_TESTIMONIAL, $arr_to_update, $condition_array);
            echo json_encode(array("error" => "0", "error_message" => "Status has changed successflly."));
        } else {
            #if something going wrong providing error message. 
            echo json_encode(array("error" => "1", "error_message" => "Sorry, your request can not be fulfilled this time. Please try again later"));
        }
    }

    /* Function to add and update blog post start */

    public function addTestimonial($id = '') {
		if (!$this->common_model->isLoggedIn()) {
            redirect(base_url()."login");
        }
        $this->load->model("common_model");

        if (!$this->common_model->isLoggedIn()) {
            redirect(base_url() . "admin/login");
        }

        $data = $this->common_model->commonFunction();

        $post_title = $this->input->post("inputName");

        if ($post_title != "") {

            $edit_id = $this->input->post("edit_id");
            if ($edit_id != "") {

                if ($_FILES['img_file']['name'] != '') {
                    $_FILES['img_file']['name'];
                    $_FILES['img_file']['type'];
                    $_FILES['img_file']['tmp_name'];
                    $_FILES['img_file']['error'];
                    $_FILES['img_file']['size'];
                    $config['file_name'] = time() . rand();
                    $config['upload_path'] = 'uploads/testimonial_users';
                    $config['allowed_types'] = 'jpg|jpeg|gif|png';
                    $config['max_size'] = '9000000';
                    $old_image = $this->input->post("old_img_file");
                    @unlink('uploads/testimonial_users/' . $old_image);
                    @unlink('uploads/testimonial_users/50x50/' . $old_image);
                    $this->load->library('upload');
                    $this->upload->initialize($config);
                    if ($this->upload->do_upload('img_file')) {
                        $data = $this->upload->data();
                        $ar = list($width, $height) = getimagesize($data['full_path']);
                        $upload_result = $this->upload->data();

                        /* for image  670x470 */
                        $image_config2 = array(
                            'source_image' => $upload_result['full_path'],
                            'new_image' => FCPATH . "uploads/testimonial_users/50x50/",
                            'maintain_ratio' => false,
                            'width' => 50,
                            'height' => 50
                        );

                        $this->load->library('image_lib');
                        $this->image_lib->initialize($image_config2);
                        $resize_rc2 = $this->image_lib->resize();
                        $img_path = $upload_result['file_name'];
                    } else {
                        $error = array('error' => $this->upload->display_errors());
                    }
                } else {
                    $img_path = $this->input->post('old_img_file');
                }
                $update_data = array(
                    "client_name" => $this->input->post('inputName'),
                    "service" => $this->input->post('service'),
                    "client_image" => $img_path,
                    'description' => $this->input->post('inputPostDescription'),
                    'updated_by' => $data['user_account']['user_id'],
                    'updated_time' => date("Y-m-d H:i:s"),
                    'status' => $this->input->post('status'),
                    'is_featured' => $this->input->post('is_featured')
                );
                $condition = array("id" => $edit_id);
                $this->common_model->updateRow(TABLES::$MST_TESTIMONIAL, $update_data, $condition);
                $this->session->set_userdata("msg", "<span class='success'>Testimonial updated successfully!</span>");
                redirect(base_url() . "admin/testimonial-list");
            } else {

                if ($_FILES['img_file']['name'] != '') {
                    $_FILES['img_file']['name'];
                    $_FILES['img_file']['type'];
                    $_FILES['img_file']['tmp_name'];
                    $_FILES['img_file']['error'];
                    $_FILES['img_file']['size'];
                    $config['file_name'] = time() . rand();
                    $config['upload_path'] = FCPATH . 'uploads/testimonial_users/';
                    $config['allowed_types'] = 'jpg|jpeg|gif|png';
                    $config['max_size'] = '9000000';
                    $this->load->library('upload');
                    $this->upload->initialize($config);

                    if ($this->upload->do_upload('img_file')) {
                        $data['upload_data'] = $this->upload->data();
                        $ar = list($width, $height) = getimagesize($data['full_path']);
                        $upload_result = $this->upload->data();


                        /* for image  670x470 */
                        $image_config2 = array(
                            'source_image' => $upload_result['full_path'],
                            'new_image' => FCPATH . "uploads/testimonial_users/50x50/",
                            'maintain_ratio' => false,
                            'width' => 50,
                            'height' => 50
                        );

                        $this->load->library('image_lib');
                        $this->image_lib->initialize($image_config2);
                        $resize_rc2 = $this->image_lib->resize();


                        $img_path = $upload_result['file_name'];
                    } else {
                        $error = array('error' => $this->upload->display_errors());
                    }
                    $arr_post_data = array(
                        "client_name" => $this->input->post('inputName'),
                        "service" => $this->input->post('service'),
                        "client_image" => $img_path,
                        'description' => $this->input->post('inputPostDescription'),
                        'created_by' => $data['user_account']['user_id'],
                        'created_time' => date("Y-m-d H:i:s"),
                        'status' => $this->input->post('status'),
                        'is_featured' => $this->input->post('is_featured')
                    );
                    $new_post_id = $this->common_model->insertRow($arr_post_data, TABLES::$MST_TESTIMONIAL);
                }
            }
            $this->session->set_userdata("msg", "<span class='success'>Testimonial added successfully!</span>");
            redirect(base_url() . "admin/testimonial-list");
        }

        $data["post_id"] = $id;
        $arr_post_info = $this->common_model->getRecords(TABLES::$MST_TESTIMONIAL, "*", array("id" => $id));
        if ($id != '') {
            $this->template->set('post_id', $id);
            $data["title"] = "Update Testimonial";
        } else {
            $data["title"] = "Add Testimonial";
        }
        if (!empty($arr_post_info[0])) {
            $data["post_info"] = $arr_post_info[0];
            $this->template->set('post_info', $data["post_info"]);
        }
        $data['arr_active_admin_details'] = $this->common_model->getRecords(TABLES::$ADMIN_USER, '', array('id' => '1'));
        if ($id != '') {
            $data['main'] = 'testimonial_edit';
        } else {
            $data['main'] = 'testimonial_add';
        }


        $this->template->set('page', 'add_testimonial');


        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | ' . $data["title"])
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', 'partials/sidebar')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('testimonials/' . $data['main']);
    }

    public function delete_post() {
        $post_id = $this->input->post("post_id");
        $post_ids[] = $this->input->post("post_ids");
        if ($post_id != "") {
            $this->blog_model->deleteBlogPost($post_id);
            $this->blog_model->deleteTransBlogPost($post_id);
        } elseif ($post_ids != "") {
            foreach ($post_ids as $post_id) {
                $this->common_model->deleteRows($post_id, "mst_blog_posts", "post_id");
                $this->common_model->deleteRows($post_id, "trans_blog_posts", "post_id");
            }
        }
        $this->session->set_userdata("msg", "<span class='error'>Blog deleted successfully.</span>");
        echo json_encode(array("msg" => "success", "error" => "0"));
    }

    /* Backend : Manage Blog End */

    public function submitTestimonial() {
        $this->load->library('form_validation');
        $session_data = $this->session->userdata();
        if (isset($session_data['user_account']['user_id']) && $session_data['user_account']['user_id'] != '') {
            $userid = $session_data['user_account']['user_id'];
        } else {
            $userid = NULL;
        }
        $this->form_validation->set_rules('client_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('service', 'Service', 'trim|required');
        $this->form_validation->set_rules('comment', 'Comment', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $map ['status'] = '0';
            $map ['msg'] = validation_errors();
            echo json_encode($map);
            exit;
        } else {
            $data = array(
                "client_name" => $this->input->post('client_name'),
                "service" => $this->input->post('service'),
                'description' => $this->input->post('comment'),
                'created_by' => $userid,
                'created_time' => date("Y-m-d H:i:s"),
                'is_active' => '0',
                'is_featured' => '0'
            );
            $uid = $this->common_model->insertRow($data, TABLES::$MST_TESTIMONIAL);
            if ($uid) {
                $map ['status'] = '1';
                $map ['msg'] = "Comment submitted successfully.";
                echo json_encode($map);
            }
        }
    }
    public function userSubmitTestimonial() {
		if (!$this->common_model->isLoggedIn()) {
            redirect(base_url()."login");
        }
        $session_data = $this->session->userdata();
        if(count($_POST) > 0 ){
       
            $data = array(
                "client_name" => $session_data['user_account']['fname']." ".$session_data['user_account']['lname'] ,
                "service" => $this->input->post('service'),
                'description' => $this->input->post('description'),
                'created_by' => $session_data['user_account']['user_id'],
                'created_time' => date("Y-m-d H:i:s"),
                'is_featured' => '0'
            );
            $uid = $this->common_model->insertRow($data, TABLES::$MST_TESTIMONIAL);
            if ($uid) {
                $this->session->set_userdata('msg','Testimonial Submitted successfully. Wait for the moderation.');
                redirect(base_url().'user/testimonials');
            }
        }
        $this->template->set('page','submit-testimonial');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Submit Testimonial')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('user/submit_testimonial');
        
        
    }
    
    public function userTestimonials() {
        $data['global'] = $this->common_model->getGlobalSettings();
        $data = $this->common_model->commonFunction();
        $data['user_session'] = $this->session->userdata('user_account');
        #START Action :: Fetch all active Blog added by admin :   
        $data['testi_data'] = $this->common_model->getRecords(TABLES::$MST_TESTIMONIAL, '*', array('created_by'=>$data['user_session']['user_id']), 'id desc');
        $this->template->set('global', $data['global']);
        $this->template->set('page', 'testimonial_list');
        $this->template->set('testimonial_list', $data['testi_data']);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | Testimonials')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('user/testimonial_list');
    }

     public function loadMoreTestimonials() {
        if (isset($_POST['page'])):
           // print_r($_POST);
            $paged = $_POST['page'];
            $resultsPerPage = 3;
            $sql = "SELECT * FROM " . TABLES::$MST_TESTIMONIAL . " where status='1' and service='".$_POST['service']."' ORDER BY `id` DESC";
            if ($paged > 0) {
                $page_limit = $resultsPerPage * ($paged - 1);
                $pagination_sql = " LIMIT  $page_limit,$resultsPerPage";
            } else {
                $pagination_sql = " LIMIT 0 , $resultsPerPage";
            }
            $sql . $pagination_sql;
            $query = $this->db->query($sql . $pagination_sql);
            if ($query->num_rows() > 0) {
                foreach ($query->result_array() as $data) {
                    ?>
                    <div class="col-md-4 col-sm-6 Border_Grid">
                        <div class="testimonials">
                            <div class="active item">
                                <blockquote><p><?php echo substr($data['description'], '0', '150'); ?></p></blockquote>
                                <div class="carousel-info">
                                    <img alt="" src="<?php
                                    if ($data['client_image'] != NULL && file_exists(FCPATH . "uploads/testimonial_users/" . $data['client_image'])) {
                                        echo base_url() . "uploads/testimonial_users/" . $data['client_image'];
                                    } else {
                                        echo base_url() . "uploads/testimonial_users/default-avatar.jpg";
                                    }
                                    ?>" class="pull-left">
                                    <div class="pull-left">
                                        <span class="testimonials-name"><?php echo $data['client_name']; ?></span>
                                        <!--<span class="testimonials-post">Commercial Director</span>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                }
            }
            if ($query->num_rows() == $resultsPerPage) {
                ?>
                
                <div style='clear:both;margin:20px'></div><div style='text-align: center;'><button class="loadmore" data-service="<?php echo $_POST['service']?>" data-page="<?php echo $paged + 1; ?>">Load More</button></div>
                <?php
            } else {
                echo "<div style='clear:both;margin:20px'></div> <div  class='loadbutton'><h3 style='text-align: center;margin-top: 40px;'>No More Testimonials</h3></li>";
            }
        endif;
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
