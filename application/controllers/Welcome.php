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