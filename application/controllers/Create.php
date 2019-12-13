<?php

class Create extends CI_Controller {
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('create/index');
        $this->load->view('templates/footer');
    }
}

?>