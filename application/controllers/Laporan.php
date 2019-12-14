<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mLaporan');
	}
	public function index()
	{

		$this->load->view('vLaporan');
	}
	function detail($id)
	{
		$data = array('dataLaporan' => $this->mLaporan->get_detail($id));
		$this->load->view('vLaporan', $data);
	}
	function hapus($id)
	{
		$where = array('id_laporan' => $id);
		$this->mLaporan->del_data($where);
		redirect(base_url());
	}
	function input_laporan()
	{
		// $nama = $this->session->userdata('stasiun');
		$nama = 'Muhammad Rizki';
		$pesan = $this->input->post('comment', true);
		$kategori = $this->input->post('pilih', true);
		date_default_timezone_set('Asia/Jakarta');
		$date = date("Y-m-d h:i:s");
		$namafile = $_FILES['myFile']['name'];
		$ukuranfile = $_FILES['myFile']['size'];
		$error = $_FILES['myFile']['error'];
		$tmpName = $_FILES['myFile']['tmp_name'];
		if ($namafile == '') {
			echo 'gagal tambah data';
		}
		// cek apakah yang di upload adalah gambar
		$ekstensiFileValid = ['doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf'];
		$ekstensiFile = explode('.', $namafile);
		$ekstensiFile = strtolower(end($ekstensiFile));
		if (!in_array($ekstensiFile, $ekstensiFileValid)) {
			echo 'gagal tambah data';
		}
		//generate naa file baru
		$namafileBaru = uniqid();
		$namafileBaru .= '.' . $ekstensiFile;
		// $namafotoBaru = $ekstensiGambar;
		move_uploaded_file($tmpName, 'assets/file/' . $namafileBaru);
		$lampiran = $namafileBaru;

		$data = array(
			'nama' => $nama,
			'komentar' => $pesan,
			'waktu' => $date,
			'lampiran' => $lampiran,
			'kategori' => $kategori
		);
		$status = $this->mLaporan->insert_laporan($data);
		if ($status == 1) {
			redirect('Home');
		} else {
			redirect('Laporan');
		}
	}
	function update($id)
	{
		$nama = 'Muhammad Rizki';
		$pesan = $this->input->post('comment', true);
		$kategori = $this->input->post('pilih', true);
		date_default_timezone_set('Asia/Jakarta');
		$date = date("Y-m-d h:i:s");
		$namafile = $_FILES['myFile']['name'];
		$ukuranfile = $_FILES['myFile']['size'];
		$error = $_FILES['myFile']['error'];
		$tmpName = $_FILES['myFile']['tmp_name'];
		if ($namafile == '') {
			echo 'gagal tambah data';
		}
		// cek apakah yang di upload adalah gambar
		$ekstensiFileValid = ['doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf'];
		$ekstensiFile = explode('.', $namafile);
		$ekstensiFile = strtolower(end($ekstensiFile));
		if (!in_array($ekstensiFile, $ekstensiFileValid)) {
			echo 'gagal tambah data';
		}
		//generate naa file baru
		$namafileBaru = uniqid();
		$namafileBaru .= '.' . $ekstensiFile;
		// $namafotoBaru = $ekstensiGambar;
		move_uploaded_file($tmpName, 'assets/file/' . $namafileBaru);
		$lampiran = $namafileBaru;

		$data = array(
			'nama' => $nama,
			'komentar' => $pesan,
			'waktu' => $date,
			'lampiran' => $lampiran,
			'kategori' => $kategori
		);
		$status = $this->mLaporan->update_laporan($data, $id);
		if ($status == 1) {
			redirect('Home');
		} else {
			redirect('Laporan');
		}
	}
	function edit($id)
	{
		$data = array('dataLaporan' => $this->mLaporan->get_detail($id));
		$this->load->view('vUbahLaporan', $data);
	}
}
