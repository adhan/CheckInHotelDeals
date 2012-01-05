<?php
class Home extends MY_Controller{
    
    public function __construct(){
        parent::__construct();
        
        //load models
    }

    //main landing page
    public function index(){
        
        //load all neccesary main data
        $data = array(
        			   'header' => NULL,
        			   'footer' => NULL,
        			 );

        //load page template
        $this->load->view('home', $data);
    } 
     
}