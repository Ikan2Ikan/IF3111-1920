<?php

class lapor extends CI_Controller {
	public function index(){
		$data['lapor'] = $this->l_lapor->tampil_data()->
		result();

		$this->load->view('halaman1',$data);
	
  		}
		public function tambah_lapor(){
			

		}
	}
