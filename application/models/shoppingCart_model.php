<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shoppingcart_model extends CI_Model {
    public function get_all_shoppingCart(){
        $query = "SELECT * FROM shoppingcarts";
        $result = $this->db->query($query);

        return $result->result_array();
    }

    public function get_shoppingCart($data){
        $condition = "customerID =" . "'" . $data['customerID'] . "'";
        $this->db->select('*');
        $this->db->from('shoppingcarts');
        $this->db->where($condition);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            return false;
        } 
        else {
            return $query->row();
        }
    }

    
    public function insert_shoppingCart($data){
        $insert = $this->db->insert('shoppingcarts',$data);
        $response =  $this->db->error();
        return $response;
    }

    public function update_shoppingCart($item){
        $this->db->update('shoppingcarts',$item,"cartID = ".$item["cartID"]);
    }

    public function delete_shoppingCart($item){
      $this->db->where('cartID', $item['cartID']);
      $this->db->delete('shoppingcarts');
    }
}
?>
