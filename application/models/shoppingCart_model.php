<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shoppingcart_model extends CI_Model {
    public function get_all_shoppingCart(){
        $query = "SELECT * FROM shoppingcarts";
        $result = $this->db->query($query);

        return $result->result_array();
    }
    
    public function insert_customer($item){
        $this->db->insert('shoppingcarts',$item);
    }

    public function update_customer($item){
        $this->db->update('shoppingcarts',$item,"cartID = ".$item["cartID"]);
    }

    public function delete_customer($item){
      $this->db->where('customerID', $item);
      $this->db->delete('shoppingcarts');
    }
}
