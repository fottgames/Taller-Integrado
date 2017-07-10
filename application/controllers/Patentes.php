<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Patentes extends CI_Controller
	{

		function __construct(){
			parent::__construct();
			$this->load->model('PatentesModel');
		}

		public function index(){

			$data['titulo'] = "Todas las patentes";
			$data['currentPage'] = "Patentes";
			$datosPatentes['patentes'] = $this->PatentesModel->getAllPatentes();
			$this->load->view('plantilla/header', $data);
			$this->load->view('plantilla/navbar');
			$this->load->view('patentes/index', $datosPatentes);
			$this->load->view('plantilla/footer');
		}
	}
?>