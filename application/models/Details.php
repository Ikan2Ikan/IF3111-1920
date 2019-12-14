<?php

class Details extends CI_model{
  function detail($id)
  {
    return $this->db->get_where('isi',['id'=>$id])->row_array();
  }
}
