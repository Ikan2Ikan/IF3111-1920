<?php 

class M_data extends CI_Model{
	function tampil_data(){
		$this->db->order_by("id", "desc");
        return $this->db->get('lapor')->result_array();
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
	public function detailLaporan(){
        $id = $_GET["detail_id"];
        $query = $this->db->get_where('lapor', array('id' => $id));
        return $query->result_array();
    }

   	public function hapusLaporan(){
        $id = $_GET["hapus_id"];
        $this->db->delete('lapor', array('id' => $id));
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>location='home';</script>"; 
     
    }

	
}