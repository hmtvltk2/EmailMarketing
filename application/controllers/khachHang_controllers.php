<?php

class KhachHang_controllers extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('loaiDanhSach_models');
        $this->load->model('KhachHang_models');
    }

    public function load() {
        // danh sách đã tạo
        $data1 = $this->get_list_LKH();
        $data2['ds1'] = array();
        foreach ($data1 as $k => $r) {
            // thêm cột tổng số email trong 1 danh sach
            $data2['ds1'][$k] = get_object_vars($r);
            $data2['ds1'][$k]['num'] = $this->get_num_KH_LKH($data2['ds1'][$k]['maLoai']);
        }


        // lấy danh sách khách hàng của danh sách mới nhất
        $data2['ds2'] = $this->get_list_KH();
        $this->load->view("admin/customer_views", $data2);
    }

    public function insert_LKH() {
        $data = array();
        $data['tenloai'] = $this->input->post('ten');
        $data['ngayTao'] = $this->input->post('ngay');
        if ($this->loaiDanhSach_models->create($data)) {
            echo 1;
        } else {
            echo 0;
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
        $id = $this->input->post('id');
        if ($this->loaiDanhSach_models->delete($id)) {
            echo 1;
        } else {
            echo 0;
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

    // đếm số khách hàng trong 1 danh sách
    public function get_num_KH_LKH($maLoaiKhachHang) {
        $input['where'] = array('maLoaiKhachHang' => $maLoaiKhachHang);
        $info = count($this->KhachHang_models->get_list($input));
        return $info;
    }

    public function insert_KH1() {
        $data = array();
        $data['tenKhachHang'] = $this->input->post('ten');
        $data['email'] = $this->input->post('email');
        $data['maLoaiKhachHang'] = $this->input->post('maLoaiKhachHang');

        if ($this->check_email($data['email'], $data['maLoaiKhachHang'])) {
            if ($this->KhachHang_models->create($data)) {
                echo 1;
            } else {
                echo 0;
            }
        } else {
            echo 0;
        }
    }

    // lấy khách hàng theo danh sách
    public function get_list_KH_LoaiKhachHang() {
        $input = array();
        $id = $this->input->post('id');
        $input['where'] = array('maLoaiKhachHang' => $id);
        $info = $this->KhachHang_models->get_list($input);
        echo json_encode($info);
    }

    public function get_list_KH() {
        $input = array();
        $input['limit'] = array(15, 0);
        $info = $this->KhachHang_models->get_list($input);
        return $info;
    }

    public function delete_KH() {
        $id = $this->input->post('id');
        if ($this->KhachHang_models->delete($id)) {
            echo 1;
        } else {
            echo 0;
        }
    }

    // thông tin của 1 khách hàng theo id
    public function get_info_KH() {
        $id = $this->input->post('id');
        $info = $this->KhachHang_models->get_info($id);
        echo json_encode($info);
    }

    // kiểm tra email đó đã có trong danh sách chưa
    public function check_email($email, $maLoaiKhachHang) {
        $input = array();
        $input['where'] = array('email' => $email, 'maLoaiKhachHang' => $maLoaiKhachHang);
        $info = $this->KhachHang_models->get_list($input);
        if (count($info) != 0) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    // sửa khách hàng
    public function update_KH() {
        $data = array();
        $id = $this->input->post('maKhachHang');
        $data['tenKhachHang'] = $this->input->post('ten');
        $data['email'] = $this->input->post('email');
        $data['maLoaiKhachHang'] = $this->input->post('maLoaiKhachHang');

        if ($this->check_email($data['email'], $data['maLoaiKhachHang'])) {

            if ($this->KhachHang_models->update($id, $data)) {
                echo 1;
            } else {
                echo 0;
            }
        } else {
            echo 0;
        }
    }

    function extract_emails($str) {
        $regexp = '/([a-z0-9_\.\-])+\@(([a-z0-9\-])+\.)+([a-z0-9]{2,4})+/i';
        preg_match_all($regexp, $str, $m);
        return isset($m[0]) ? $m[0] : array();
    }

    public function insert_KH2() {
        $ch = curl_init();
        $timeout = 10000;
        $count = 0;
        $url = $this->input->post('url');
        $maLoaiKhachHang = $this->input->post('maLoaiKhachHang');
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $file_contents = curl_exec($ch);
        curl_close($ch);
        foreach ($this->extract_emails($file_contents) as $k => $r) {
            if($this->insert_KH($r, $maLoaiKhachHang))
            {
                $count++;
            }
        }
        echo $count;
        //http://phongmarketing.com/dl/276-danh-sach-1-trieu-dia-chi-email-chon-loc-cho-email-marketing.html
    }

    public function insert_KH($email, $maDanhSach) {
        $data = array();
        $data['tenKhachHang'] = "";
        $data['email'] = $email;
        $data['maLoaiKhachHang'] = $maDanhSach;

        if ($this->check_email($data['email'], $data['maLoaiKhachHang'])) {
            if ($this->KhachHang_models->create($data)) {
                return true;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }
}