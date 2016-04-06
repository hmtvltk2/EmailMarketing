<?php

class ChienDich_controllers extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('loaiDanhSach_models');
        $this->load->model('TaiKhoan_models');
        $this->load->model('ThuDienTu_models');
         $this->load->model('ChienDich_models');
    }

    public function load() {
      $data['dskh'] = $this->get_list_LKH();
       $data['thuDienTu'] = $this->get_list_thuDienTu();
      $data['taiKhoan'] = $this->get_info_TaiKhoan();
       $data['chienDich'] = $this->get_list_chienDich();
      $this->load->view("admin/campaign_views", $data);
    }

      public function get_list_LKH() {
        $input = array();
        $info = $this->loaiDanhSach_models->get_list($input);
        return $info;
    }
    
     public function get_list_chienDich() {
        $input = array();
        $info = $this->ChienDich_models->get_list($input);
        return $info;
    }
    
    public function get_list_thuDienTu() {
        $input = array();
        $info = $this->ThuDienTu_models->get_list($input);
        return $info;
    }
    
    public function get_info_TaiKhoan() {
        $id = '1';
        $info = $this->TaiKhoan_models->get_info($id);
        return $info;
    }
    
    
}
