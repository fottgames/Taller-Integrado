<?php  
	/**
	* 
	*/
	class PatentesModel extends CI_Model
	{
		function getAllPatentes(){
			$query = $this->db->get('patente');
			return $query->result();
		}

		public function count_actor(){
			return $this->db->count_all('patente');
		}

		public function fetch_actor($limit, $offset){
			$this->db->limit($limit, $offset);
			$query = $this->db->get('patente');
			if ($query->num_rows() > 0) {
				return $query->result();
			}else{
				return $query->result();
			}
		}

		public function like_n_solicitud($data, $limit, $offset){
			$this->db->limit($limit, $offset);
			$query = $this->db->where('n_solicitud', $data);
			$query = $this->db->get('patente');
			return $query->result();
		}

		public function like_n_registro($data, $limit, $offset){
			$this->db->limit($limit, $offset);
			$query = $this->db->where('n_registro', $data);
			$query = $this->db->get('patente');
			return $query->result();
		}

		public function like_n_solicitante($data, $limit, $offset){
			$this->db->limit($limit, $offset);
			$query = $this->db->like('solicitante', $data);
			$query = $this->db->get('patente');
			return $query->result();
		}

		public function like_n_descripcion($data, $limit, $offset){
			$this->db->limit($limit, $offset);
			$query = $this->db->like('descripcion', $data);
			$query = $this->db->get('patente');
			return $query->result();
		}

		public function like_date($start_date, $end_date, $limit, $offset){
			$this->db->limit($limit, $offset);
			$this->db->where("fecha_registro BETWEEN '$start_date' and '$end_date'");
			$query = $this->db->get('patente');
			return $query->result();
		}
	}
?>