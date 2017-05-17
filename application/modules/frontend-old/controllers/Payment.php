<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller
{

    private $stripeSecretKey = "sk_test_TSinCwEc7vZNsRCqozPQ5DmE"; // Stripe Secret Key
    private $stripePublishKey = "pk_test_Q5EEVATtiOtsgVgPgRglKRgR"; // Stripe Publishable Key

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function index()
    {
        $arr['title'] = 'Stripe Payment | Secure Payment Form';
        $arr['stripePublishKey'] = $this->stripePublishKey;
        $arr['error'] = '';
        $arr['success'] = '';
        $this->form_validation->set_rules('cardholdername', "Card Holder's Name", 'trim|required');
        if ($this->form_validation->run() == TRUE) {
            $stripeToken = $this->input->post('stripeToken');
            $price = '30';   //$this->input->post('price') Static price
            $this->load->library('stripe_payment'); // load stripe payment libaray
            $response = $this->stripe_payment->makePayment($this->stripeSecretKey, $stripeToken, $price); // call the stripe payment function
            if ($response['success'] == 1) {  // stripe success
                $arr['success'] = 'Your payment was successful.';

                redirect('vcard');
            } else if ($response['error'] == 1) {  // stripe error
                $data['error'] = $response['msg'];
                $this->load->view('dashboard', $data);
            } else {
                $data['error'] = 'Something goes wrong';
                $this->load->view('payment', $data);
            }
        } else {
            $this->load->view('payment', $arr, false);
        }
    }

}
