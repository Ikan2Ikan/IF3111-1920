<?php

class Comment  extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Comment');
    }

    public function index(){
        $data['judul'] = 'Halaman Komentar';
        $this->load->view('templates/header', $data);
        $this->load->view('Comment/index', $data);
    }

    public function fileUpload(){
        $file['fileup'] = base_url('tampilan/');
        $file['typefile']  = 'jpg|png|doc|gif|jpeg|pdf';
        $file['size'] = 5000;

        $this->load->library('upload', $file);
        if ($this->upload->do_upload('lampiran')){
            echo "<script>
            alert('berhasil di upload');
            </script>";
        } else {
            echo "<script>
            alert('gagal di upload');
            </script>";
        }
    }
}

?>