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
        return $this->db->get('patentes')->result(); 
    } 
} 