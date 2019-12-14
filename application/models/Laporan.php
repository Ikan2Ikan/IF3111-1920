<?php

class Laporan extends CI_model{
  public function getAllLapor(){
    return $this->db->get('isi')->result_array();

  }

  public function input_data($data,$table){
		$this->db->insert($table,$data);
	}

  function update_data(){
		return $this->db->get('isi');
	}

  function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
}

  function search($keyword)
  {
      $this->db->like('komentar',$keyword);
      $this->db->or_like('aspek',$keyword);
      return $this->db->get('isi')->result_array();
  }
}
