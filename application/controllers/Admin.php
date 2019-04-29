<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Admin extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->model('Admin_model');
        }

        public function index(){
            $data["title"] = "Dashboard";
            $this->load->view('includes/admin/headerAdmin_view',$data);
            $this->load->view('admin/adminDashboard_view');
            $this->load->view('includes/admin/footerAdmin_view');
        }

        public function profile(){
            $data['title'] = "Admin Profile";
            $this->load->view('includes/admin/headerAdmin_view', $data);
            $this->load->view('admin/adminProfile_view');
            $this->load->view('includes/admin/footerAdmin_view');
        }

        public function orders(){
            $data['title'] = "Order";
            $data['orders'] = $this->Admin_model->get_order();
            $this->load->view('includes/admin/headerAdmin_view', $data);
            $this->load->view('admin/orderList_view', $data);
            $this->load->view('includes/admin/footerAdmin_view');
       }
        public function items(){
            $data['title'] = "Items";
            $data['items'] = $this->Admin_model->get_item();
            $this->load->view('includes/admin/headerAdmin_view', $data);
            $this->load->view('admin/itemList_view', $data);
            $this->load->view('includes/admin/footerAdmin_view');
       }
        
       public function customers(){
            $data['title'] = "Customers";
            $data['customer'] = $this->Admin_model->get_customers();
            $this->load->view('includes/admin/headerAdmin_view', $data);
            $this->load->view('admin/customerList_view', $data);
            $this->load->view('includes/admin/footerAdmin_view');
       }

       public function edit($item){
           //$data['edit'] = $this->Admin_model->clicked_item($item);
           $this->load->view('includes/admin/headerAdmin_view');
           //$this->load->view('admin/editProduct_view', $data);
           $this->load->view('includes/admin/footerAdmin_view');
       }

       public function add(){
           $this->load->view('includes/admin/headerAdmin_view');
           //$this->load->view('admin/addProduct_view');
           $this->load->view('includes/admin/footerAdmin_view');
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