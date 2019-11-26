<?php
class Comment extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Tambah Komentar/Laporan";
        $this->load->view('templates/comm_header', $data);
        $this->load->view('comment/index.php', $data);
        $this->load->view('templates/footer');
    }
}
