<?php

class KhachHang_controllers extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('loaiDanhSach_models');
    }

    public function load() {
        $data['loaiKhachHang'] =$this->get_list_LKH();
        $this->load->view("admin/customer_views", $data);
    }

    public function insert_LKH() {
        $data = array();
        $data['tenloai'] = $this->input->post('ten');
        $data['ngayTao'] = $this->input->post('ngay');

        if ($this->loaiDanhSach_models->create($data)) {
            $this->load->view("admin/customer_views");
        } else {
            echo " không thành công";
        }
    }

    public function update_LKH() {
        $id = '3';

        $data = array();
        $data['tenloai'] = "la la la";
        $data['ngayTao'] = "20/1/2013";

        if ($this->loaiDanhSach_models->update($id, $data)) {
            echo "sửa thành công";
        } else {
            echo " không thành công";
        }
    }

    public function delete_LKH() {
        $id = '4';

        if ($this->loaiDanhSach_models->delete($id)) {
            echo "xóa thành công";
        } else {
            echo " không thành công";
        }
    }

    public function get_info_LKH() {
        $id = '3';
        $info = $this->loaiDanhSach_models->get_info($id);
        echo "<pre>";
        print_r($info);
        echo "</pre>";
    }

    public function get_list_LKH() {
        $input = array();
        //$input['where'] = array('maLoai' => 3, 'ngayTao' =>"20/1/2013");
        //$input['order'] = array('maLoai','desc');
        //$input['limit'] = array(1,1);
        $info = $this->loaiDanhSach_models->get_list($input);
        return $info;
    }

}
