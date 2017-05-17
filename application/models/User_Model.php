<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 *  Class will do all necessary action for blog functionalities
 */

class User_Model extends CI_Model
{

    public function saveUserAppoinmentModel($post)
	{
		$service = $post['service'];
		$contact = $post['preferred_contact'];
		$time = $post['preferred_time'];
		$description = $post['description'];
		$date = $this->formatDatetoDB($post['preferred_date']);
		$user_id = $this->session->userdata['user_account']['user_id'];
		
		$data = array("user_id"=>$user_id,
		              "service"=>$service,
					  "preferred_date"=>$date,
					  "preferred_time"=>$time,
					  "preferred_contact"=>$contact,
					  "details"=>$description
					  );
					  
		$this->db->insert(TABLES::$USER_APPOINTMENT,$data);
        $app_id = $this->db->insert_id();
		$session['msg'] = "Appoinment Saved Successfully";
		$this->session->set_userdata($session);
		return true;
         		
					  
	}
	
	public function formatDatetoDB($date)
	{
		$explode_date = explode('/',$date);
		$format_date = $explode_date[2].'-'.$explode_date[0].'-'.$explode_date[1];
		return $format_date;
	}
	
	public function getAllServicesUser()
	 {
		  $user_id = $this->session->userdata['user_account']['user_id'];
		  
		  $this->db->select('service_id,user_id,service,sdate,edate,details,status');
		  $this->db->from(TABLES::$USER_SERVICES);
		  $this->db->where('user_id',$user_id);
		  $query = $this->db->get();
		  /*echo $this->db->last_query();die;*/
		  $row = $query->result();
		  return $row;
	 }
	
	public function getAllServicesForAllUsers()
	 {
		  $this->db->select('a.service,a.appoinment_id,a.preferred_date,a.status,b.fname,b.lname');
		  $this->db->from(TABLES::$USER_APPOINTMENT.' as a');
		  $this->db->join(TABLES::$USER_DETAILS.' as b','a.user_id=b.user_id','inner');
		  $query = $this->db->get();
		  $row = $query->result();
		  return $row;
	 }
	 
	 public function acceptAppointmentModel($appoinment_id)
	 {
		  $update = array("status"=>1);
		  $this->db->where('appoinment_id',$appoinment_id);
		  $this->db->update(TABLES::$USER_APPOINTMENT,$update);
		  $session['msg'] = "Appoinment Accepted Successfully";
		  $this->session->set_userdata($session);
		  return true;
	  
	 }
	 
	 public function rescheduleAppointmentModel($appoinment_id)
	 {
		  $update = array("status"=>0);
		  $this->db->where('appoinment_id',$appoinment_id);
		  $this->db->update(TABLES::$USER_APPOINTMENT,$update);
		  $session['msg'] = "Appoinment Re-Scheduled Successfully";
		  $this->session->set_userdata($session);
		  return true;
	 }
		
	
   
   
}
