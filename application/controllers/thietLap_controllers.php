<?php

class ThietLap_controllers extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ChuKi_models');
        $this->load->model('TaiKhoan_models');
        $this->load->model('ThietLapGui_models');
    }

     public function get_info_TaiKhoan() {
        $id = '1';
        $info = $this->TaiKhoan_models->get_info($id);
        return $info;
    }
      public function get_info_ThietLap() {
        $id = '1';
        $info = $this->ThietLapGui_models->get_info($id);
        return $info;
    }
    
    public function load() {
        $data['chuKi'] = $this->get_info_ChuKi();
         $data['taiKhoan'] = $this->get_info_TaiKhoan();
         $data['thietLap'] = $this->get_info_ThietLap();
        $this->load->view("admin/setting_views", $data);
    }

    public function get_info_ChuKi() {
        $id = '1';
        $info = $this->ChuKi_models->get_info($id);
        return $info;
    }

    public function get_info_ChuKi_sua() {
        $id = '1';
        $info = $this->ChuKi_models->get_info($id);
        echo json_encode($info);
    }

    public function update_ChuKi() {
        $data = array();
        $id = "1";
        $data['soDienThoai'] = $this->input->post('sdt');
        $data['tenCongTy'] = $this->input->post('tenCongTy');
        $data['diaChiCongTy'] = $this->input->post('diaChi');
        $data['websiteCongTy'] = $this->input->post('website');

        if ($this->ChuKi_models->update($id, $data)) {
            echo 1;
        } else {
            echo 0;
        }
    }

    public function update_TaiKhoan() {
        $data = array();
        $id = "1";
        $data['email'] = $this->input->post('email_gui_tk');
        $data['tenTaiKhoan'] = $this->input->post('ten_tk');
        $data['matKhau'] = $this->input->post('mk_tk');

        if ($this->TaiKhoan_models->update($id, $data)) {
            echo 1;
        } else {
            echo 0;
        }
    }
     
}
