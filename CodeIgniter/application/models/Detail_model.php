<?php
class Detail_model extends CI_model{
	
    public function getDetailLaporan($data){
        // return $this->db->get('simple_lapor')->result_array();
        $id = $_GET["detail_id"];
        // return "SELECT * FROM simple_lapor WHERE id_lapor= '$id'";
        // return $this->db->get('simple_lapor')->result_array();
        $this->db->select('*');
		$this->db->from('lapor');
		$this->db->like('id', $id);
        return $this->db->get()->result();
    }
   
}

?>