<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Validar_login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
           $this->load->database();

   $this->load->model('UsuariosModel','',TRUE);
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     //$this->load->view('view_login');
     redirect('Login');
       echo 'estas en validar login y el resultado fue falso';
   }
   else
   {
     //Go to private area
   //  echo 'Estas dentro de validar login contorlador';
    redirect('Admin');
   }

 }

 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');
   //query the database
   $result = $this->UsuariosModel->login($username, $password);
      if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
         'username' => $row->username
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
}
