<?php


class Home extends CI_Controller
{
	
	public function index(){
		$this->load->model('Lapor_model'); //ngambil model Model_lapor dari folder models
		$data['lapor'] = $this->Lapor_model->getlapor(); //getlapor() ada di model Model_lapor
		$this->load->view('home/index',$data);
	}
}