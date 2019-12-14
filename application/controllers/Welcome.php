<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("Laporan_model");
    }
	public function index()
	{
		global $id;
		$data['laporan']=$this->Laporan_model->getAll();
		$this->load->view('header');
		$this->load->view('contentt',$data);
		$this->load->view('footer');
	}
	public function detail()
	{
		$this->load->view('v_detail.php');
	}
	// function edit($id){
	// 	$where = array('id' => $id);
	// 	$data['user'] = $this->m_data->edit_data($where,'user')->result();
	// 	$this->load->view('v_edit',$data);
	// }

}
