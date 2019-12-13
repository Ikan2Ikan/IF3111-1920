<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct(){
        parent::__construct();      
        $this->load->model('m_data');
                $this->load->helper('url');
    }

    function detail($id) {
    	$data['laporan'] = $this->m_data->tampil_sebagian($id)->result();
		$this->load->view('v_detail',$data);
	}

	function tambah() {
		$this->load->view('v_buat_laporan');
	}

	function insert(){
		date_default_timezone_set("Asia/Jakarta");

		$ft = $_FILES['foto']['name'];
		$tmp = $_FILES['foto']['tmp_name'];

		$path = "lampiran/".$ft;

		date_default_timezone_set("Asia/Jakarta");

		if(move_uploaded_file($tmp, $path)) {
			$isi = $this->input->post('laporan');
			$aspek = $this->input->post('aspek');
			$waktu = date("Y-m-d H:i:s");

			$data = array(
				'isi' => $isi,
				'aspek' => $aspek,
				'lampiran' => $ft,
				'waktu' => $waktu);

			$this->m_data->input_data($data,'laporan');
		} else {
			echo "Maaf, Gambar gagal untuk diupload.";
		}
		redirect('home/index');
	}
}