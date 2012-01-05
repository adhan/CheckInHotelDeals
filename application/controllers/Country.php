<?php
class Country extends MY_Controller{
    
    public function __construct(){
        parent::__construct();
        
        //load models and library
        
        //load header+footer+title

    }
    
    public function view($country_id){
    	echo('<b>Country controller: </b>view by country id: '.$country_id);	
    }
    
    public function view_by_name($country_name){
    	echo('<b>Country controller: </b>view by country name: '.$country_name);
    }
}