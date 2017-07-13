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
         $this->load->view('plantilla/footer');

        } 
 
    public 
 
    function getdata() 
        { 
        $data = $this->chart_model->get_all_fruits(); 
 
        //         //data to json 
 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd) 
            { 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->solicitante", 
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$cd->quantity, 
                    "f" => null 
                ) 
            ); 
            } 
 
        echo json_encode($responce); 
        } 
    }