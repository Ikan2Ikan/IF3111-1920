<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Lapor_model');
        $this->load->helper(array('form','url'));
    }

    public function index()
    {
        $data['lapor'] = $this->Lapor_model->getAllLaporan();
        $title['judul'] = 'Home';
        $this->load->view('templates/header',$title);
        $this->load->view('pages/home',$data);
        $this->load->view('templates/footer');
    }
     
    public function tambah(){
      $upload = $this->Lapor_model->upload();
      $this->Lapor_model->create($upload);

      redirect('home');
    }

    public function details(){
      $data['lapor'] = $this->Lapor_model->getbyid($id);
    }

    public function loadlapor(){
      $this->load->view('templates/header');
      $this->load->view('pages/create');
      $this->load->view('templates/footer');
    }
    

}