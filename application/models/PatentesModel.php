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
	}
?>