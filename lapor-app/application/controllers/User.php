<?php
class User extends CI_Controller
{
  public function index()
  {
    echo 'ok';
    $this->load->database();
    $this->load->view('user/index');
  }
}
