<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_Lapor extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Detail_Model');
		$this->load->helper('url');

	}
	public function index(){
		$data['laporan'] = $this->Detail_Model->getAllLapor();
		$this->load->view('detail_laporan',$data);
	}
	public function view($id) {
		$data['laporan'] = $this->Detail_Model->getAllLapor($id);
		$this->load->view('detail_laporan', $data);
	}
	public function hapus($id){
		$where = array('id_laporan' => $id);
		$this->Detail_Model->hapus_laporan($where,'laporan');
		redirect('');
	}
}
