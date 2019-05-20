<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShoppingCartDetails_model extends CI_Model {
    public function get_all_shoppingCartDetails(){
        $query = "SELECT * FROM shoppingcartdetails";
        $result = $this->db->query($query);

        return $result->result_array();
    }

    public function get_shoppingCartDetails_per_cartID($data){
        $query = 
        "SELECT p.productName as name, 
                p.productImage as image,
                p.productPrice as price,
                cd.qty as quantity 
        FROM shoppingcartdetails as cd 
        JOIN products as p ON (cd.productID = p.productID)
        WHERE cartID =" . "'" . $data['cartID'] . "'";

        $result = $this->db->query($query);

        return $result->result_array();
    }

    
    public function insert_shoppingCartDetails($data){
        $insert = $this->db->insert('shoppingcartdetails',$data);
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
