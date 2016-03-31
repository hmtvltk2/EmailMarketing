<?php

class Home_controllers extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        $data = array (
            "title" => "code",
             "author" => "loan",  
        );
        $data['info']=array(
            "name" => "keny",
            "email" => "loan@gmail.com",
            "level" => "2",
        );
       // $this->load->view("index_view",$data);
         echo "<pre>";
       print_r($data);
       echo "</pre>";
    }
    
    public function demo(){
        echo "loan xi xon";
    }
    
    public function data($id){
        echo "Data : $id";
    }
}
