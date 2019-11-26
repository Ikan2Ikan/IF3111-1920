<?php
class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_model');
    // $this->load->library('database');
  }

  private function _login()
  {
    $fullname = $this->input->post('fullname');
    $password = $this->input->post('password');

    // cek email terdaftar
    $user = $this->db->get_where('user', ['fullname' => $fullname])->result_array()[0];
    var_dump($user);
    if ($user) {
      if (password_verify($password, $user['password'])) {
        redirect('home');
      }
    } else {
      // redirect('auth/register');
      echo "user tidak ada";
    }
  }

  public function index()
  {
    $data['title'] = "User Login";
    // $data['users'] = $this->User_model->getAllUser();
    $this->load->view('templates/header', $data);
    $this->load->view('auth/login', $data);
    $this->load->view('templates/footer', $data);

    $this->_login();
  }

  public function register()
  {
    $data['title'] = "Register page";
    $this->load->view('templates/header', $data);
    $this->load->view('auth/register', $data);
    $this->load->view('templates/footer', $data);

    // $data = [
    //   'user_id' => '',
    //   'username' => htmlspecialchars($this->input->post('username', true)),
    //   'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
    //   'image' => "default.jpg",
    //   'email' => htmlspecialchars($this->input->post('email', true)),
    //   'role_id' => 1
    // ];

    if (isset($_POST['register'])) {
      $this->User_model->insertUserData();
      redirect('auth');
    }
  }
}
