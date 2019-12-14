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
	public function buatLaporan()
	{	
        $this->load->model('Aspek_model');

        $aspek=$this->Aspek_model->getIndex();
        $data['aspek']=$aspek->result();
		$this->load->view('buatLaporan',$data);
    }
	
	private function upload_file()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'jpeg|jpg|png';
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


		$data = array (
			'laporan' => $this->input->post('laporan'),
			'id_aspek' => $this->input->post('id_aspek'),
			'file' => $image['file_name']
		);

		$sql = $this->db->insert('laporan',$data);
		// echo $sql;
		if($sql==1){
			//view bener
			return redirect('/', 'refresh');
		}else{
			//else
		}
	}
	
	public function index(){
		$this->load->model('Laporan_model');

        // $laporan=$this->Laporan_model->getIndex();
		
		$jumlah_data = $this->Laporan_model->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/laporan/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 3;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$laporan = $this->Laporan_model->data($config['per_page'],$from);
		
		
        $data['laporan']=$laporan;
		$this->load->model('Aspek_model');
		
        $aspek=$this->Aspek_model->getIndex();
		$data['aspek']=$aspek->result();
		
		$this->load->view('tampilLaporan',$data);
	}

	public function detail($id){
		$this->load->model('Laporan_model');

        $laporan=$this->Laporan_model->read($id);
		$data['laporan']=$laporan;
		

		$this->load->model('Aspek_model');
        $aspek=$this->Aspek_model->read($laporan->id_aspek);
		$data['aspek']=$aspek;
		
		$this->load->view('tampilDetail',$data);
	}

	public function edit($id){
		$this->load->model('Laporan_model');

        $laporan=$this->Laporan_model->read($id);
		$data['laporan']=$laporan;

		// $this->load->view('edit-project-image', $data);
		
		$this->load->model('Aspek_model');
        $aspek=$this->Aspek_model->getIndex();
		$data['aspek']=$aspek->result();

		$this->load->view('updateLaporan',$data);
	}

	public function update($id){
		
		
		$data = array (
			'laporan' => $this->input->post('laporan'),
			'id_aspek' => $this->input->post('id_aspek'),
		);
		
		if(strlen($_FILES['fileLapor']['name'])>0){
			$file = $this->upload_file();
			$data['file'] = $file['file_name'];
		}
		$this->load->model('Laporan_model');
		
		$res = $this->Laporan_model->update($id,$data);
		echo $res;
		// echo $sql;
		if($res==1){
			//view bener
		}else{
			//else
		}
		redirect('/laporan/detail/'.$id, 'refresh');
	}

	public function delete(){
		$del = $this->db->delete('laporan', array('id' => $id));
	}

	public function editprojectimage($projectID){    

		//get project by id number
		$data['indiv_project'] = $this->project->single_project($projectID);

		$this->load->view('templates/header');
		
		$this->load->view('templates/footer');
	}

	public function search($search){
		$search = urldecode($search);
		$this->load->model('Laporan_model');
		$result = $this->Laporan_model->search($search);
		$res = json_encode($result);
		// $res = json_decode($res);
		echo $res;
	}
	
}