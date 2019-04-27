<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
        public function index(){
            /* Home View
            $data['css'] = $this->load->view('includes/css.php',NULL,TRUE);
            $data['nav'] = $this->load->view('includes/nav.php',NULL,TRUE);
            $data['header'] = $this->load->view('includes/headerphp',NULL,TRUE);
            $data['content'] = $this->load->view('includes/content.php',NULL,TRUE);
            $data['footer'] = $this->load->view('includes/footer.php',NULL,TRUE);
            $data['js'] = $this->load->view('includes/js.php',NULL,TRUE);
            $this->load->view('pages/home_view.php',$data); */

            /* Product Details View
            $data['css'] = $this->load->view('includes/css.php',NULL,TRUE);
            $data['nav'] = $this->load->view('includes/nav.php',NULL,TRUE);
            $data['header'] = $this->load->view('includes/header.php',NULL,TRUE);
            $data['product'] = $this->load->view('includes/products.php',NULL,TRUE);
            $data['footer'] = $this->load->view('includes/footer.php',NULL,TRUE);
            $data['js'] = $this->load->view('includes/js.php',NULL,TRUE);
            $this->load->view('pages/productDetails_view.php',$data);*/

            /* Sign In View
            $data['css'] = $this->load->view('includes/css.php',NULL,TRUE);
            $data['nav'] = $this->load->view('includes/nav.php',NULL,TRUE);
            $data['login'] = $this->load->view('includes/login.php',NULL,TRUE);
            $data['footer'] = $this->load->view('includes/footer.php',NULL,TRUE);
            $data['js'] = $this->load->view('includes/js.php',NULL,TRUE);
            $this->load->view('pages/signIn_view.php',$data); */

            /* Sign Up View
            $data['css'] = $this->load->view('includes/css.php',NULL,TRUE);
            $data['nav'] = $this->load->view('includes/nav.php',NULL,TRUE);
            $data['register'] = $this->load->view('includes/register.php',NULL,TRUE);
            $data['footer'] = $this->load->view('includes/footer.php',NULL,TRUE);
            $data['js'] = $this->load->view('includes/js.php',NULL,TRUE);
            $this->load->view('pages/signUp_view.php',$data); */

            /* Shopping Cart View
            $data['css'] = $this->load->view('includes/css.php',NULL,TRUE);
            $data['nav'] = $this->load->view('includes/nav.php',NULL,TRUE);
            $data['cart'] = $this->load->view('includes/user/shoppingCart.php',NULL,TRUE);
            $data['footer'] = $this->load->view('includes/footer.php',NULL,TRUE);
            $data['js'] = $this->load->view('includes/js.php',NULL,TRUE);
            $this->load->view('pages/shoppingCart_view.php',$data); */

            /* List Items Admin Dashboard View
            $data['css'] = $this->load->view('includes/css.php',NULL,TRUE);
            $data['sidenav'] = $this->load->view('includes/admin/sidenavAdmin.php',NULL,TRUE);
            $data['header'] = $this->load->view('includes/admin/headerAdmin.php',NULL,TRUE);
            $data['products'] = $this->load->view('includes/admin/productList.php',NULL,TRUE);
            $data['footer'] = $this->load->view('includes/admin/footerAdmin.php',NULL,TRUE);
            $data['js'] = $this->load->view('includes/js.php',NULL,TRUE);
            $this->load->view('includes/admin/productList_view.php',$data); */

            /* List Customers Admin Dashboard View
            $data['css'] = $this->load->view('includes/css.php',NULL,TRUE);
            $data['sidenav'] = $this->load->view('includes/admin/sidenavAdmin.php',NULL,TRUE);
            $data['header'] = $this->load->view('includes/admin/headerAdmin.php',NULL,TRUE);
            $data['customers'] = $this->load->view('includes/admin/customerList.php',NULL,TRUE);
            $data['footer'] = $this->load->view('includes/admin/footerAdmin.php',NULL,TRUE);
            $data['js'] = $this->load->view('includes/js.php',NULL,TRUE);
            $this->load->view('includes/admin/customerList_view.php',$data); */

            /* List Transactions Admin Dashboard View
            $data['css'] = $this->load->view('includes/css.php',NULL,TRUE);
            $data['sidenav'] = $this->load->view('includes/admin/sidenavAdmin.php',NULL,TRUE);
            $data['header'] = $this->load->view('includes/admin/headerAdmin.php',NULL,TRUE);
            $data['orders'] = $this->load->view('includes/admin/orderList.php',NULL,TRUE);
            $data['footer'] = $this->load->view('includes/admin/footerAdmin.php',NULL,TRUE);
            $data['js'] = $this->load->view('includes/js.php',NULL,TRUE);
            $this->load->view('includes/admin/orderList_view.php',$data);*/

            /* Admin Dashboard View */

            /* Admin Profile */
            $data['css'] = $this->load->view('includes/css.php',NULL,TRUE);
            $data['sidenav'] = $this->load->view('includes/admin/sidenavAdmin.php',NULL,TRUE);
            $data['header'] = $this->load->view('includes/admin/headerProfileAdmin.php',NULL,TRUE);
            $data['profile'] = $this->load->view('includes/admin/adminProfile.php',NULL,TRUE);
            $data['footer'] = $this->load->view('includes/admin/footerAdmin.php',NULL,TRUE);
            $data['js'] = $this->load->view('includes/js.php',NULL,TRUE);
            $this->load->view('includes/admin/adminProfile_view.php',$data);
        }
    }
 ?>
