<?php
class Lapor_model extends CI_model{
	//model segala seuatu berhubungan dengan query database

	public function getAllData()
	{
		// echo "ok";
		// $query = $this->db->get("user");
		
		// return $query->result_array();

		//untuk mengambil data dari database dengan get('nama table')
		return $this->db->query('SELECT * from user NATURAL JOIN tabel_komentar')->result_array();
	}


	public function InputContentLaporan($data2){
		//data yang akan diinputkan, yang diambil dari post
		// date_default_timezone_set('Asia/Jakarta');
		// $data2 = [
		// 	"komentar_id" => '',
		// 	"komentar" => $this->input->post('komentar',true),
		// 	"lampiran" => $this->input->post('file',true),
		// 	"waktu" => date('l,d-F-Y  h:i:s'),
		// 	"kategori" => $this->input->post('kategori'),
		// 	"email" =>  $this->session->userdata('email')//yg dilempar gan
		// ];
		

		//query untuk insert
		$this->db->insert('tabel_komentar',$data2);
		

	}


}
 ?>
