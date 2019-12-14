<?php

class Lapor extends CI_Controller {
	public function index(){
		$data["lapor"] = $this->l_lapor->tampil_data()->
		result();

		$this->load->view('lapor',$data);
	
  		}
		
	}
