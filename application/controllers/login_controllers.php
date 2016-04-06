<?php

include 'table/obj_taiKhoan.php';

class Login_controllers extends CI_Controller {

    private $User;

    public function __construct() {
        parent::__construct();
        $this->User = new Obj_taiKhoan();
    }

    public function index() {
            

        $this->User->SETtenTaiKhoan($this->input->post('username'));
        $this->User->SETmatKhau($this->input->post('password'));

        
         $this->load->model('login_model');
        $query = $this->login_model->login($this->User);
        
        if ($query) {
            foreach ($query as $row) {
               // $newdata = array('username' => $row->tenTaiKhoan, 'passwords' => $row->matKhau);
           
                $this->session->set_userdata('login',$row->tenTaiKhoan);
                $this->load->view('admin/home_views');
            }
        } else {
           // $this->load->view("admin/login_views");
             echo "loan hến";
        }
        
    }

//    public function login() {
//        $this->form_validation->set_rules('username', 'Username', 'required');
//        $this->form_validation->set_rules('password', 'Password', 'required|');
//        if ($this->form_validation->run() == FALSE) {
//            $this->load->view("admin/login_views");
//        } else {
//            $this->User->SETtenTaiKhoan($this->input->post('username'));
//            $this->User->SETmatKhau($this->input->post('passwords'));
//            
//            $this->load->model('login_model');
//            
//            $query = $this->login_model->login($this->User);
//        }
//        if ($query) {
//            foreach ($query as $row) {
//                $newdata = array('username' => $row->id, 'passwords' => $row->emails);
//                $this->session->set_userdata($newdata);
//                //redirect();
//                echo "loan tèo";
//            }
//        } else {$this->load->view("admin/login_views");}
//    }
}
