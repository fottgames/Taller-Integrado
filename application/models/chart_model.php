 <?php 
class Chart_model extends CI_Model 
{ 
    function __construct() 
    { 
        parent::__construct(); 
    } 
    //get fruts data 
    public function cargartabla() 
    { 
        //echo 'pase por el modelo';
        
        return $this->db->query('SELECT COUNT(n_solicitud) as nro, year(fecha_registro) as ano FROM patente GROUP BY year(fecha_registro)
;')->result(); 
        
         //return $this->db->get('patente')->result(); 
        
    } 
} 