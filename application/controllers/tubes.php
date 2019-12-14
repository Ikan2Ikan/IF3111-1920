<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tubes extends CI_Controller {

	public function halaman1()
	{
		$this->load->view('halaman1');
	
	}
	public function halaman2()
	{
		$this->load->view('halaman2');
	}
}
