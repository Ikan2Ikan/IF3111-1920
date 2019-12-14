<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {

	public function index()
	{
		global $id;
		$data['laporan']=$this->Laporan_model->getAll();
		$this->load->view('header');
		$this->load->view('contentt',$data);
		$this->load->view('footer');
	}
	// function edit($id){
	// 	$where = array('id' => $id);
	// 	$data['user'] = $this->m_data->edit_data($where,'user')->result();
	// 	$this->load->view('v_edit',$data);
	// }
}
