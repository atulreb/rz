<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 *  Class will do all necessary action for blog functionalities
 */

class Invoice_model extends CI_Model
{
    /*
     * START :: Write function which fetches blog to displys on front-end :
     */

    function getAllInvoices($user_id)
    {

        $this->db->select("inv.*");

        $this->db->from('tbl_invoices as inv');

        $this->db->where('inv.user_id', $user_id);
        $this->db->order_by('inv.invoice_date', 'desc');

        $query = $this->db->get();

        return $query->result_array();
    }

    function getInviceDetails($post_id)
    {
        $this->db->select("inv.*,os.*,ud.fname,ud.lname,u.email");

        $this->db->from(TABLES::$MST_SERVICE_INVOICE.' as inv');
        $this->db->join(TABLES::$TRANS_SERVICE_INVOICE . ' as os', 'os.master_invoice_id = inv.id');
        $this->db->join(TABLES::$USER_DETAILS . ' as ud', 'ud.user_id = inv.user_id');
        $this->db->join(TABLES::$ADMIN_USER . ' as u', 'u.id = inv.user_id');
        $this->db->where('inv.id', $post_id);

        $query = $this->db->get();

        return $query->result_array();
    }
    function getServiceInviceDetails($post_id)
    {
        $this->db->select("inv.*,os.*,ud.fname,ud.lname");

        $this->db->from(TABLES::$MST_SERVICE_INVOICE.' as inv');
        $this->db->join(TABLES::$TRANS_SERVICE_INVOICE . ' as os', 'os.master_invoice_id = inv.id');
        $this->db->join(TABLES::$USER_DETAILS . ' as ud', 'ud.user_id = inv.user_id');
        $this->db->where('inv.id', $post_id);
        $this->db->where('inv.status', '1');

        $query = $this->db->get();

        return $query->result_array();
    }

    function getOrderById($post_id)
    {
        $this->db->select("os.*,s.name as state, od.ord_det_item_fk, od.ord_det_item_name, od.ord_det_quantity, od.ord_det_non_discount_quantity, od.ord_det_discount_quantity, od.ord_det_stock_quantity, od.ord_det_price, od.ord_det_price_total, od.ord_det_discount_price, od.ord_det_discount_price_total, od.ord_det_discount_description");

        $this->db->from(TABLES::$ORDER_SUMMARY . ' as os');
        $this->db->join(TABLES::$ORDER_DETAILS . ' as od', 'os.ord_order_number = od.ord_det_order_number_fk');
        $this->db->join('tbl_states as s', 's.id = os.ord_bill_state');
//        $this->db->join('tbl_cities as c', 'c.id = os.ord_bill_city');
        $this->db->where('os.ord_order_number', $post_id);
        $this->db->order_by('os.ord_date', 'desc');

        $query = $this->db->get();

        return $query->result_array();
    }

    function fetchPaperDetailsbyOrders($user_id)
    {

        $this->db->select("od.*, p.*, os.ord_date, os.ord_order_number");
        $this->db->from(TABLES::$ORDER_SUMMARY . ' as os');
        $this->db->join(TABLES::$ORDER_DETAILS . ' as od', 'os.ord_order_number = od.ord_det_order_number_fk');
        $this->db->join(TABLES::$MST_PRODUCTS . ' as p', 'od.ord_det_item_fk = p.product_id');
        $this->db->where('os.user_id', $user_id);
        $this->db->group_by(array("p.product_id", "os.ord_order_number"));
        $this->db->order_by('os.ord_date', 'DESC');

        $query = $this->db->get();
        /* echo $this->db->last_query();
          die; */
        return $query->result_array();
    }

    function getInvoiceNumber()
    {
        $this->db->select("invoice_id, LPAD(invoice_id+1,7,'0') as number ");
        $this->db->from('tbl_invoices');
        $this->db->limit('1');
        $query = $this->db->get();

        return $query->result_array();
    }
    function getServiceInvoiceNumber()
    {
        $this->db->select("id, concat('INV',LPAD(id+1,7,'0')) as number");
        $this->db->from(TABLES::$MST_SERVICE_INVOICE);
        $this->db->order_by('id', 'DESC');
        $this->db->limit('1');
        
        $query = $this->db->get();

        return $query->result_array();
    }

    function getInvoiceData($id)
    {
        $this->db->select("od.*,os.order_number,oss.ord_bill_address_01,oss.ord_bill_post_code,(select name from tbl_cities where id=oss.ord_bill_city) as bill_city");
        $this->db->from('tbl_invoices as os');
        $this->db->join(TABLES::$ORDER_DETAILS . ' as od', 'os.order_number = od.ord_det_order_number_fk');
        $this->db->join(TABLES::$ORDER_SUMMARY . ' as oss', 'oss.ord_order_number = od.ord_det_order_number_fk');
        $this->db->where('os.invoice_id', $id);

        $query = $this->db->get();
        /* echo $this->db->last_query();
          die; */
        return $query->result_array();
    }

    function getClients()
    {
        $this->db->select("ud.*");
        $this->db->from(TABLES::$USER_DETAILS . ' as ud');
        $this->db->join(TABLES::$ADMIN_USER . ' as u', 'u.id = ud.user_id');
        $this->db->where('u.role_id', '3');

        $query = $this->db->get();
        /* echo $this->db->last_query();
          die; */
        return $query->result_array();
    }

    function getPaymentsReceived()
    {
        $this->db->select("i.*");
        $this->db->from(TABLES::$MST_SERVICE_INVOICE . ' as i');
        $this->db->join(TABLES::$PAYMENT . ' as p', 'i.order_number = p.order_no');
        $this->db->where('i.status', 'paid');
        $this->db->group_by('i.invoice_id');

        $query = $this->db->get();
//         echo $this->db->last_query();
//          die; 
        return $query->result_array();
    }

    
}
