<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_Lapor extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Detail_Model');

	}
	public function index()
	{
		$data['laporan'] = $this->Detail_Model->getAllDetail_Lapor();
		$this->load->view('detail_laporan',$data);
	}
}
