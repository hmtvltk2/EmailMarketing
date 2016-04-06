<?php

require_once 'PHPMailerAutoload.php';

class SendEmail_controllers extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('thuDienTu_models');
        $this->load->model('ThietLapGui_models');
    }

    public function get_info_ThietLap() {
        $id = '1';
        $info = $this->ThietLapGui_models->get_info($id);
        return $info;
    }

    public function sendEmail() {
        $in = $this->get_info_ThietLap();
        
        $content = $this->input->post('content');

        $mail = new PHPMailer();
        $mail->IsSMTP();

        $mail->SMTPDebug = 3;
        $mail->Debugoutput = "html";
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587;
        $mail->SMTPSecure = "tls";
        $mail->SMTPAuth = true;
        $mail->Username = "nhasachindigo9111@gmail.com";
        $mail->Password = "vyirnwatrglkhhce";
        $mail->SetFrom("nhasachindigo9111@gmail.com", "Test Email");
        $mail->AddReplyTo("nhasachindigo9111@gmail.com", "Test Reply");
        $mail->AddAddress("loannguyen9111@gmail.com", "Loan Nguyễn");

        $mail->CharSet = "utf-8";

        $mail->Subject = "Tiêu đề thư";

        $mail->MsgHTML($content);
        // Gửi thư với tập tin html

        $mail->AltBody = "This is a plain-text message body";
        //  $mail->AddAttachment("images/attact-tui.gif"); //Tập tin cần attach
        //Tiến hành gửi email và kiểm tra lỗi

        if (!$mail->Send()) {
            echo "Có lỗi khi gửi mail: " . $mail->ErrorInfo;
        } else {
            echo "Đã gửi thư thành công!";
        }
    }

    public function luuEmail() {
        $content = $this->input->post('content');
        echo $content;
        $tieuDeThu = $this->input->post('tieuDeThu');
        $tenThu = $this->input->post('tenThu');
        $idcuoi = $this->get_id_Cuoi();
        $tenfile = "file_Email/" . $idcuoi . ".txt";
        $myfile = fopen($tenfile, "w") or die("Unable to open file!");
        $data = array();
        $data['tenThu'] = $tenThu;
        $data['tieuDe'] = $tieuDeThu;
        $data['noiDung'] = $tenfile;
        fwrite($myfile, $content);
        fclose($myfile);
        if ($this->thuDienTu_models->create($data)) {
            echo 1;
        } else {
            echo 0;
        }
    }

    public function get_id_Cuoi() {
        $input = array();
        $input['order'] = array('maThu', 'desc');
        $input['limit'] = array(1, 0);
        $info = $this->thuDienTu_models->get_list($input);
        foreach ($info as $k => $r) {
            $b = $r->maThu;
            $id = (int) ($b);
            return $id + 1;
        }
    }

    public function xemThu($path, $name) {
        $p = $path . "/" . $name;

        $data["myfile"] = fopen($p, "r") or die("Unable to open file!");
        $this->load->view('admin/view_email', $data);
    }

}
