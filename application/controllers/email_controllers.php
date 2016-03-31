<?php

class Email_controllers extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ChuKi_models');
    }

    public function load() {
        $data['chuKi'] = $this->get_info_ChuKi();
        $this->load->view("admin/email_views", $data);
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

}
