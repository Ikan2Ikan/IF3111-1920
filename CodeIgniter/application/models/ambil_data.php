<?php 

class ambil_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('laporan');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function update_data($where,$data,$table){
		// $this->db->update($table, $data, array('id' => $this->input->post('id')));
		// $this->db->where('id', $this->input->post('id'));
		// $this->db->update($table,$data);
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapuslaporan($id){
		$this->db->where('id',$id);
		$this->db->delete('laporan');
	}

	function Laporandetail($id){
	    $data = $this->db->query("select * from laporan where id=$id")->result_array()[0];
	    return $data;
 	}

 	function ubah_id($id){
	    $data = $this->db->get_where('laporan', ['id' => $id])->row_array();
	    return $data;
 	}

 	
}


