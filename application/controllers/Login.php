<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   self::index();
 }

 function index() {
     
     
        $this->load->helper(array('form'));
        $this->load->view('plantilla/header');
        $this->load->view('plantilla/navbar');
        $this->load->view('View_login');
        $this->load->view('plantilla/footer');
        
        
    }


}

