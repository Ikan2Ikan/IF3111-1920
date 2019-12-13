<?php 
class App_model extends CI_Model {
	public function simpan_data($nama_tabel, $data = array()){
		$this->db->insert($nama_tabel, $data);
		return true;
	}

	public function ambil_data($nama_tabel){
		$this->db->select("*");
		$this->db->from($nama_tabel);
		$query = $this->db->get();
		return $query->result();
	}
}
?>