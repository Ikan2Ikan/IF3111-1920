<?php
class Comment extends CI_Controller
{
    public function index()
    {
        $data = "Tambah Komentar/Laporan";
        $this->load->view('templates/header', $data);
        $this->load->view('comment/index.php', $data);
        $this->load->view('templates/footer', $data);
    }
}
