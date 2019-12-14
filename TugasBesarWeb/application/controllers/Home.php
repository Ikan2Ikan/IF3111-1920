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
    	$this->load->view('v_header',$data);
		$this->load->view('v_detail',$data);
		$this->load->view('v_footer');
	}

	function tambah() {
		$this->load->view('v_header');
		$this->load->view('v_buat_laporan');
		$this->load->view('v_footer');
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

	function index(){
        $data['laporan'] = $this->m_data->tampil_data()->result();
        $this->load->view('v_header',$data);
        $this->load->view('v_tampil',$data);
        $this->load->view('v_footer');
    }

    function edit($id) {
		$data['laporan'] = $this->m_data->tampil_sebagian($id)->result();
		$this->load->view('v_header',$data);
		$this->load->view('v_edit',$data);
		$this->load->view('v_footer');
	}

	public function hapus($id) {
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'laporan');
		redirect('home/index');
	}

	public function ubah() {
		date_default_timezone_set("Asia/Jakarta");

		$ft = $_FILES['foto']['name'];
		$tmp = $_FILES['foto']['tmp_name'];

		$path = "lampiran/".$ft;

		date_default_timezone_set("Asia/Jakarta");

		if(move_uploaded_file($tmp, $path)) {
			$id = $this->input->post('id');
			$isi = $this->input->post('laporan');
			$aspek = $this->input->post('aspek');
			$waktu = date("Y-m-d H:i:s");

			$data = array(
				'isi' => $isi,
				'aspek' => $aspek,
				'lampiran' => $ft,
				'waktu' => $waktu);
			$where = array('id' => $id);
			$this->m_data->edit_data($where,$data,'laporan');
		} else {
			echo "Maaf, Gambar gagal untuk diupload.";
		}
		redirect('home/index');
	}
}