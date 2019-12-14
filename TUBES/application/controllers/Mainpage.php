<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainpage extends CI_Controller {
	public function index(){
		$this->load->view('desain');
		$this->load->view('mainpage');
	}
	
}