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
                       // $this->load->view('BD');
                        //self::index();
                        self::patentes();
			$this->load->view('plantilla/footer');
    }

    public function index() {
       $data['currentPage'] = "Admin";
        $data['titulo'] = "administracion";
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

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */