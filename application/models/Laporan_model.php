<?php 

class Laporan_model extends CI_Model
{
	public $_table="laporan";

	public $id;
	public $nama;
	public $lapor_teks;
	public $aspek_lapor;
	public $file;

	public function getAll(){
		return $this->db->get('laporan')->result();
	}

	public function getbyId($id){
		return $this->db->get_where($this->_table, ["id" => $id])->row();
	}
}


 ?>