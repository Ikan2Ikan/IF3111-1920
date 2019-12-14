<?php 

class M_data extends CI_Model{
	function tampil_data(){
		$this->db->order_by("id", "desc");
        return $this->db->get('lapor')->result_array();
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function searchData($keyword = null)
	{
		if($keyword){
			$this->db->like('judul', $keyword);
			$this->db->or_like('nama',$keyword);
			$this->db->or_like('aspek',$keyword);
		}
		$this->db->order_by("id", "desc");

		return $this->db->get('lapor')->result_array();
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

    public function ubahLaporan(){
        // return $this->db->get('simple_lapor')->result_array();
        $id = $_GET["ubah_id"];
        // return "SELECT * FROM simple_lapor WHERE id_lapor= '$id'";
        // return $this->db->get('simple_lapor')->result_array();
        $query = $this->db->get_where('lapor', array('id' => $id));
        return $query->result_array();
        
    }
    public function updateLaporan(){
        $id = $_GET["ubah_id"];

        

      

    
    
    $data = [ 
        "laporan" => $this->input->post('laporan',true),
        "file" => $file,
        "aspek" => $this->input->post('aspek',true)
    ];


    $this->db->update('lapor', $data, array('id' => $id));
    echo "<script>alert('Berhasil di ubah');</script>";
    echo "<script>location='home';</script>";
    }

	
}
?>