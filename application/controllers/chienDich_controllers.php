<?php
require_once 'PHPMailerAutoload.php';
class ChienDich_controllers extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('LoaiDanhSach_models');
        $this->load->model('TaiKhoan_models');
        $this->load->model('ThuDienTu_models');
        $this->load->model('ChienDich_models');
        $this->load->model('ThietLapGui_models');
        $this->load->model('khachHang_models');
    }

    public function get_info_ThietLap() {
        $id = '1';
        $info = $this->ThietLapGui_models->get_info($id);
        return $info;
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

    public function get_info_ChienDich($id) {
        $info = $this->ChienDich_models->get_info($id);
        return $info;
    }

    public function sendEmail_list() {
        $count = 0;
        $id = $this->get_id_Cuoi();
        $cd = $this->get_info_ChienDich($id);

        print_r($cd);
        $tenGui = $cd->tenGui;
        $id_maDSKH = $cd->maDanhSachKhachHang;
        
        $id_maThu = $cd->maThu;
        $info_thuDienTu = $this->get_info_ThuDienTu($id_maThu);
        $info_DSKH = $this->get_KH_LKH($id_maDSKH);

        // lấy nội dung của thư
        $path = $info_thuDienTu->noiDung;
        $tieuDeThu = $info_thuDienTu->tieuDe;
        $myfile = fopen($path, "r") or die("Unable to open file!");
        $content = "";
        while (!feof($myfile)) {
            $content = $content . fgets($myfile);
        }
        fclose($myfile);

       
        // lấy danh sách email cần gửi
        foreach ($info_DSKH as $k => $r) {
            if($this->sendEmail($tenGui, $r->email, $r->tenKhachHang, $tieuDeThu, $content)){
                $count++;
            }
        }
        
       // echo $count;   
    }

    public function get_KH_LKH($maLoaiKhachHang) {
        $input['where'] = array('maLoaiKhachHang' => $maLoaiKhachHang);
        $info = $this->khachHang_models->get_list($input);
        return $info;
    }

    public function sendEmail($tenGui, $emailNhan, $tenNhan, $tieuDeThu, $content) {
        $in = $this->get_info_ThietLap();
        $mail = new PHPMailer();
        $mail->IsSMTP();

        $mail->SMTPDebug = 3;
        $mail->Debugoutput = "html";
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587;
        $mail->SMTPSecure = "tls";
        $mail->SMTPAuth = true;
        $mail->CharSet = "utf-8";
        $mail->Username = $in->emailGui;
        $mail->Password = $in->matKhauEmail;
        $mail->SetFrom($in->emailGui, $tenGui);
        $mail->Subject = $tieuDeThu;
        $mail->AddReplyTo($in->emailNhanTraLoi, $tenGui);
        $mail->AddAddress($emailNhan, $tenNhan);
        $mail->MsgHTML("haha");

        //  $mail->AddAttachment("images/attact-tui.gif"); //Tập tin cần attach
        //Tiến hành gửi email và kiểm tra lỗi

        if (!$mail->Send()) {
            //echo "Có lỗi khi gửi mail: " . $mail->ErrorInfo;
            echo 0;
        } else {
            //echo "Đã gửi thư thành công!";
            echo 1;
        }
    }

    public function load() {
        $data['dskh'] = $this->get_list_LKH();

        $data1 = $this->get_list_thuDienTu();

        $data['thuDienTu'] = array();

        foreach ($data1 as $k => $r) {
            // thêm cột tổng số email trong 1 danh sach
            $data['thuDienTu'][$k] = get_object_vars($r);
            $data['thuDienTu'][$k]['num'] = $this->get_num_thuDienTu_ChienDich($data['thuDienTu'][$k]['maThu']);
        }

        $data['taiKhoan'] = $this->get_info_TaiKhoan();
        $data['chienDich'] = $this->get_list_chienDich();
        $this->load->view("admin/campaign_views", $data);
    }

    public function get_list_LKH() {
        $input = array();
        $info = $this->LoaiDanhSach_models->get_list($input);
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

    // đếm số lần thư đã được gửi đi
    public function get_num_thuDienTu_ChienDich($maThu) {
        $input['where'] = array('maThu' => $maThu);
        $info = count($this->ChienDich_models->get_list($input));
        return $info;
    }

    public function get_info_TaiKhoan() {
        $id = '1';
        $info = $this->TaiKhoan_models->get_info($id);
        return $info;
    }

    public function insert_ChienDich() {
        $data = array();
        $data['tenChienDich'] = $this->input->post('tenChienDich');
        $data['ngayGui'] = $this->input->post('ngay');
        $data['tenGui'] = $this->input->post('tenGui');
        $data['emailGui'] = $this->input->post('emailGui');
        $data['maDanhSachKhachHang'] = $this->input->post('maDSKH');
        $data['loiNhac'] = $this->input->post('lyDo');
        $data['maThu'] = $this->input->post('maThuGui');
        $data['SLgui'] = 0;
        $data['SLmo'] = 0;
        $data['SLclickLink'] = 0;

        if ($this->ChienDich_models->create($data)) {
            echo 1;
        } else {
            echo 0;
        }
    }

    public function get_info_thuDienTu($id) {
        $info = $this->ThuDienTu_models->get_info($id);
        return $info;
    }

    public function delete_thuDienTu() {
        $id = $this->input->post('id');

        if ($this->ThuDienTu_models->delete($id)) {
            $path = "file_Email/" . $id . ".txt";
            if (file_exists($path)) {
                unlink($path);
            }
            echo 1;
        } else {
            echo 0;
        }
    }

}
