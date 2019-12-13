<?php

class Komentar extends CI_Controller{
    public function __contruct(){
        parent::__construct();
        $this->load->model('Md_komentar');
    }

    public function index(){
        $data['judul']="Tambah Komentar/Laporan";
        $this->load->view('templates/header_komentar', $data);
        $this->load->view('komentar/index.php', $data);
        $this->load->view('templates/footer');

        if(isset($_POST['submit'])){
            $this->Md_komentar->tambahKomentar();
            echo "<script>alert('Report / Komentar berhasil ditambahkan!');</script>";
        }
        
    }
}
?>
