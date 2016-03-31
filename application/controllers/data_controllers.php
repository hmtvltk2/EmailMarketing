<?php

class Data_controllers extends CI_Controller {

    public function _construct() {
        parent::_construct();
    }

    public function index() {
        echo "hahaha";
    }

    private $table = 'khachhang';

    public function getData() {
        $this->load->model('data_models');
        //$this->data_models->insert();
        //$this->data_models->update();
//        $this->data_models->delete();
//        echo "<pre>";
//        print_r($this->data_models->getData($this->table));
//        echo "</pre>";

        $array['bang'] = $this->data_models->getData($this->table);

//        $bang = $array['bang']['0'];
//        foreach ($bang as $key => $value) {
//           // echo ($key) . ' - ' . $value['maKhachHang'] . ' - ' . $value['maLoaiKhachHang'] . ' - ' . $value['tenKhachHang'] . ' - ' . $value['email'];
//            echo $value.'</br>';
//            
//        }

        $this->load->view('data_views',$array);
    }

}
