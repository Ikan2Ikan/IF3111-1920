<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cari extends CI_Controller {

    public function __constuct(){
        $this->load->model('database_model');
        $this->load->helper('url_helper');
    }
	
	public function search()
	{
        $data['laporan'] = $this->database_model->cari();
        $this->load->view('templates/header');
        $this->load->view('pages/awal', $data);
		$this->load->view('templates/footer');
        
    }

}