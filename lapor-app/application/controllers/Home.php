<?php
class Home extends CI_Controller
{
  public function index()
  {
    $this->load->model('M_comment');
    $data['result'] = $this->M_comment->showAllComments();
    $data['title'] = "Halaman Utama";
    $this->load->view('templates/header', $data);
    $this->load->view('home/index.php', $data);
    $this->load->view('templates/footer');
  }
}
