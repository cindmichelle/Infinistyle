<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * ADMIN PRIVILEGES : 
 * get
 *  products (all / unit)
 *  customers (all / unit)
 *  orders  (all / unit)
 *  order with its details (orderdetails)  (all / unit)
 *  shoppingcarts (all / unit)
 *  shoppingcart with its details (shoppingcartdetails)  (all / unit)
 *  admin profile(all / unit) ?not sure
 * 
 * insert
 *  products
 * 
 * update
 *  products
 *  orders
 * 
 * */ 

/* *
 * HOW TO ADD RELATIONAL TABLE (LIKE ORDERS & SHOPPINGCARTS)
 * -> insert data ke table orders | shoppingcarts.
 * -> get id of the latest orders | shoppingcarts update (using $db->insert_id; , src : https://www.w3schools.com/php/php_mysql_insert_lastid.asp)
 * -> insert datadetail + xxxId into xxxdetails.
 * 
 * just my initial idea. Hope it werks!
 * */
class Admin extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        $this->load->model('Admin_model');
        $data["title"] = "Dashboard";
        $this->load->view('admin/headerAdmin_view',$data);
        $this->load->view('admin/adminDashboard_view');
        $this->load->view('admin/footerAdmin_view');
    }
    
    public function profile(){
        $this->load->model('Admin_model');
        $data['title'] = "Admin Profile";
        $this->load->view('admin/headerAdmin_view', $data);
        $this->load->view('admin/adminProfile_view');
        $this->load->view('admin/footerAdmin_view');
    }

    public function orders(){
        $this->load->model('Order_model');
        $data['title'] = "Order";
        $data['orders'] = $this->Order_model->get_all_order();
        $this->load->view('admin/headerAdmin_view', $data);
        $this->load->view('admin/orderList_view', $data);
        $this->load->view('admin/footerAdmin_view');
    }
    public function items(){
        $this->load->model('Product_model');
        $data['title'] = "Products";
        $data['items'] = $this->Product_model->get_all_product();
        $this->load->view('admin/headerAdmin_view', $data);
        $this->load->view('admin/itemList_view', $data);
        $this->load->view('admin/footerAdmin_view');
    }

    public function customers(){
        $this->load->model('Customer_model');
        $data['title'] = "Customers";
        $data['customer'] = $this->Customer_model->get_all_customer();
        $this->load->view('admin/headerAdmin_view', $data);
        $this->load->view('admin/customerList_view', $data);
        $this->load->view('admin/footerAdmin_view');
    }

    public function edit($item){
        //$data['edit'] = $this->Admin_model->clicked_item($item);
        $this->load->view('admin/headerAdmin_view');
        //$this->load->view('admin/editProduct_view', $data);
        $this->load->view('admin/footerAdmin_view');
    }

    public function add(){
        $this->load->view('admin/headerAdmin_view');
        //$this->load->view('admin/addProduct_view');
        $this->load->view('admin/footerAdmin_view');
    }

    public function edit_action(){
        $values = [
            "ProductID" => $this->input->post('product_id'),
            "ProductName" => $this->input->post('product_name'),
            "UnitsInStock" => $this->input->post('stock'),
            "UnitPrice" => $this->input->post('price')
        ];

        $this->Admin_model->update($values);
        redirect("admin/items");
    }

    public function add_action(){
        $values = [
            "ProductID" => '',
            "ProductName" => $this->input->post('product_name'),
            "UnitsInStock" => $this->input->post('stock'),
            "UnitPrice" => $this->input->post('price')
        ];

        $this->Admin_model->insert($values);
        redirect("admin/items");
    }
}
