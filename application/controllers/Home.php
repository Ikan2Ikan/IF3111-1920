<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
		$this->load->helper('form');
		
	}

	public function index()
	{
		$data ['judul'] = 'Lapor App';
		$data ['home'] = $this->Home_model->getAllHome();
		// $this->load->database();
		$this->load->view('home/index',$data);
	
	}
	public function search()
	{
		$data ['judul'] = 'Hasil Pencarian';
		$keyword = $this->input->post('keyword');
		$data['cari']=$this->Home_model->get_keyword($keyword);
		$this->load->view('pencarian/index',$data);
	}
}
