<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');
        $this->load->view('plantilla/header');
        $this->load->view('plantilla/navbar');
        self::patentes();
        $this->load->view('plantilla/footer');
    }

    public function index() {
        self::login();
        //self::patentes();
    }

    public function patentes() {
        $crud = new grocery_CRUD();

        $crud->set_table('patente');
        $output = $crud->render();


        $this->genera_respuesta($output);
    }

    function genera_respuesta($output = null) {
        $this->load->view('View_carga_basedatos.php', $output);
    }
    
    
    
    public function login(){
        
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
           // $this->load->view('home_view', $data);
            //redirect('admin/patentes');
            //self::patentes();
            //redirect('admin/patentes');
        } else {
            //If no session, redirect to login page
            redirect('login');
        }
    }
    
    
   public function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home', 'refresh');
 }
    

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */