 <?php


class Tampil extends CI_Controller {

	public function index()
	{
		
	
		
		$this->load->model('m_lapor');
		$data['lapor']=$this->m_lapor->get_data();
		$this->load->view('tampil_awal', $data);
	}

	public function lapor()
	{

		$this->load->library('form_validation');

		$this->form_validation->set_rules('deskripsi','Laporan/Komentar','required|min_length[20]');
		$this->form_validation->set_rules('file','berkas','required');
		

		if($this->form_validation->run() == FALSE){
			$this->load->view('buat_laporan');
		}else{
			$this->m_lapor->tambahLaporan();
			redirect('Tampil/index');
		}

		
	}

	public function detail(){
		$this->load->view('detail');
	}
}
