<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buatform extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('HomePage/homedesign');
		$this->load->view('FormPage/buatform');
	}
	
}
?>