<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

     public function __construct() {
        parent::__construct();
    }
    public function index() {
        $user_data = $this->session->userdata('login');
        echo $user_data;
        if (!$user_data) {
             $this->load->view('admin/login_views');
        } else {
             Redirect(base_url()."TrangChu_controllers/load");
        }
    }

}
