<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
    public function get_item(){
        $query = "SELECT * FROM product";
        $result = $this->db->query($query);

        return $result->result_array();
    }

    public function get_customers(){
        $query = "SELECT * FROM customer";
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
