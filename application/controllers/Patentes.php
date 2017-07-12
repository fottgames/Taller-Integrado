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
			//$this->load->library('pagination');
			//$config = array();
			//$config['total_rows'] = $this->PatentesModel->count_actor();
			//$config['per_page'] = 10;
			//$config['base_url'] = 'http://localhost/taller-integrado/';
			
			//$data['links'] = $this->pagination->create_links();
			$this->load->library('pagination');

			$config['base_url'] = base_url().'Patentes/index';
			$config['total_rows'] = $this->PatentesModel->count_actor();
			$config['per_page'] = 8;
			$data['actor'] = $this->PatentesModel->fetch_actor($config['per_page'], $this->uri->segment(3));

			$config['full_tag_open'] = "<ul class='pagination'>";
			$config['full_tag_close'] = "</ul>";
			$config['num_tag_open'] = "<li>";
			$config['num_tag_close'] = "</li>";
			$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
			$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
			$config['next_tag_open'] = "<li>";
			$config['next_tagl_close'] = "</li>";
			$config['prev_tag_open'] = "<li>";
			$config['prev_tagl_close'] = "</li>";
			$config['first_tag_open'] = "<li>";
			$config['first_tagl_close'] = "</li>";
			$config['last_tag_open'] = "<li>";
			$config['last_tagl_close'] = "</li>";

			$this->pagination->initialize($config);

			

			$this->load->view('plantilla/header', $data);
			$this->load->view('plantilla/navbar');
			$this->load->view('patentes/patentes_list', $data);
			//$this->load->view('patentes/index', $datosPatentes);
			$this->load->view('plantilla/footer');
		}
	}
?>