<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Lapor_model');
        $this->load->helper(array('form','url'));
    }

    //Menampilkan Semua Data pada tampilan utama
    public function index()
    {
        $data['lapor'] = $this->Lapor_model->getAllLaporan();
        $title['judul'] = 'Home';
        $this->load->view('templates/header',$title);
        $this->load->view('pages/home',$data);
        $this->load->view('templates/footer');
    }

    //Menampilkan Menu Lapor
    public function loadlapor(){
      $this->load->view('templates/header');
      $this->load->view('pages/create');
      $this->load->view('templates/footer');
    }

    //Menampilkan data melalui id
    public function detail($id){
      $data['lapor'] = $this->Lapor_model->getDataById($id);
      $title['judul'] = 'Detail';
      $this->load->view('templates/header',$title);
      $this->load->view('pages/detail',$data);
      $this->load->view('templates/footer');
    }
    
    //Menambahkan dan Menginsertkan kedatabase
    public function tambah(){
      $upload = $this->Lapor_model->upload();
      $this->Lapor_model->create($upload);
      redirect('home');
    }
    

}