<?php
class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_model');
  }

  private function _login()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    // cek email terdaftar
    if (isset($_POST['login'])) {
      $user = $this->db->get_where('user', ['email' => $email])->result_array();

      // var_dump($user['']);
      // die;

      if (!empty($user)) {
        if (password_verify($password, $user[0]['password'])) {
          $user_data = $this->db->query("select * from user natural join comment natural join user_role where email='$email'")->result_array()[0];
          // var_dump($user_data);
          // die;

          $this->session->set_userdata('logged_in', true);
          $this->session->set_userdata('id', $user_data['user_id']);
          $this->session->set_userdata('fullname', $user_data['fullname']);
          redirect(base_url('home/user_logged_in'));
        } else {
          echo "password salah!";
        }
      } else {
        // redirect('auth/register');
        echo "user tidak ada";
      }
    }
  }

  public function index()
  {
    $data['title'] = "User Login";
    // $data['users'] = $this->User_model->getAllUser();
    $this->load->view('templates/login_header', $data);
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
