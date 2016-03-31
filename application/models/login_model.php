<?php

class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function login($User) {
        $this->db->select('tenTaiKhoan,matKhau');
        $this->db->from('taikhoan');
        $this->db->where('tenTaiKhoan', $User->GETtenTaiKhoan());
        $this->db->where('matKhau', $User->GETmatKhau());
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
           return false;
        }
    }

}
