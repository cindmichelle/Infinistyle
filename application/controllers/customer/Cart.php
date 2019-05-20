<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'controllers/user/Login.php';
class Cart extends Login{

    public function __construct(){
        parent::__construct();
        $this->load->library('Session');
    }

    public function index(){
        //$this->load->model('Customer_model')
        $this->check_is_login('customer');
        $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
        $data['navbar'] = $this->load->view('includes/shop/header_logged', NULL, TRUE);
        $data['cart'] = $this->load->view('includes/user/shoppingCart', NULL, TRUE);
        $data['footer'] = $this->load->view('includes/user/footer', NULL, TRUE);
        $data['js'] = $this->load->view('includes/js.php', NULL, TRUE);
        $this->load->view('pages/user/shoppingCart_view.php', $data);
    }

    public function get_cart_id(){
        if((isset($this->session->userdata['logged_in_infinistyle']))){
            
            //#1 - get username from session
            $user =  $this->session->userdata['logged_in_infinistyle'];
            
            //#2 - use the username data to get customerID
            $this->load->model('Customer_model');
            $customer = $this->Customer_model->get_customer($user);

            //#3 - if customer not exist, return false.
            if($customer == false){
                return $customer;
            }

            //#4 - use customerID as a params for checking is cart for this customer is already exist
            $cart_params['customerID'] = $customer->customerID;

            $this->load->model('shoppingCart_model');
            $cart_response = $this->shoppingCart_model->get_shoppingCart($cart_params);
            
            //if cart already exist
            if($cart_response != false){
                echo "cart already exist for user " . $customer->customerID;
                return $cart_response->cartID;
                // print_r($cart_response);  //stdClass Object ( [cartID] => 1 [customerID] => 5 )
            }
            else{
                echo "making a new cart for user" . $customer->customerID;
                $cart_response = $this->shoppingCart_model->insert_shoppingCart($cart_params);
                // ADD ERROR HANDLING !!
                // print_r($cart_response);

                return $this->db->insert_id();
            }
        }
    }

    public function add_product_to_cart($data){
        print_r($data);
        // $cartID = $this->get_cart_id();

        // if($cartID == false){
        //     $error = array(
        //         "code" => 2024,
        //         "message" => "Cart tidak ditemukan."
        //     );
        //     return  $error;
        // }

        // $add_cart_detail_params = array(
        //     "cartID" => $cartID,
        //     "productID" => $data['productID'],
        //     "qty" => $data['qty']
        // );

        // $this->load->model('ShoppingCartDetails_model');

        // $result = $this->ShoppingCartDetails_model->insert_shoppingCartDetails($add_cart_detail_params);
        // print_r($result);
    }
}

 ?>
