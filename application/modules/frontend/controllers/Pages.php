<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('common_model');
        $this->global_setting = $this->common_model->getGlobalSettings();
    }

    /**
     * code for call homepage
     */
    public function Home()
    {
        $this->template->set('global_setting', $this->global_setting);
        $testimonial_data = $this->common_model->getRecords(TABLES::$MST_TESTIMONIAL,'*',array('status'=>'1'));
        $job_data = $this->common_model->getRecords(TABLES::$MST_JOBS,'*',array('status'=>'1'));
        $condition  = "id IN (3960,3970,3922,3939,3947,3919,3974,3930,3931,3938,3957,3966,3969,3976)";
        $states = $this->common_model->getRecords(TABLES::$STATES,'*',$condition);
        $this->template->set('testimonial_data', $testimonial_data);
        $this->template->set('states', $states);
        $this->template->set('testimonial_data', $testimonial_data);
        $this->template->set('job_data', $job_data);
        $this->template->set('global', $this->global_setting);
        $this->template->set('page', 'home');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('frontend')
                ->title($this->global_setting['site_title'] . ' | Home')
                ->set_partial('header', 'partials/header')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('frontpages/homepage');
    }
	
	
	
	/**
     * code for call homepage
     */
    public function test_home()
    {
        $this->template->set('global_setting', $this->global_setting);
        $testimonial_data = $this->common_model->getRecords(TABLES::$MST_TESTIMONIAL,'*',array('status'=>'1'));
        $job_data = $this->common_model->getRecords(TABLES::$MST_JOBS,'*',array('status'=>'1'));
        $condition  = "id IN (3960,3970,3922,3939,3947,3919,3974,3930,3931,3938,3957,3966,3969,3976)";
        $states = $this->common_model->getRecords(TABLES::$STATES,'*',$condition);
        $this->template->set('testimonial_data', $testimonial_data);
        $this->template->set('states', $states);
        $this->template->set('testimonial_data', $testimonial_data);
        $this->template->set('job_data', $job_data);
        $this->template->set('global', $this->global_setting);
        $this->template->set('page', 'home');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('frontend')
                ->title($this->global_setting['site_title'] . ' | Home')
                ->set_partial('header', 'partials/header')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('frontpages/test-home');
    }
	

    /**
     * code for call contact us page
     */
    public function contactUs()
    {
        $this->template->set('global', $this->global_setting);
        $this->template->set('global_setting', $this->global_setting);
        $this->template->set('page', 'contact');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('frontend')
                ->title($this->global_setting['site_title'] . ' | Contact Us')
                ->set_partial('header', 'partials/header')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('frontpages/contact_us');
    }
    /**
     * code for call about us page
     */
    public function aboutUs()
    {
        $this->template->set('global', $this->global_setting);
        $this->template->set('global_setting', $this->global_setting);
        $this->template->set('page', 'contact');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('frontend')
                ->title($this->global_setting['site_title'] . ' | About Us')
                ->set_partial('header', 'partials/header')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('frontpages/about_us');
    }
    /**
     * code for call about us page
     */
    public function testimonials()
    {
        $this->template->set('global', $this->global_setting);
        $this->template->set('global_setting', $this->global_setting);
        $testimonial_data = $this->common_model->getRecords(TABLES::$MST_TESTIMONIAL,'*',array('status'=>'1'));
        $this->template->set('page', 'testimonial');
        $this->template->set('testimonial_data', $testimonial_data);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('frontend')
                ->title($this->global_setting['site_title'] . ' | Testimonials')
                ->set_partial('header', 'partials/header')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('frontpages/testimonials');
    }
    /**
     * code for call about us page
     */
    public function testimonialsDetail($service)
    {
        $this->template->set('global', $this->global_setting);
        $resultsPerPage = 3;
        $this->template->set('global_setting', $this->global_setting);
        $testimonial_data = $this->common_model->getRecords(TABLES::$MST_TESTIMONIAL,'*',array('status'=>'1','is_featured'=>'1'));
        $testimonial_data1 = $this->common_model->getRecords(TABLES::$MST_TESTIMONIAL,'*',array('status'=>'1','service'=>urldecode($service)),'id desc',$resultsPerPage);
        $this->template->set('testimonial_data', $testimonial_data);
        $this->template->set('testimonial_data1', $testimonial_data1);
        $this->template->set('page', 'testimonial_details');
        $this->template->set('service', $service);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('frontend')
                ->title($this->global_setting['site_title'] . ' | Testimonials')
                ->set_partial('header', 'partials/header')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('frontpages/testimonials_detail');
    }
    /**
     * code for call brna dservices page
     */
    public function brandServices()
    {
        $this->template->set('global', $this->global_setting);
        $this->template->set('global_setting', $this->global_setting);
        $this->template->set('page', 'contact');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('frontend')
                ->title($this->global_setting['site_title'] . ' | Brand Services')
                ->set_partial('header', 'partials/header')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('frontpages/brand_services');
    }

    /**
     * code for call terms and conditions
     */
    public function termsAndConditions()
    {
        $this->template->set('global', $this->global_setting);
        $this->template->set('global_setting', $this->global_setting);
        $this->template->set('page', 'terms_and_condition');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('frontend')
                ->title($this->global_setting['site_title'] . ' | Terms and Conditions')
                ->set_partial('header', 'partials/header')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('frontpages/terms_and_conditions');
    }

    /**
     * code for call privacy policy
     */
    public function privacyPolicy()
    {
        $this->template->set('global', $this->global_setting);
        $this->template->set('global_setting', $this->global_setting);
        $this->template->set('page', 'privacy_policy');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('frontend')
                ->title($this->global_setting['site_title'] . ' | Privacy Policy')
                ->set_partial('header', 'partials/header')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('frontpages/privacy_policy');
    }

    /**
     * code for call FAQ
     */
    public function faq()
    {
        $blogs = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS,'',array('status'=>'1'),'post_id desc','3');
        $this->template->set('blogs', $blogs);
        $this->template->set('global', $this->global_setting);
        $this->template->set('global_setting', $this->global_setting);
        $this->template->set('page', 'faq');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('frontend')
                ->title($this->global_setting['site_title'] . ' | FAQ')
                ->set_partial('header', 'partials/header')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('frontpages/faq');
    }

    /**
     * code for call FAQ
     */
    public function calendar()
    {
        $this->template->set('global', $this->global_setting);
        $event_list = $this->common_model->getRecords(TABLES::$MST_EVENTS, 'id,event_name as title,', '', 'id desc');
        $this->template->set('global_setting', $this->global_setting);
        $this->template->set('event_list', $event_list);
        $this->template->set('page', 'calendar');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('frontend')
                ->title($this->global_setting['site_title'] . ' | Calendar')
                ->set_partial('header', 'partials/header')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('frontpages/calendar');
    }
    
    /**
     * code for call partner with us page
     */
    public function partnerWithUs($stateid = "")
    {
        $this->template->set('global', $this->global_setting);
        $event_list = $this->common_model->getRecords(TABLES::$MST_EVENTS, 'id,event_name as title,', '', 'id desc');
        $this->template->set('global_setting', $this->global_setting);
        $this->template->set('event_list', $event_list);
        $condition  = "id IN (3960,3970,3922,3939,3947,3919,3974,3930,3931,3938,3957,3966,3969,3976)";
        $states = $this->common_model->getRecords(TABLES::$STATES,'*',$condition);
        $this->template->set('states', $states);
        $this->template->set('stateid', $stateid);
        $this->template->set('page', 'calendar');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('frontend')
                ->title($this->global_setting['site_title'] . ' | Calendar')
                ->set_partial('header', 'partials/header')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('frontpages/partner_with_us');
    }
    
    
    public function razorFoundation()
    {
        $this->template->set('global', $this->global_setting);
        $this->template->set('global_setting', $this->global_setting);
        $this->template->set('page', 'razor_foundation');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('landing_page')                
                ->set_partial('header', 'partials/lp_header')
                ->set_partial('footer', 'partials/lp_footer')
                ->title($this->global_setting['site_title'] . ' | Razor Foundation');
        $this->template->build('frontpages/razor_foundation');
    }
    
    /**
     * code for call FAQ
     */
    public function pageNotFound404()
    {
        $this->template->set('global', $this->global_setting);
        $this->template->set('global_setting', $this->global_setting);
        $this->template->set('page', 'faq');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('frontend')
                ->title($this->global_setting['site_title'] . ' | 404 Page Not found')
                ->set_partial('header', 'partials/header')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('frontpages/page_not_found');
    }
    
    public function eventDetail($id){
        $this->template->set('global', $this->global_setting);
        $this->template->set('page', 'event_detail');
        $data['even_details'] = $this->common_model->getRecords(TABLES::$MST_EVENTS, '', array('id' => $id));
        $this->template->set('event_details',$data['even_details'][0]);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('frontend')
                ->title('Razorclean | '.$data['even_details'][0]['event_name'])
                ->set_partial('header', 'partials/header')  
                ->set_partial('footer', 'partials/footer');
        $this->template->build('frontpages/event_details');
    }
    
    
    
    
    

}
