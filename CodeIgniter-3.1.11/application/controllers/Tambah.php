<?php


class Tambah extends CI_Controller
{
	
	public function index(){
		$data['nama'] = "aldi indrawan";
		$this->load->view('tambah/index',$data);
	}
}
