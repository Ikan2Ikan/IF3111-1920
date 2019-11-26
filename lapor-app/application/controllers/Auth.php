<?php
class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_model');
    // $this->load->library('database');
  }

  public function index()
  {
    $data['title'] = "User Login";
    // $data['users'] = $this->User_model->getAllUser();
    $this->load->view('templates/header', $data);
    $this->load->view('auth/login', $data);
    $this->load->view('templates/footer', $data);
    // $username = $this->input->post('username');
    // $password = $this->input->post('password');
    // $result = $this->db->get_where('user', ['username' => $username])->result_array();
    // var_dump($result);
  }

  public function register()
  {
    $data['title'] = "Register page";
    $data['username'] = $this->input->post('username');
    $this->load->view('templates/header', $data);
    $this->load->view('auth/register', $data);
    $this->load->view('templates/footer', $data);
  }

  public function insert()
  {
    $this->User_model->insertUserData();
    redirect('user');
  }
}
