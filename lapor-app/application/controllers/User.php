<?php
class User extends CI_Controller
{
  public function index()
  {
    $this->load->database();
    $this->load->model('User_model');
    $data['users'] = $this->User_model->getAllUser();
    $this->load->view('user/index', $data);
  }

  public function insert(){
    $this->User_model->insertUserData();
    redirect('user');
    
  }
}
