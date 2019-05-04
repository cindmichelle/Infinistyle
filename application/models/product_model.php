<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product_model extends CI_Model {

    public function get_all_product(){
        
        $query = "SELECT * FROM products";
        $result = $this->db->query($query);

        return $result->result_array();
    }

    // 
    public function get_product($keyword){
        $query = "SELECT * FROM products 
        WHERE productName LIKE '%$keyword%' 
        OR productDescription LIKE '%f$keyword%' 
        OR productCategory LIKE '%f$keyword%'";
        $result = $this->db->query($query);

        return $result->result_array();
    }

    public function update_product($item){
        $this->db->update('products',$item,"ProductID = ".$item["ProductID"]);
    }

    public function insert_product($item){
        $this->db->insert('products',$item);
    }
    
    public function delete_product($item){
        $this->db->update('products',$item,"ProductID = ".$item["ProductID"]);
    }

}
 ?>
