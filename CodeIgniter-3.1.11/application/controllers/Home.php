<?php


class Home extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Lapor_model'); //ngambil model model_lapor dari folder models
		$this->load->library('form_validation');
	}
	
	public function index(){
		$data['lapor'] = $this->Lapor_model->getlapor(); //getlapor() ada di model Model_lapor
		$this->load->view('home/index',$data);
	}

	public function tambah(){
		
		//validasi form
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		//$this->form_validation->set_rules('File', 'File', 'required');
		if($this->form_validation->run() == FALSE){
			$this->load->view('tambah/index');
		}else{
			$this->Lapor_model->tambah();
			redirect('index.php/Home');	
		}
		
	}

	public function detail(){
		$this->load->view('detail/index');
	}
}
