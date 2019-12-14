<?php

class Lapor_model extends CI_model{
	//model segala seuatu berhubungan dengan query database

	public function getAllData()
	{
		// echo "ok";
		// $query = $this->db->get("user");
		
		// return $query->result_array();

		//untuk mengambil data dari database dengan get('nama table')
		return $this->db->query('SELECT * from user NATURAL JOIN tabel_komentar ORDER bY komentar_id DESC')->result_array();
		
	}

	
	public function RegistrasiUser(){
		//data yang akan diinputkan, yang diambil dari post
		$data = [
			"email" => $this->input->post('email',true),
			"nama" => $this->input->post('nama',true),
			"password" => $this->input->post('password',true),
		];

		//query untuk insert
		$this->db->insert('user',$data);

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
	//Ubah Data Laporan
	public function UbahContentLaporan(){
		//data yang akan diinputkan, yang diambil dari post
		date_default_timezone_set('Asia/Jakarta');
		$data2 = [
			// "komentar_id" => '',
			"komentar" => $this->input->post('komentar',true),
			//"lampiran" => $this->input->post('file',true),
			"waktu" => date('l,d-F-Y  h:i:s'),
			//"kategori" => $this->input->post('kategori'),
			// "email" =>  $this->session->userdata('email')//yg dilempar gan
		];
		

		//query untuk insert
		$this->db->where('komentar_id',$this->input->post('id'));
		$this->db->update('tabel_komentar',$data2);
		

	}

	public function getDataId($id){

		// return $this->db->get_where('tabel_komentar',['komentar_id' => $id])->row_array();

		return $this->db->query('SELECT kategori,email,komentar_id,nama,komentar,lampiran,waktu FROM user NATURAL JOIN tabel_komentar WHERE komentar_id = '.$id)->row_array();
	}

	public function HapusDataLapor($id){

		$this->db->query('DELETE FROM tabel_komentar WHERE komentar_id ='.$id);

	}
	

}
 ?>
