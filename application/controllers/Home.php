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

    //Menampilkan Hasil Searching
    public function searchlaporan(){
      $key = $this->input->post('keyword');
      $data['lapor'] = $this->Lapor_model->searchbykey($key);
      
      $title['judul'] = 'Home';
      $this->load->view('templates/header',$title);
      $this->load->view('pages/home',$data);
      $this->load->view('templates/footer');
    }

    //Menampilkan Menu Lapor
    public function loadlapor(){
      $title['judul'] = 'Create';
      $this->load->view('templates/header',$title);
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

    //Menghapus Laporan/komentar
    public function hapus($id){
      $this->Lapor_model->deleteDataById($id);
      redirect("home");
    }

    
    
    //Mengedit Laporan
    public function ubah($id){
      $data['lapor'] = $this->Lapor_model->getDataById($id);
      $title['judul'] = 'Update';
      $this->load->view('templates/header',$title);
      $this->load->view('pages/update',$data);
      $this->load->view('templates/footer');
    }

    public function edit_simpan($id){
      $upload = $this->Lapor_model->upload();
      $this->Lapor_model->editData($id, $upload);
      redirect(base_url());
    }
}