<?php 
 
class M_data extends CI_Model{
	function tampil_sebagian($id){
		return $this->db->get_where('laporan', array('id' => $id));
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function tampil_data(){
		return $this->db->get('laporan');
	}

	function edit_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	function hapus_data($data,$table){
		$this->db->where($data);
		$this->db->delete($table);
	}
}