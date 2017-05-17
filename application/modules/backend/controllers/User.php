<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class User extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("common_model");
        $this->load->model("User_Model");
        $data['user_session'] = $this->session->userdata('user_account');
        //echo $this->session->userdata['user_account']['username']; die;

        if ($data['user_session']['role_id'] == '1') {
            $this->sidebar = 'partials/sidebar';
        } else {
            $this->sidebar = 'partials/user_sidebar';
        }

        if (!$this->common_model->isLoggedIn()) {
            redirect(base_url());
        }
    }

    /*
     * Add New Project User
     */

    public function appoinment() {

        $this->template->set('page', 'appoinments');

        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Appoinment | RazorClean')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('user/appoinment');
    }

    public function saveUserAppoinment() {
        $data = $this->User_Model->saveUserAppoinmentModel($_POST);
        redirect('user/appoinments');
    }

    public function serviceList() {

        $services = $this->User_Model->getAllServicesUser();
        $this->template->set('page', 'serviceList');
        $this->template->set('services', $services);

        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Services | RazorClean')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('user/services');
    }

    public function upgrade() {
        $services = $this->User_Model->getAllServicesUser();
        $this->template->set('page', 'upgrade');
        $this->template->set('services', $services);
        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('Razorclean | User Dashboard')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('user/upgrade');
    }

    function upgradeMembership() {
        $data['user_session'] = $this->session->userdata('user_account');
        $product_name = 'Razorclean Plus Membership';
        $product_id = $data['user_session']['user_id'];
        $product_currency = 'USD';
        $product_price = '150';


//Here we can use paypal url or sanbox url.
        $paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
//Here we can used seller email id. 
        $merchant_email = 'vrishalidemo@gmail.com';
//here we can put cancle url when payment is not completed.
        $cancel_return = base_url() ."donate-with-paypal/index.php";
//here we can put cancle url when payment is Successful.
        $success_return = base_url() . "backend/user/successMemberPayment/" . $product_id;
        ?>
        <div style="margin-left: 38%"><img src="<?php echo backend_asset_url()?>images/ajax-loader.gif"/><img src="<?php echo backend_asset_url()?>images/processing_animation.gif"/></div>       

        <form name="myform" action="<?php echo $paypal_url; ?>" method="post" target="_top">
            <input type='hidden' name='business' value = "<?php echo $merchant_email; ?>">
            <input type='hidden' name='item_name' value = "<?php echo $product_name; ?>">
            <input type='hidden' name='item_number' value = "<?php echo $product_id; ?>">
            <input type='hidden' name='amount' value = "<?php echo $product_price; ?>">
            <input type='hidden' name='no_shipping' value='1'>
            <input type='hidden' name='currency_code' value = "<?php echo $product_currency; ?>">
            <input type='hidden' name='notify_url' value='<?php echo $success_return; ?>'>
            <input type='hidden' name='cancel_return' alue = "<?php echo $cancel_return ?>">
            <input type='hidden' name='return' value = "<?php echo $success_return; ?>">
            <input type='hidden' name='rm' value='2'>
            <!-- COPY and PASTE Your Button Code -->
            <input type="hidden" name="cmd" value="_xclick">
        </form>
        <script type="text/javascript">
            document.myform.submit();
        </script>
        <?php
    }

    public function userAppointmentAdmin() {
        $appointment = $this->User_Model->getAllServicesForAllUsers();
        $this->template->set('page', 'admin_appointment');
        $this->template->set('appointments', $appointment);

        $this->template->set_theme('default_theme');
        $this->template->set_layout('backend')
                ->title('User Appointments | RazorClean')
                ->set_partial('header', 'partials/header')
                ->set_partial('sidebar', $this->sidebar)
                ->set_partial('footer', 'partials/footer');
        $this->template->build('admin/user/appointment_list');
    }

    public function acceptAppointment($appoinment_id) {
        $this->User_Model->acceptAppointmentModel($appoinment_id);
        redirect('user/appointmentlist');
    }

    public function rescheduleAppointment($appoinment_id) {
        $this->User_Model->rescheduleAppointmentModel($appoinment_id);
        redirect('user/appointmentlist');
    }

     public function successMemberPayment($id) {
        //print_r($_REQUEST);die();
         $data['global'] = $this->common_model->getGlobalSettings();
         $from_address = $data['global']['site_title']."<br>".$data['global']['address']."<br>".$data['global']['city']."<br>".$data['global']['state'];
         $user_address = $this->common_model->getRecords(TABLES::$USER_DETAILS,'shipping_address',array('user_id'=>$id));
         $this->load->model("Invoice_model");
         $invoice_no = $this->Invoice_model->getServiceInvoiceNumber();
        if (empty($invoice_no)) {
            $inv_no = "0000001";
        } else {
            $inv_no = $invoice_no[0]['number'];
        }
        if (!empty($_REQUEST)) {
            $product_no = $_REQUEST['item_number']; // Product ID
            $product_transaction = $_REQUEST['txn_id']; // Paypal transaction ID
            $product_price = $_REQUEST['payment_gross']; // Paypal received amount value
            $product_currency = $_REQUEST['cc']; // Paypal received currency type
            $product_status = $_REQUEST['st']; // Paypal product status  
            $this->common_model->updateRow(TABLES::$USER_DETAILS, array('is_member'=>'1'), array('user_id' => $id));
            $insert = $this->common_model->insertRow(array("to_user_address"=>$user_address[0]['shipping_address'],"from_address"=>$from_address,"invoice_number"=>$inv_no,"user_id"=>$id,"status"=>'1','transaction_id'=>$product_transaction,'payment_date'=>date("Y-m-d H:i:s"),'created_time'=>date("Y-m-d H:i:s"),'total_amount'=>$product_price),TABLES::$MST_SERVICE_INVOICE);
            $this->common_model->insertRow(array("master_invoice_id"=>$insert,"product_name"=>urldecode($_REQUEST['item_name']),'amount'=>$product_price,'product_desc'=>urldecode($_REQUEST['item_name'])),TABLES::$TRANS_SERVICE_INVOICE);
        }
        $this->session->set_userdata('msg', 'Membership upgraded successfully.');
        redirect(base_url() . 'user/dashboard');
    }
	
	function sendmailtest(){
		$this->load->library('email');

        $outlook_account_username = 'atul.suroshe@live.com';
        $outlook_account_password = '9665639973@#';

        $config['smtp_crypto'] = 'tls';
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp-mail.outlook.com';
        $config['smtp_port'] = '587';
        $config['smtp_user'] = $outlook_account_username;
        $config['smtp_pass'] = $outlook_account_password;
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';

        $this->email->initialize($config);
        $this->email->set_newline("\r\n");
        $this->email->from('atul.suroshe@live.com','Admin');
        $this->email->to('atuls@rebelute.com');
        $this->email->subject('test subject');
        $this->email->message('hi this is test message');
        $this->email->send();

       $debug = $this->email->print_debugger();
        print_r($debug);
	}
}
