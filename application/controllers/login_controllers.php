<?php

class Login_controllers extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('TaiKhoan_models');
    } 
    public function logout() {
        $this->session->unset_userdata('login');
        $this->load->view("admin/login_views");
    }

      public function get_list_TK($password,$username) {
        $input = array();
        $input['where'] = array('tenTaiKhoan' => $username, 'matKhau' =>"$password");
        $info = $this->TaiKhoan_models->get_list($input);
        return $info;
    }
    
    public function login() {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $query = $this->get_list_TK($password, $username);

        if ($query) {
            foreach ($query as $row) {
                $this->session->set_userdata('login', $row->tenTaiKhoan);
                Redirect(base_url()."TrangChu_controllers/load");
            }
        } else {
            $this->load->view("admin/login_views");
        }
    }

}
