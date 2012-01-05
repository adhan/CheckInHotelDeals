<?php
class City extends MY_Controller{
    
    public function __construct(){
        parent::__construct();
        
        //load models and library
        
        //load header+footer+title

    }
    
    public function view($city_id){
    	echo('<b>City controller: </b>view by city id: '.$city_id);	
    }
    
    public function view_by_name($city_name){
    	echo('<b>City controller: </b>view by city name: '.$city_name);
    }
}