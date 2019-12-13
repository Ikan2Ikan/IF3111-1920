<?php
  class Detail_Model extends CI_model{
  public function getAllDetail_Lapor(){
     return $this->db->get('laporan')->result_array();
    }
  }
 ?>
