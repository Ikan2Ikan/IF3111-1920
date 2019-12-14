<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
        parent::__construct();
        $this->load->model('laporan_model');
        $this->load->helper('url_helper');
	}
	
	public function index()
	{
		$data['laporan'] = $this->laporan_model->get_laporan();
		// $data['lampiran'] = '';
		$this->load->helper('url_helper');
		$this->load->view('home' , $data);
		
	}
	public function buat(){
		$this->load->view('buatlapor');	
	}
	public function detail(){
		$this->load->view('detail');
	}    
/*
	public function home(){
		$this->load->view('home');
	}
	*/
}
