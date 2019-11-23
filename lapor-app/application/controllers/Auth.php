<?php
class Auth extends CI_Controller
{
  public function index($nama = "")
  {
    $data['nama'] = $nama;
    $this->load->view('auth/login', $data);
  }
  public function register()
  {
    $data['title'] = "Register page";
    $data['username'] = $this->input->post('username');
    $this->load->view('auth/register', $data);
  }
}
