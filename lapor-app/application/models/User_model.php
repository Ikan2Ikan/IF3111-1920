<?php
class User_model extends CI_model
{
  public function getAllUser()
  {
    $users = $this->db->get('user');
    return $users->result_array();
  }

  public function insertUserData()
  {
    $data = [
      'user_id' => '',
      'fullname' => htmlspecialchars($this->input->post('fullname', true)),
      'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
      'image' => "default.jpg",
      'email' => htmlspecialchars($this->input->post('email', true)),
      'role_id' => 1
    ];
    // var_dump($data);
    // die;
    $this->db->insert('user', $data);
  }

  public function logOut()
  {
    $this->session->unset_userdata();
    redirect(base_url('auth'));
  }
}
