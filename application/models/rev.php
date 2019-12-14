<?php

class rev extends CI_model{

  public function getLapor(){
    return $this->db->get('isi');
  }
}
