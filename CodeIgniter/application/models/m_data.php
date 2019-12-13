<?php 

class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('lapor');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function get_product_keyword($cari){
		$this->db->select('*');
		$this->db->from('lapor');
		$this->db->like('id', $cari);
		$this->db->or_like('nama', $cari);
		$this->db->or_like('judul', $cari);
		$this->db->or_like('aspek', $cari);
		return $this->db->get()->result();
	}

	
}