<?php 

class M_data extends CI_Model{
	function tampil_data(){
		$this->db->order_by("id", "desc");
        return $this->db->get('lapor',4)->result_array();
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
	public function getDetailLaporan(){
        // return $this->db->get('simple_lapor')->result_array();
        $id = $_GET["detail_id"];
        // return "SELECT * FROM simple_lapor WHERE id_lapor= '$id'";
        // return $this->db->get('simple_lapor')->result_array();
        $query = $this->db->get_where('lapor', array('id' => $id));
        return $query->result_array();
    }
   

	
}