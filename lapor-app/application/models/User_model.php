<?php
class User_model extends CI_model
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
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
    $this->db->insert('user', $data);
  }
}
