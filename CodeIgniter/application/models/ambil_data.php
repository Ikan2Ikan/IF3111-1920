<?php 

class ambil_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('laporan');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapuslaporan($id){
		$this->db->where('id',$id);
		$this->db->delete('laporan');
	}

	public function Laporandetail($id){
	    $data = $this->db->query("select * from laporan where id=$id")->result_array()[0];
	    return $data;
 	}
}


