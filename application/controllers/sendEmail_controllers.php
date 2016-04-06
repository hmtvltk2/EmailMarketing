<?php

class SendEmail_controllers extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {

        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'nhasachindigo9111@gmail.com',
            'smtp_pass' => 'nhasachindigo',
            'smtp_timeout' => '4',
            'mailtype' => 'text',
            'charset' => 'iso-8859-1'
        );

        $this->load->library('email', $config);
       $this->email->set_newline("\r\n");  

        $this->email->from("nhasachindigo9111@gmail.com", "Nhà sách");
        $this->email->to("loannguyen9111@gmail.com");

        $this->email->subject('Email Test');
        $this->email->message('là lá la !');

        if ($this->email->send()) {
            echo'your email was sent.';
        } else {
            show_error($this->email->print_debugger());
        }
    }

}
