<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapor extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Laporan');
	}


	public function index()
	{
		$this->load->view('v_lapor');
	}

	public function simpan(){
		$komentar = $this->input->post('message');
		$file = $this->input->post('myFile');
		$aspek = $this->input->post('aspek');
		$date = date('Y-m-d H:i:s');

		$config['upload_path'] = './assets/images';
		$config['allowed_types'] = 'gif|jpeg|jpg|png|doc|docx|xls|xlsx|ppt|pptx|pdf';

		$data = array(
			'id'	=>	NULL,
			'tanggal'	=> $date,
			'komentar' => $komentar,
			'file' => $file,
			'aspek' => $aspek
			);

		$this->Laporan->input_data($data,'isi');
		$this->load->view('v_review_lapor',$data);
	}

	public function hapus(){
			redirect('');
	}

	function cari()
    {
        $keyword    =   $this->input->post('search');
        $data['results']    =   $this->Laporan->search($keyword);
        $this->load->view('v_after_search',$data);
    }

	public function tampil_rev(){
			$this->load->view('v_review_lapor');
	}

}
