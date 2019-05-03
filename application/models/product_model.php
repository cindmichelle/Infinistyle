<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product_model extends CI_Model {

    public function get_products(){
        
        $query = "SELECT * FROM product";
        $result = $this->db->query($query);

        return $result->result_array();
    }
}
 ?>
