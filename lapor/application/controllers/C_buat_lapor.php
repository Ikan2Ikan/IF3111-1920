<?php 
class C_buat_lapor extends CI_Controller{
    public function index(){
        $this->load->view('header');
        $this->load->view('v_buat_lapor');
        $this->load->view('footer');
    }
}