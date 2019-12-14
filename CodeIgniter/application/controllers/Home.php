<?php 

class Home extends CI_controller {
	public function index(){
		$data['title'] = 'Halaman Utama';
		$this->load->view('templates/header', $data);
		$data['data'] = $this->ambil_data->tampil_data()->result();
		$this->load->view('home/index', $data);
	}

	public function lapor(){
		$data['title'] = 'Membuat Laporan';
		$this->load->view('templates/header', $data);
		$this->load->view('home/lapor');
	}

	public function lihat($id){
		$data['title'] = 'Laporan Lengkap';
		$this->load->view('templates/header', $data);
		$nomor = $id;
		$data['data'] = $this->ambil_data->laporandetail($nomor);
		$this->load->view('home/lihat', $data);
		// echo $id;
	}

	public function ubah($id){
		$data['title'] = 'Mengubah Laporan';
		$this->load->view('templates/header', $data);
		$nomor = $id;
		$data['laporan'] = $this->ambil_data->ubah_id($nomor);
		// $where = array('id' => $id);
		// $data['laporan'] = $this->ambil_data->edit_data($where,'laporan')->result();;
		$data['aspek'] = ['Dosen', 'Staff', 'Mahasiswa', 'Infrastruktur', 'Pengajaran'];
		$this->load->view('home/ubah', $data);

		// echo $id;
	}

	function hapus($id){
		$this->ambil_data->hapuslaporan($id);
		redirect('home/index');
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


	function update_laporan(){
		$id = $this->input->post('id');
		$laporan = $this->input->post('laporan');
		$aspek = $this->input->post('aspek');
		$file = $this->input->post('file');
		$date = $this->input->post('date');
 
		$data = array(
			'id' => $id,
			'laporan' => $laporan,
			'aspek' => $aspek,
			'file' => $file,
			'date' => $date
		);

		$where = array(
			'id' => $id
		);

		$this->ambil_data->update_data($where,$data,'laporan');
		redirect('home/index');
	}

	public function cari_laporan(){
		$data['title'] = 'Halaman Utama';
		$this->load->view('templates/header', $data);
		$cari = $this->input->post('cari');
		$data['data']=$this->ambil_data->coba_cari($cari, 'laporan');
		$this->load->view('home/index',$data);
	}
}

 ?>