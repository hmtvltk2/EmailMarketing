<?php

class Templates_controllers extends CI_Controller {

    public function __construct() {
        parent::__construct();
         $this->load->model('ChuKi_models');
    }

    public function get_info_ChuKi() {
        $id = '1';
        $info = $this->ChuKi_models->get_info($id);
        return $info;
    }
    
    public function load() {
        $data['chuKi'] = $this->get_info_ChuKi();
       $this->load->view("admin/templates_views",$data);
    }

}
