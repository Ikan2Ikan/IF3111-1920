<?php 
	class Halaman_utama extends CI_Controller{
		//fungsi menampilkan data dari database
		public function __construct(){
			parent::__construct();
			$this->load->model('Lapor_model');//manggil database
			$this->load->library('form_validation');//validasi form
		}

		public function index(){
			$data['judul1']='Halaman Utama';
			
			//menampilkan data mahsiswa
			// $this->load->model('Mahasiswa_model');//load model ,harus diatas dari filenya
			$data['lapor'] = $this->Lapor_model->getAllData();//file ini berada di "model" dan ini merupakan cara manngilnya
			// $this->load->helper('url'); //mengaktifkan base url,tapi sebaiknya bisa di pindah ke ke autoload pada helper
			
			$this->load->view('templates/header',$data);
			$this->load->view('Lapor/index',$data);
			$this->load->view('templates/footer');
		}

	   
	    public function DaftarAkunLaporan(){

	   	$data['judul1']  = 'Daftar Laporan';

	   	$this->form_validation->set_rules('nama','Nama','required');
	   	$this->form_validation->set_rules('email','Email','required|valid_email');
	   	$this->form_validation->set_rules('password','password','required');

	   	if($this->form_validation->run() == FALSE){
	   		//jika gagal
	   		//header diganti menajadi header_daftar/login
	   		$this->load->view('templates/header_daftar_login',$data);
			$this->load->view('Lapor/halaman_registrasi');//folder dan file
			$this->load->view('templates/footer');
	   	}else{

	   		//input kedatabase
	   		// cek email di database apakah sama dengan apa yang diinputkan
	   		$cek = $this->db->query("SELECT * FROM user where email='".$this->input->post('email')."'")->num_rows();

	   		if($cek==1){

	   			$this->session->set_flashdata('email-ada',"daftar ulang");
	    		redirect('Halaman_utama/DaftarAkunLaporan');

	   		}else{

	   		$this->Lapor_model->RegistrasiUser();//fungsi mahasiswa,fungsi berada pada controler, dan file Model_mahasiswa
	   		$this->session->set_flashdata('flas',"daftar");
	   		$this->session->set_flashdata('daftar sukses',"suskses daftar");
	   		redirect('Halaman_utama/Login');//dialihkan lagi ke halaman mahasiswa
	   	

	   		}

	   	}
	
	   	
	   }

	
 
	}//class



 ?>