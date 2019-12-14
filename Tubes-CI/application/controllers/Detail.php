<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {
	public function index()
	{
		$data['laporan'] = $this->M_data->tampil_data();
		$this->load->helper("url");
		$this->load->view('templates/header');
		$this->load->view('HomePage/homedesign');
		$this->load->view('LaporanDetail/detail', $data);
	}
	
}
?>