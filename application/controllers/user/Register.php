<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
  public function __construct(){
    parent::__construct();
    //load helper library
    $this->load->helper('form');

    //load validation library
    $this->load->library('form_validation');

    //load session library
    $this->load->library('session');
  }

  public function index(){
    $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
    $data['js'] = $this->load->view('includes/js.php', NULL, TRUE);
    $data['nav'] = $this->load->view('includes/nav.php', NULL, TRUE);
    $data['footer'] = $this->load->view('includes/footer.php', NULL, TRUE);
    $data['register'] =  $this->load->view('includes/register.php', NULL, TRUE);
    
    $this->load->view('pages/signUp_view', $data);
  }

  // TODO!!
  public function register_validation(){
    $this->form_validation->set_rules('fullName','FullName','trim|required');
    $this->form_validation->set_rules('username','Username','trim|required');
    $this->form_validation->set_rules('email','Email','trim|required');
    $this->form_validation->set_rules('password','Password','trim|required');
    $this->form_validation->set_rules('phoneNo','PhoneNo','trim|required');
    $this->form_validation->set_rules('address','Address','trim|required');
    $this->form_validation->set_rules('policy','policy','required');

    if($this->form_validation->run() == FALSE){
      redirect('user/register');
    }else{
      $data = array(
        'fullname' => $this->input->post('fullName'),
        'username' => $this->input->post('username'),
        'email' => $this->input->post('email'),
        'password' => md5($this->input->post('password')),
        'address' => $this->input->post('address'),
        'phone' => $this->input->post('phoneNo'),
      );
      $this->load->model('Customer_model');
      $result = $this->Customer_model->insert_customer($data);
      
      if ($result == TRUE) {
        $data['message_display'] = 'Registration Successfull !';
        // $this->load->view('page', $data);
        //masuk kemana
      }else{
        $data['message_display'] = 'Username already exist!';
        $this->load->view('pages/signUp_view',$data);
      }
    }
  }
}
?>
