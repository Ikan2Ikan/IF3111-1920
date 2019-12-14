<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('mLaporan');
	}


	public function index()
	{
		$data['dataLaporan'] = $this->mLaporan->getDataLaporan();

		if ($data != null) {
			$this->load->view('Homepage/Home', $data);
		} else {
			$this->load->view('Homepage/noDataHome');
		}
	}
}
