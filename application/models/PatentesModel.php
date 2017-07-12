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
	}
?>