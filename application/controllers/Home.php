<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
        public function index(){
            $this->load->view('includes/css.php');
            $this->load->view('includes/header_view.php');
            $this->load->view('includes/js.php');
        }
    }
 ?>
