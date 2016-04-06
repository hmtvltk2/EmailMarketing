<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
         $this->session->unset_userdata('login');// xoa session
        
        $user_data = $this->session->userdata('login');
        if (!$user_data) {
             $this->load->view('admin/templates_views');
        } else {
            $this->load->view('admin/home_views');
        }
    }

}
