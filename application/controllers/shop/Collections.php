<?php
defined('BASEPATH') OR exit('No direct script access allowed');

<<<<<<< HEAD
class Collections extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('product_model');
    }

    public function index(){
        $card['result'] = $this->product_model->get_all_product();
        $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
        $data['header'] = $this->load->view('includes/shop/header.php', NULL, TRUE);
        $data['content'] = $this->load->view('includes/shop/content.php', $card, TRUE);
        $data['footer'] = $this->load->view('includes/shop/footer.php', NULL, TRUE);
        $data['js'] = $this->load->view('includes/js.php', NULL, TRUE);
        $this->load->view('pages/shop/homePage_view.php', $data);
    }
}

?>
=======
class Collections extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
      $this->load->model('Product_model');
      $data['title'] = "Products";
      $data['items'] = $this->Product_model->get_all_product();
      $this->load->view('admin/headerAdmin_view', $data);
      $this->load->view('admin/itemList_view', $data);
      $this->load->view('admin/footerAdmin_view');
      
    $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
    $data['js'] = $this->load->view('includes/js.php', NULL, TRUE);
    $data['nav'] = $this->load->view('includes/nav.php', NULL, TRUE);
    $data['header'] = $this->load->view('includes/header.php', NULL, TRUE);
    $data['footer'] = $this->load->view('includes/footer.php', NULL, TRUE);
    $data['content'] = $this->load->view('includes/content.php', NULL, TRUE);
    
      $this->load->view('pages/home_view');
    }

    public function update_product(){
      // $values = [
      //   "ProductID" => $this->input->post('product_id'),
      //   "ProductName" => $this->input->post('product_name'),
      //   "UnitsInStock" => $this->input->post('stock'),
      //   "UnitPrice" => $this->input->post('price')
      // ];

      // $this->Product_model->update($values);
      redirect("admin/products");
    }
    

}
>>>>>>> add login and regist ctrlr
