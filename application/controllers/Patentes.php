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
			$this->load->library('pagination');
			$config['total_rows'] = $this->PatentesModel->count_actor();
			$config['per_page'] = 10;
			$this->pagination->initialize($config);
			$data['actor'] = $this->PatentesModel->fetch_actor($config['per_page'], $this->uri->segment(3));

			$this->load->view('plantilla/header', $data);
			$this->load->view('plantilla/navbar');
			$this->load->view('patentes/patentes_list', $data);
			//$this->load->view('patentes/index', $datosPatentes);
			$this->load->view('plantilla/footer');
		}
	}
?>