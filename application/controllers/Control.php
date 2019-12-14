<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {


	public function index($page='template')
	{
		$data['laporan']= $this->laporan_model->get_laporan();
		$this->load->helper("url");
		$this->load->view('default/header');
		$this->load->view('konten/'.$page,$data)
	
	}
}
