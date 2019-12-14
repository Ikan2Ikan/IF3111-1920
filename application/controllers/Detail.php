<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Detail extends CI_Controller {
	public function index()
	{
		echo 'Selamat datang di CodeIgniter';
	}
	
	function posting()
	{
		$this->load->model('M_detail');
		$data['posting'] = $this->M_detail->list_posting();
		$this->load->view('posting',$data);
	}
	
	function hapus($id){
	$where = array('ID' => $id);
	$this->M_detail->hapus_data($where,'posting');
	redirect('detail/index');
	}
}
