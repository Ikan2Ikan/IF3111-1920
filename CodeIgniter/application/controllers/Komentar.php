<?php

class Komentar extends CI_Controller{
    public function __contruct(){
        parent::__construct();
        $this->load->model('Md_komentar');
    }

    public function index(){
        $data['title']="Tambah Komentar/Laporan";
        $this->load->view('templates/header_komentar', $data);
        $this->load->view('komentar/index.php', $data);
        $this->load->view('templates/footer');

        if(isset($_POST['submit'])){
            $this->load->model('Md_komentar'); # <- add this
            $this->Md_komentar->tambahKomentar();
            echo "<script>alert('Report / Komentar berhasil ditambahkan!');</script>";
        }   
    }

    public function uploadFile(){
        $config['upload_path'] = base_url('Dokumen/file_upload');
        $config['max_size'] = 10000;
        $config['max_size'] = "gif|jpg|jpeg|png|pdf|doc|docx|xls|xlsx|ppt|pptx";

        $this->load->library('upload', $config);
        if($this->upload->do_upload('lampiran')){
            echo "<script>alert('Berhasil Upload');</script>";
        }else{
            echo "<script>alert('Gagal Upload');</script>";
        }
    }
}
?>
