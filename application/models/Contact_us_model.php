<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contact_Us_Model extends CI_Model {

    // common function for absolute path
    public function absolutePath($path = '') {
        $abs_path = str_replace('system/', $path, BASEPATH);
        //Add a trailing slash if it doesn't exist.
        $abs_path = preg_replace("#([^/])/*$#", "\\1/", $abs_path);
        return $abs_path;
    }

    public function insertContactUs($arr_fields) {
        $this->db->insert(TABLES::$MST_CONTACT_US, $arr_fields);
        return $this->db->insert_id();
    }

    public function getContactUs($fields_to_pass = '', $condition_to_pass = '', $order_by_to_pass = '', $limit_to_pass = '', $debug_to_pass = 0) {

        $fields_to_pass = '';
        $str_sql = '';
        if (is_array($fields_to_pass)) {
            $str_sql.="`" . implode("`,`", $fields_to_pass) . "`";
        } elseif ($fields_to_pass != "") {
            $str_sql .= $fields_to_pass;
        } else {
            $str_sql .= "*";
        }
        $this->db->select($str_sql);
        $this->db->from(TABLES::$MST_CONTACT_US);
        if ($condition_to_pass != '')
            $this->db->where($condition_to_pass);


        if ($order_by_to_pass != '')
            $this->db->order_by($order_by_to_pass);


        if ($limit_to_pass != '')
            $this->db->limit($limit_to_pass);

        $query = $this->db->get();

        if ($debug_to_pass)
            echo $this->db->last_query();

        return $query->result_array();
    }

}
