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
      
    public function tambah(){
        $data = array();
        
        if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
          // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
          $upload = $this->Lapor_model->upload();
          
          if($upload['result'] == "success"){ // Jika proses upload sukses
             // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
            $this->Lapor_model->createLaporan($upload);
            
            redirect('home'); // Redirect kembali ke halaman awal / halaman view data
          }else{ // Jika proses upload gagal
            $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
          }
        }
        
        $this->load->view('templates/header',$data);
        $this->load->view('home/index',$data);
        $this->load->view('templates/footer');
      }
    

}