<?php

class Lapor_model extends CI_model
{
	public function getlapor(){
		return $this->db->get('lapor')->result_array(); //ambil seluruh data dari tabel lapor
	}

	public function tambah(){

		//mengambil waktu saat ini
		date_default_timezone_set('Asia/Jakarta');
		$tanggal = date("Y-m-d H:i:s");

		//mengolah file
		$namafile = $_FILES['File']['name'];
		$error = $_FILES['File']['error'];
		$tempat = $_FILES['File']['tmp_name'];
		$ekstensi=['jpg','jpeg','png','pdf','docx','doc'];
		$ekstensifile = explode('.',$namafile); //fungsi untuk mecah string dengan pemecah . ,aldi.jpg = ['aldi','jpg']
		$ekstensifile = strtolower(end($ekstensifile)); 
		/*
		strtolower = semua huruf kecil
		end(array) = untuk ambil value terakhir array
		*/
		if(!in_array($ekstensifile, $ekstensi)){ //apakah $ekstensigambar ada di $ekstensi

		}

		//jika lolos cek
		move_uploaded_file($tempat, '<?php echo base_url() ?>/asset/file' . $namafile);

		$data = [
			"isi" => $this->input->post('isi'),
			"aspek" => $this->input->post('aspek'),
			"tanggal" => $tanggal,
			"file" => $namafile
		];

		$this->db->insert('lapor', $data);
	}	
}