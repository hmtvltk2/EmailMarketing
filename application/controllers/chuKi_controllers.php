<?php
class ChuKi_controllers extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ChuKi_models');
         $this->load->model('loaiDanhSach_models');
         $this->load->model('taiKhoan_models');
    }
    
     public function index(){
         echo "haha";
     }
    public function get_info_ChuKi() {
        $id = '1';
        $info = $this->ChuKi_models->get_info($id);
        return $info;
    }
    
   
    
}