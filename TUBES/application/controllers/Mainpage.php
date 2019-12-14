<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainpage extends CI_Controller {
	public function index(){
		$data['laporan']= $this->m_data->tampil_data();
		$this->load->helper("url");
		$this->load->view('desain');
		$this->load->view('mainpage', $data);
	}
	
}