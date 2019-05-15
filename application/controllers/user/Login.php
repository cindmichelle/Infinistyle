<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
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
    $data['login'] =  $this->load->view('includes/login.php', NULL, TRUE);
    
    $this->load->view('pages/signIn_view', $data);
  }

  public function check_is_login(){
    if(!(isset($this->session->userdata['logged_in']))){
      redirect('user/login'); 
    }
  }

  public function login_validation(){
    // UDAH JALAN
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      // checking if there is no session in local storage
      $this->check_is_login();
    }else {
      $data = array(
        'username'=> $this->input->post('username'),
        'password'=> md5($this->input->post('password'))
      );

      $this->load->model('Admin_model');
      $result_admin = $this->Admin_model->get_admin($data);
      if($result_admin){
        $session_data = array(
          'username' => $result_admin->username,
          'password' => $result_admin->password,
          );
          
        // add data user ke session
        $this->session->set_userdata('logged_in', $session_data);
        redirect('admin/dashboard');
      }

      $this->load->model('Customer_model');
      $result_customer = $this->Customer_model->get_customer($data);
      if($result_customer){
        $session_data = array(
          'username' => $result_customer[0]->username,
          'password' => $result_customer[0]->password,
          );
          
        // add data user ke session
        $this->session->set_userdata('logged_in', $session_data);
        // $this->load->view('admin_page'); //TODO ganti ke user page
      }
    }
  }
    
  public function logout(){
    //hancurin session
    $sess_array = array(
      'username' => ''
    );
    $this->session->unset_userdata('logged_in', $sess_array);
    $data['message_display'] = 'Successfully Logout';
    redirect('user/login');
  }  
}
?>
