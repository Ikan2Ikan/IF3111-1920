<?php
class M_comment extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
  }

  public function addComment()
  {
    $data = [
      'comm_id' => '',
      'timestamp' => date('d M Y | H:i:s'),
      'comm_title' => $this->input->post('comm_title'),
      'comm' => $this->input->post('comment'),
      'aspek' => $this->input->post('aspect'),
      'lampiran' => $this->input->post('lampiran'),
      'user_id' => $this->session->userdata('id')
    ];
    $this->db->insert('comment', $data);
  }

  public function showAllComments()
  {
    $data = $this->db->query("select * from user natural join comment natural join user_role")->result_array();
    return $data;
  }
}
