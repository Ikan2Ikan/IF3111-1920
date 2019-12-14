<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('input_form');
		$this->load->library('form_validation');

	}
	function input_form(){
		$judul = $this->input->POST['judul'];
		$komen = $this->input->POST['komen'];
		$img = $_FILES['image']['name'];
		$pilihan = $this->input->POST['pilihan'];
	  
		$config['upload_path'] = '/.images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name'] = date('Y-m-d H-i-s', time());
		$this->load->library('upload', $config);

		if(!$this->upload->do_upload('lampiran')){
			echo "upload gagal"; die();
		}else{
			$img = $this->upload->data('file_name');
		}

		$data = array(
			'judul'	=> $judul,
			'kolom_komentar' => $komen,
			'lampiran' => $img,
			'aspek_pelaporan' => $pilihan
		);

	  $this->input_form->input($this->table_name, $data);
	  redirect('');
	}

}