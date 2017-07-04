<?php  
	/**
	* 
	*/
	class Home extends CI_Controller
	{
		public function index(){
			$data['titulo'] = "Bienvenida";
			$this->load->view('plantilla/header', $data);
			$this->load->view('home/index');
			$this->load->view('plantilla/footer');
		}		
	}
?>