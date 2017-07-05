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

		function getInventors(){
			$query = $this->db->get('patente_inventor');
			return $query->result();
		}
	}
?>