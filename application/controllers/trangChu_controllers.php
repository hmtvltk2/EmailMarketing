<?php

class TrangChu_controllers extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('LoaiDanhSach_models');
        $this->load->model('TaiKhoan_models');
        $this->load->model('ThuDienTu_models');
        $this->load->model('ChienDich_models');
        $this->load->model('ThietLapGui_models');
        $this->load->model('khachHang_models');
    }

    public function get_id_Cuoi() {
        $input = array();
        $input['order'] = array('maChienDich', 'desc');
        $input['limit'] = array(1, 0);
        $info = $this->ChienDich_models->get_list($input);
        foreach ($info as $k => $r) {
            $b = $r->maChienDich;
            return $b;
        }
    }

    public function load() {
        $id = $this->get_id_Cuoi();
        $data['info'] = $this->get_info_ChienDich($id);
        $data['chienDich'] = $this->get_list_chienDich();
        $this->load->view("admin/report_views", $data);
    }

    public function get_list_chienDich() {
        $input = array();
        $info = $this->ChienDich_models->get_list($input);
        return $info;
    }
       public function get_info_ChienDich($id) {
        $info = $this->ChienDich_models->get_info($id);
        return $info;
    }
}
?>