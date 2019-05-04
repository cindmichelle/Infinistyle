<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin_model extends CI_Model {
    public function get_all_admin(){
        $query = "SELECT * FROM admin";
        $result = $this->db->query($query);

        return $result->result_array();
    }
    
    public function insert_customer($item){
        $this->db->insert('admin',$item);
    }

    public function update_customer($item){
        $this->db->update('admin',$item,"adminID = ".$item["adminID"]);
    }

    public function delete_customer($item){
      $this->db->where('adminID', $item);
      $this->db->delete('admin');
    }
    
    public function get_item(){
        $query = "SELECT * FROM products";
        $result = $this->db->query($query);

        return $result->result_array();
    }

    public function get_customers(){
        $query = "SELECT * FROM customers";
        $result = $this->db->query($query);

        return $result->result_array();
    }

    public function get_order(){
        $query = "SELECT * FROM orders";
        $result = $this->db->query($query);
        return $result->result_array();
    }

    public function clicked_item($item){
        $query = "SELECT * FROM products WHERE ProductID = '$item'";
        $result = $this->db->query($query);

        return $result->result_array();
    }

    public function update($item){
        $this->db->update('products',$item,"ProductID = ".$item["ProductID"]);
    }

    public function insert($item){
        $this->db->insert('products',$item);
    }
}
