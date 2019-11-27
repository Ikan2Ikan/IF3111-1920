<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//Model di panggil di awal sebelum masuk ke fungsi
		$this->load->model('Lapor_model');
	}
	//Membuat controller Untuk Fitur beranda/Home
	public function index() {
		$data['title']='SIMPLE LAPOR!';
		$data['laporan'] = $this->Lapor_model->getLaporan();

		$this->load->view('templates/header',$data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');  
	}
	//Membuat controller untuk Fitur Input Laporan
	public function form() {
		$data['title']='Buat Laporan';

		$this->load->view('templates/header',$data);
		$this->load->view('home/form', $data);
		$this->load->view('templates/footer'); 
	}
	//Membuat controll  untuk pencarian berdasarlan judul dan isi laporan
	public function search() {
		$data['title']='Pencarian Data';
		$data['name']='Hasil pencarian laporan';
		$data['laporan'] = $this->Lapor_model->search();

 		$this->load->view('templates/header',$data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer'); 
	}
		 

	//Membuat controller untuk Fitur Detail laporan

}
