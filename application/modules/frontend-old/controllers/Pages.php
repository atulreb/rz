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
        $this->template->set('page', 'home');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('frontend')
                ->title($this->global_setting['site_title'] . ' | Home')
                ->set_partial('header', 'partials/header')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('frontpages/homepage');
    }

    /**
     * code for call contact us page
     */
    public function contactUs()
    {
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
        $this->template->set('global_setting', $this->global_setting);
        $this->template->set('page', 'contact');
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
    public function testimonialsDetail()
    {
        $this->template->set('global_setting', $this->global_setting);
        $this->template->set('page', 'contact');
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
        $this->template->set('global_setting', $this->global_setting);
        $this->template->set('page', 'calendar');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('frontend')
                ->title($this->global_setting['site_title'] . ' | Calendar')
                ->set_partial('header', 'partials/header')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('frontpages/calendar');
    }
    
    /**
     * code for call shop
     */
    public function buildingServices()
    {
        $this->template->set('global_setting', $this->global_setting);
        $this->template->set('page', 'building_services');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('landing_page')              
                ->set_partial('header', 'partials/lp_header')
                ->set_partial('footer', 'partials/lp_footer')         
                ->title($this->global_setting['site_title'] . ' | Building Services');
        $this->template->build('frontpages/building_services');
        
    }
    
    /**
     * code for call shop
     */
    public function houseKeepers()
    {
        $this->template->set('global_setting', $this->global_setting);
        $this->template->set('page', 'house_keepers');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('landing_page')               
                ->set_partial('header', 'partials/lp_header')
                ->set_partial('footer', 'partials/lp_footer')
                ->title($this->global_setting['site_title'] . ' | House keepers');
        $this->template->build('frontpages/housekeepers');
    }
    /**
     * code for call shop
     */
    public function razorFoundation()
    {
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
     * code for call shop
     */
    public function towing()
    {
        $blogs = $this->common_model->getRecords(TABLES::$MST_BLOG_POSTS,'*',array('status'=>'1'));
       
        $this->template->set('global_setting', $this->global_setting);
        $this->template->set('blogs', $blogs);
        $this->template->set('page', 'towing');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('landing_page')                
                ->set_partial('header', 'partials/lp_header')
                ->set_partial('footer', 'partials/lp_footer')
                ->title($this->global_setting['site_title'] . ' | Building Services');
        $this->template->build('frontpages/towing');
    }
    
    /**
     * code for call FAQ
     */
    public function pageNotFound404()
    {
        $this->template->set('global_setting', $this->global_setting);
        $this->template->set('page', 'faq');
        $this->template->set_theme('default_theme');
        $this->template->set_layout('frontend')
                ->title($this->global_setting['site_title'] . ' | 404 Page Not found')
                ->set_partial('header', 'partials/header')
                ->set_partial('footer', 'partials/footer');
        $this->template->build('frontpages/page_not_found');
    }
    

}
