<?php


class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
		$this->load->helper('form');
		
	}

	public function index()
	{
		$data ['judul'] = 'Home Page';
		$data ['home'] = $this->Home_model->getHome();
		$this->load->view('home/index',$data);
	
	}

}
