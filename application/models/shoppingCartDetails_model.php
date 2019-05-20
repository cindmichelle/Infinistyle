<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShoppingCartDetails_model extends CI_Model {
    public function get_all_shoppingCartDetails(){
        $query = "SELECT * FROM shoppingcartsdetails";
        $result = $this->db->query($query);

        return $result->result_array();
    }

    public function get_shoppingCartDetails_per_cartID($data){
        $condition = "cartID =" . "'" . $data['cartID'] . "'";
        $this->db->select('*');
        $this->db->from('shoppingcartsdetails');
        $this->db->where($condition);

        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            return false;
        } 
        else {
          return $query->result_array();
        }
    }

    
    public function insert_shoppingCartDetails($data){
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
