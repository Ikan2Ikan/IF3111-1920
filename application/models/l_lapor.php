<?php
 class L_lapor extends CI_Model{
 	public function tampil_data(){
 		return $this->db->get('laporan');
 	}

 	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
 }
?>