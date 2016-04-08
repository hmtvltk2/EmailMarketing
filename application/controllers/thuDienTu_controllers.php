<?php


class ThuDienTu_controllers extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('ThuDienTu_models');
        $this->load->model('ThietLapGui_models');
        $this->load->model('ChienDich_models');
    }

    public function get_num_thuDienTu_ChienDich($maThu) {
        $input['where'] = array('maThu' => $maThu);
        $info = count($this->ChienDich_models->get_list($input));
        return $info;
    }

    public function get_list_thuDienTu() {
        $input = array();
        $info = $this->ThuDienTu_models->get_list($input);
        return $info;
    }
    
    

    public function get_id_Cuoi() {
        $input = array();
        $input['order'] = array('maThu', 'desc');
        $input['limit'] = array(1, 0);
        $info = $this->ThuDienTu_models->get_list($input);
        foreach ($info as $k => $r) {
            $b = $r->maThu;
            return $b ;
        }
    }
    public function get_info_Thu($id) {
        $info = $this->ThuDienTu_models->get_info($id);
        return $info;
    }
    
     public function load() {
         
        $info = $this->get_info_Thu($this->get_id_Cuoi());
        $p = base_url().$info->noiDung;

        $data["myfile"] = fopen($p, "r") or die("Unable to open file!");
        
        $data1 = $this->get_list_thuDienTu();
        $data['thuDienTu'] = array();

        foreach ($data1 as $k => $r) {
            // thêm cột tổng số email trong 1 danh sach
            $data['thuDienTu'][$k] = get_object_vars($r);
            $data['thuDienTu'][$k]['num'] = $this->get_num_thuDienTu_ChienDich($data['thuDienTu'][$k]['maThu']);
        }
        
        $this->load->view('admin/view_email', $data);
    }
    

    public function xemThu($path, $name) {
        $p = $path . "/" . $name;

        $data["myfile"] = fopen($p, "r") or die("Unable to open file!");
        
        $data1 = $this->get_list_thuDienTu();
        $data['thuDienTu'] = array();

        foreach ($data1 as $k => $r) {
            // thêm cột tổng số email trong 1 danh sach
            $data['thuDienTu'][$k] = get_object_vars($r);
            $data['thuDienTu'][$k]['num'] = $this->get_num_thuDienTu_ChienDich($data['thuDienTu'][$k]['maThu']);
        }
        
        $this->load->view('admin/view_email', $data);
    }

    public function get_Thu() {
        $id = $this->input->post('id');
        $tenfile = "file_Email/" . $id . ".txt";

        $myfile = fopen($tenfile, "r") or die("Unable to open file!");
        $content = "";
        while (!feof($myfile)) {
            $content = $content . fgets($myfile);
        }
        fclose($myfile);
        echo $content;
    }
}
