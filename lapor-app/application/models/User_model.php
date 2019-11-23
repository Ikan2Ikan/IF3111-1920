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
      'username' => $this->input->post('username'),
      'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
      'image' => 'default.jpg',
      'email' => $this->input->post('email'),
      'role_id' => 1
    ];
    $this->db->insert('user', $data);
  }
}
