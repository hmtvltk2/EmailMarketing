<?php

class Templates_controllers extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        echo "hahaha";
    }
    public function load() {
       $this->load->view("admin/templates_views");
    }

}
