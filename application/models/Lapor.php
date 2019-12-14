<?php

class Lapor extends CI_model{
  public function getAllLapor(){
    return $query = $this->db->get('isi')->result_array();

  }
}
