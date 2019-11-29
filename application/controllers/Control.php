<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {


	public function index($page='template')
	{
		$this->load->helper("url");
		$this->load->view('default/header');
		$this->load->view('konten/'.$page);

	}
}
