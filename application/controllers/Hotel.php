<?php
class Hotel extends MY_Controller{
    
    public function __construct(){
        parent::__construct();
        
        //load models and library
        
        //load header+footer+title

    }
    
    public function view($hotel_id){
    	echo('<b>Hotel controller: </b>view by hotel id: '.$hotel_id);	
    }
    
    public function view_by_name($hotel_name){
    	echo('<b>Hotel controller: </b>view by hotel name: '.$hotel_name);
    }
}