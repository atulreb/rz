<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 *  Class will do all necessary action for blog functionalities
 */

class Employee_Model extends CI_Model {

    public function employeeList() {
        $this->db->select('ud.*,u.*');
        $this->db->from(TABLES::$EMPLOYEES . ' as ud');
        $this->db->join(TABLES::$ADMIN_USER . ' as u', 'ud.emp_id=u.id', 'inner');
//        $this->db->where('ud.user_id=u.id', 'inner');
        $query = $this->db->get();
        $row = $query->result_array();
        return $row;
    }

    function getEmployeeNumber() {
        $this->db->select("id, LPAD(id+1,5,'0') as number ");
        $this->db->from(TABLES::$EMPLOYEES);
        $this->db->limit('1');
        $query = $this->db->get();
//        echo $this->db->last_query();
        return $query->result_array();
    }

    function getEmployeeDocuments() {
        $this->db->select( 'ed.*,(select emp_name from '.TABLES::$EMPLOYEES.' where emp_id=ed.emp_id) as emp_name');
        $this->db->group_by('emp_id');
       $query = $this->db->get(TABLES::$EMP_DOCUMENTS .' as ed');
//        echo $this->db->last_query();
        return $query->result_array();
    }

}
