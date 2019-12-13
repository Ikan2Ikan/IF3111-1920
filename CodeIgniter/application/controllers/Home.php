<?php 

class Home extends CI_controller {
	public function index(){
		$data['title'] = 'Halaman Utama';
		$this->load->view('templates/header', $data);
		$data['data'] = $this->ambil_data->tampil_data()->result();
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
	}

	public function lapor(){
		$data['title'] = 'Membuat Laporan';
		$this->load->view('templates/header', $data);
		$this->load->view('home/lapor');
		$this->load->view('templates/footer');
	}

	public function lihat(){
		$data['title'] = 'Laporan Lengkap';
		$this->load->view('templates/header', $data);
		$data['data'] = $this->ambil_data->tampil_data()->result();
		$this->load->view('home/lihat', $data);
		$this->load->view('templates/footer');
	}

	function upload_laporan(){

		$laporan = $this->input->post('laporan');
		$aspek = $this->input->post('aspek');
		$file = $this->input->post('file');
		$date = $this->input->post('date');
 
		$data = array(
			'laporan' => $laporan,
			'aspek' => $aspek,
			'file' => $file,
			'date' => $date
			);
		$this->ambil_data->input_data($data,'laporan');
		redirect('home/index');
	}
}

 ?>