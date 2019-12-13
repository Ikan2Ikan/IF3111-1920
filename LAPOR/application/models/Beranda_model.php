<?php

class Beranda_model extends CI_model {
  public function getAllLapor() {
     return $this->db->get('laporan')->result_array();
  }
}
 ?>
