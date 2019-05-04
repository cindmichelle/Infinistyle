<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {
    public function get_all_customer(){
        $query = "SELECT * FROM customers";
        $result = $this->db->query($query);

        return $result->result_array();
    }
    
    public function insert_customer($item){
        $this->db->insert('customers',$item);
    }

    public function update_customer($item){
        $this->db->update('customers',$item,"customerID = ".$item["customerID"]);
    }

    public function delete_customer($item){
      $this->db->where('customerID', $item);
      $this->db->delete('customers');
    }
}
