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

		//menambahkan data ke database
	   public function InputDataLapor(){

		 $data['judul1']  = 'Form Tambah Laporan';

	   		$this->load->view('templates/header',$data);
			$this->load->view('Lapor/halaman_Laporan');//folder dan file
			$this->load->view('templates/footer');

	   	   	if(isset($_POST['submit'])){
			//input kedatabase
	   	   	if($this->session->userdata('email')==null){
	   	   		$this->session->set_flashdata('anda belum login',"tambah gagal");
	   	   		redirect('Halaman_utama/Login');
	   	   	}else{
	   	   		// $result['pesan'] = '';
		   	   	$this->Lapor_model->InputContentLaporan();//fungsi mahasiswa,fungsi berada pada controler, dan file Model_mahasiswa

		   	   	
		   		$this->session->set_flashdata('input_laporan',"lapor berhasil");
		   		redirect('Halaman_utama');//dialihkan lagi ke halaman mahasiswa

	   	   	}
	   		echo json_encode($result);
	   	   	}
	   		
	   	
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
	   		$this->Lapor_model->RegistrasiUser();//fungsi mahasiswa,fungsi berada pada controler, dan file Model_mahasiswa
	   		$this->session->set_flashdata('flas',"daftar");
	   		$this->session->set_flashdata('daftar sukses',"suskses daftar");
	   		redirect('Halaman_utama/Login');//dialihkan lagi ke halaman mahasiswa
	   	
	   	}
	
	   	
	   }

	    public function Login(){

	 		$data['judul1']  = 'Login';
	   		//jika gagal
	   		//header diganti menajadi header_daftar/login
	   		$this->load->view('templates/header_daftar_login',$data);
			$this->load->view('Lapor/halaman_login');//folder dan file
			$this->load->view('templates/footer');

	    	$email = $this->input->post('email');
	    	$password = $this->input->post('password');

	    	$user = $this->db->get_where('user',['email' => $email])->row_array();

	    	if(isset($_POST['submit'])){
	    		
	    	if($user==null){
	    		$this->session->set_flashdata('email_tida_ada',"email_salah");
	    		redirect('Halaman_utama/Login');
	    	}
	    	else{

	    		if($password == $user['password'] ){
	    			
	    			

	    			$this->session->set_userdata('email',$email);
	    			$this->session->set_flashdata('login_berhasil',"password benar");
	    			redirect('Halaman_utama/InputDataLapor');

	    		}else{
	    			$this->session->set_flashdata('login_gagal',"password salah");
	    			redirect('Halaman_utama/Login');
	    		}


	    	}//if user ==null
	    		
	    }
	   	
	   }//fungsi

	   public function logout(){
		$this->session->sess_destroy();
		redirect('Halaman_utama/login');
	}

	public function halaman_selengkapnya($id){
		$data['lapor'] = $this->Lapor_model->getDataId($id);
		//folder = Lapor dan file = halaman_selengkapnya
		$this->load->view('Lapor/halaman_selengkapnya',$data);
		$this->load->view('templates/footer');
	}
 
	}//class



 ?>