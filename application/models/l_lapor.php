<?php
 class L_lapor extends CI_Model{
 	public function tampil_data(){
 		$this->db->order_by('id_lapor', 'DESC');
	    $query = $this->db->get('laporan');
	    return $query;
 	}

 	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
 }
?>