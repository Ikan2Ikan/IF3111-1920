<?php

class Komentar extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Md_komentar');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['title']="Tambah Komentar/Laporan";

        $this->form_validation->set_rules('judul_komentar', 'Judul', 'required');
        $this->form_validation->set_rules('komentar', 'Komentar', 'required|min_length[20]');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('lampiran', 'Lampiran', 'required');

        if($this->form_validation->run()== FALSE){
            $this->load->view('templates/header_komentar', $data);
            $this->load->view('komentar/index', $data);
            $this->load->view('templates/footer');
        } else{
            $this->Md_komentar->tambahKomentar();
            redirect('home');
        }

        if(isset($_POST['submit'])){
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
