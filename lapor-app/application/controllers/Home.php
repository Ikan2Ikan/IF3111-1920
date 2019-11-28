<?php
class Home extends CI_Controller
{
  public function index()
  {
    $this->load->model('M_comment');
    $data['result'] = $this->M_comment->showAllComments();
    $data['title'] = "Halaman Utama";
    $this->load->view('templates/index_header', $data);
    $this->load->view('home/index.php', $data);
    $this->load->view('templates/footer');
  }
  public function user_logged_in()
  {
    $this->load->model('M_comment');
    $data['result'] = $this->M_comment->showAllComments();
    $data['title'] = "Halaman Utama";
    $this->load->view('templates/userloggin_header', $data);
    $this->load->view('home/user_logged_in', $data);
    $this->load->view('templates/footer');
  }
  public function logOut()
  {
    $this->session->sess_destroy();
    redirect(base_url('auth'));
  }
}
