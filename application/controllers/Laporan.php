<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	
        $this->load->model('Aspek_model');

        $aspek=$this->Aspek_model->getIndex();
        $data['aspek']=$aspek->result();
		$this->load->view('buatLaporan',$data);
    }
	
	private function upload_file()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']				= '1024';
		// $config['max_height']				= '225';
		// $config['max_width']				= '225';
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('fileLapor')){
			return array(
				'error' => 1,
				'desc' => $this->upload->display_errors()
			);
		}else{
			return $this->upload->data();
		}
	}

    public function create(){
		$laporan = $this->input->post('laporan');
		$image=$this->upload_file();
		if($image['error']){
			//display error
			
		}

		$data = array (
			'laporan' => $this->input->post('laporan'),
			'id_aspek' => $this->input->post('id_aspek'),
			'file' => $image['file_name']
		);

		$sql = $this->db->insert('laporan',$data);
		// echo $sql;
		if($sql==1){
			//view bener
		}else{
			//else
		}
	}
	
	public function view(){
		$this->load->model('Laporan_model');

        $laporan=$this->Laporan_model->getIndex();
        $data['laporan']=$laporan;
		
		$this->load->model('Aspek_model');

        $aspek=$this->Aspek_model->getIndex();
		$data['aspek']=$aspek->result();
		
		$this->load->view('tampilLaporan',$data);
	}

	public function read($id){
		$this->load->model('Laporan_model');

        $laporan=$this->Laporan_model->getIndex();
        $data['laporan']=$laporan;
		
		$this->load->view('tampilLaporan',$data);
	}
	
	

	// public function view($id){

	// }

}
