<?php

class rev extends CI_model{

  public function getLapor($id){
    return $this->db->get_where('isi',['id'=>$id])->row_array();

  }
}
