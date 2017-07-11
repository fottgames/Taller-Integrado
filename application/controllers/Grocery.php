<?php


if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Grocery extends CI_Controller {

    function __construct() {
        parent::__construct();

                        $this->load->database();
                        $this->load->helper('url');
        		$this->load->library('grocery_CRUD');
                      
			//$this->load->view('home/index');
			
    }

    public function index() {
        
       
        }

    public function patentes() {
        $crud = new grocery_CRUD();

        $crud->set_table('patente');
        $output = $crud->render();

        $this->_example_output($output);
    }

    function _example_output($output = null) {
        $this->load->view('BD.php', $output);
    }

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */