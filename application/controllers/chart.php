<?php 
 
if (!defined('BASEPATH')) exit('No direct script access allowed'); 
class Chart extends CI_Controller 
 
    { 
    function __construct() 
        { 
        parent::__construct(); 
        
        
        $this->load->model('chart_model'); 
        // $this->load->library('form_validation'); 
 
        $this->load->helper('string'); 
        } 
 
    public 
 
    function index() 
        { 
         $this->load->view('plantilla/header');
         
         $this->load->view('plantilla/navbar');
        //$this->load->view('View_login');

        $this->load->view('view_chart');
         //$this->load->view('plantilla/footer');
        //echo 'index';
        //echo base_url() . 'chart/getdata';
    }

    public function getdata() 
        { 
        $data = $this->chart_model->cargartabla(); 
 
        //         //data to json 
 
        $responce->cols[] = 
                array(
                    
                    "id" => "", 
            "label" => "nro", 
            "pattern" => "", 
            "type" => "string" 
                    
                    
                    ); 
        
        
        $responce->cols[] = 
                array(
                    
            "id" => "", 
            "label" => "numero depatentes por año ", 
            "pattern" => "", 
            "type" => "number" 
                    
                    ); 
        
        
        foreach($data as $cd) 
            { 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->ano", 
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$cd->nro, 
                    "f" => null 
                ) 
            ); 
            } 
 
        echo json_encode($responce); 
        } 
    }