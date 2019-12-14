<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tampil_rever extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('rev');
	}

	public function index()
	{
	$this->load->view('v_review_lapor');
}
}
