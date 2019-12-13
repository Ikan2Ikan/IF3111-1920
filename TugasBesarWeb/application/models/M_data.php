<?php 
 
class M_data extends CI_Model{
	function tampil_sebagian($id){
		return $this->db->get_where('laporan', array('id' => $id));
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}