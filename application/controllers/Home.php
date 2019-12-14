<?php

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Lapor_model');
    }

    public function index()
    {
        
        $data['judul'] = 'Home';
        $data['lapor'] = $this->Lapor_model->getAllLaporan();
        $this->load->view('templates/header',$data);
        $this->load->view('home/index',$data);
        $this->load->view('templates/footer');
    }
}