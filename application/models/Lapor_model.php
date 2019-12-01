<?php

class Lapor_model extends CI_model{
	//model segala seuatu berhubungan dengan query database

	
	public function InputContentLaporan(){
		//data yang akan diinputkan, yang diambil dari post
		
		$data2 = [
			"komentar_id" => '',
			"komentar" => $this->input->post('komentar',true),
			"lampiran" => $this->input->post('file',true),
			"waktu" => date('l,d-F-Y  h:i:s'),
			"kategori" => $this->input->post('kategori'),
			"email" =>  $this->session->userdata('email')//yg dilempar gan
		];
		

		//query untuk insert
		$this->db->insert('tabel_komentar',$data2);
		

	}

}
 ?>
