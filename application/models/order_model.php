<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_model extends CI_Model {
    public function get_all_order(){
        $query = "SELECT * FROM orders";
        $result = $this->db->query($query);

        return $result->result_array();
    }
    
    public function insert_order($item){
        $this->db->insert('orders',$item);
    }

    public function update_order($item){
        $this->db->update('orders',$item,"orderID = ".$item["OrderID"]);
    }

    public function delete_order($item){
      $this->db->where('orderID', $item);
      $this->db->delete('orders');
    }
}
