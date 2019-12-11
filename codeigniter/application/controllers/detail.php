<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

    public function __constuct(){
        parent::__construct();
        $this->load->model('database_model');
        $this->load->helper('url_helper');
    }
	


    public function vdetail($id=NULL)
	{
        $data ['laporan']= $this->database_model->get_data($id);
        $this->load->view('templates/header');
        $this->load->view('pages/halaman_detail',$data);
		$this->load->view('templates/footer');
        
    }
}