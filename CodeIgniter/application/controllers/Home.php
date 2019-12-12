<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
 	}

	public function index()
	{
		$data['lapor'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_home.php', $data);
	}

	public function lapor()
	{
		$this->load->view('v_lapor.php');
	}

	function tambah_aksi()
	{
		$laporan = $this->input->post('laporan');
		$aspek = $this->input->post('aspek');
		$file = $this->input->post('file');
		$waktu = $this->input->post('waktu');
 
		$data = array(
			'laporan' => $laporan,
			'aspek' => $aspek,
			'file' => $file,
			'waktu' => $waktu
			);
		$this->m_data->input_data($data,'lapor');
		redirect('home/index');
	}

	public function detail()
	{
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_detail', $data);
	}
	public function search(){
		$cari = $this->input->post('cari');

		$datac['lapor']=$this->m_data->get_product_keyword($cari, 'lapor');
		$this->load->view('v_home',$datac);
	}

}
