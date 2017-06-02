<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sticky_footer extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    /**
     * code for call towing landing page
     */
    public function index() {
       
        $this->load->view('sticky-footer');
    }


}
