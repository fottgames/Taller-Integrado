<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Patentes extends CI_Controller
	{

		function __construct(){
			parent::__construct();
			$this->load->model('PatentesModel');
		}

		public function index(){

			if (isset($_REQUEST['enviar'])) {
				$_SESSION['date1'] = $_REQUEST['date1'];
				$_SESSION['date2'] = $_REQUEST['date2'];
				$_SESSION['n_solicitud'] = $_REQUEST['n_solicitud'];
				$_SESSION['n_registro'] = $_REQUEST['n_registro'];
				$_SESSION['solicitante'] = $_REQUEST['solicitante'];
				$_SESSION['descripcion'] = $_REQUEST['descripcion'];
				$data = array(
					'n_solicitud' => $_SESSION['n_solicitud'],
					'n_registro' => $_SESSION['n_registro'],
					'solicitante' => $_SESSION['solicitante'],
					'descripcion' => $_SESSION['descripcion'],
					'start_date' => $_SESSION['date1'],
					'end_date' => $_SESSION['date2']
				);
			}else{
				$data = array(
					'n_solicitud' => $_SESSION['n_solicitud'],
					'n_registro' => $_SESSION['n_registro'],
					'solicitante' => $_SESSION['solicitante'],
					'descripcion' => $_SESSION['descripcion']
				);
			}
			//echo $_SESSION['date1']."    -    ".$_SESSION['date2'];
			$data['titulo'] = "Todas las patentes";
			$data['currentPage'] = "Patentes";
			//$datosPatentes['patentes'] = $this->PatentesModel->getAllPatentes();
			//$this->load->library('pagination');
			//$config = array();
			//$config['total_rows'] = $this->PatentesModel->count_actor();
			//$config['per_page'] = 10;
			//$config['base_url'] = 'http://localhost/taller-integrado/';
			
			//$data['links'] = $this->pagination->create_links();
			$this->load->library('pagination');

			$config['base_url'] = base_url().'Patentes/index';
			$config['total_rows'] = $this->PatentesModel->count_actor();
			$config['per_page'] = 10;
			//$data['actor'] = $this->PatentesModel->fetch_actor($config['per_page'], $this->uri->segment(3));
			if (!empty($data['start_date']) and !empty($data['end_date'])) {
				$data['actor'] = $this->PatentesModel->like_date($data['start_date'], $data['end_date'], $config['per_page'], $this->uri->segment(3));
			}elseif (!empty($data['n_solicitud'])) {
				$data['actor'] = $this->PatentesModel->like_n_solicitud($data['n_solicitud'], $config['per_page'], $this->uri->segment(3));
			}elseif(!empty($data['n_registro'])){
				$data['actor'] = $this->PatentesModel->like_n_registro($data['n_registro'], $config['per_page'], $this->uri->segment(3));
			}elseif(!empty($data['solicitante'])){
				$data['actor'] = $this->PatentesModel->like_n_solicitante($data['solicitante'], $config['per_page'], $this->uri->segment(3));
			}elseif(!empty($data['descripcion'])){
				$data['actor'] = $this->PatentesModel->like_n_descripcion($data['descripcion'], $config['per_page'], $this->uri->segment(3));
			}

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

		public function search(){
			$data['titulo'] = "Buscar Patentes";
			$data['currentPage'] = "Patentes";
			$this->load->view('plantilla/header', $data);
			$this->load->view('plantilla/navbar');
			$this->load->view('patentes/searcher');
			$this->load->view('plantilla/footer');
		}
	}
?>