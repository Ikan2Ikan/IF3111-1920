<?php

class lapor extends CI_Controller {
	public function index(){
		$data['lapor'] = $this->l_lapor->tampil_data()->
		result();

		$this->load->view('halaman1',$data);
  		}



  	public function tambah_aksi(){
		$isi = $this->input->post('komentar');
		$jenis = $this->input->post('aspek_komentar');
		// $foto =$_FILES['file'];
		//  if($foto=''){}else{
		//  	$config['upload_path'] = './fitur/img';
		//  	$config['allowed_types'] = 'jpg|png|gif';
		//  }

		//  $this->load->library('upload',$config);
		//  if(!$this->upload->do_upload('file')){
		//  	echo "Upload Gagal"; die();
		//  }else{
		//  	$foto=$this->upload->$data('file_name');
		//  }
 
		$data = array(
			'isi_lapor' => $isi,
			'jenis_lapor' => $jenis,
			// 'tgl_lapor' => $tgl,
			// 'file'      => $foto
 			);
		$this->l_lapor->input_data($data,'laporan');
		redirect('index');
	}

	}
?>