<<?php 
/**
 * 
 */
class lapor extends CI_Model{
	
	public function getdata(){
		# code...
		return $this->db->get('lapor')->result_array();
	}
}


 ?>