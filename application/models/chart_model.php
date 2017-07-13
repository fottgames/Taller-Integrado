 <?php 
class Chart_model extends CI_Model 
{ 
    function __construct() 
    { 
        parent::__construct(); 
    } 
    //get fruts data 
    public function get_all_fruits() 
    { 
        //echo 'pase por el modelo';
        return $this->db->get('patente')->result(); 
    } 
} 