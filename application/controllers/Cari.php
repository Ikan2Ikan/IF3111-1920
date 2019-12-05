<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cari extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cari_model');
		$this->load->helper(array('form', 'url'));
		
	}

	public function index()
	{
		$data ['judul'] = 'Hasil Pencarian';
		$keyword = $this->input->post('keyword');
		$data['cari']=$this->Cari_model->get_keyword($keyword);
		$this->load->view('pencarian/index',$data);
	}
	public function search(){
		$data ['judul'] = 'Hasil Pencarian';
		$keyword = $this->input->post('keyword');
		$data['cari']=$this->product_m->get_keyword($keyword);
		$this->load->view('pencarian/index',$data);
	}
}
