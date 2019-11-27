<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Buat extends CI_Controller{
    public function __construct()
	{
		parent::__construct();
        $this->load->model('Home_model');
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
        
	}
    
    public function index()
    {
       
        $this->form_validation->set_rules('laporan','Laporan','required');
        $this->form_validation->set_rules('aspek','Aspek','required');
        $this->form_validation->set_rules('myFile','File','required');
        
        if($this->form_validation->run() == FALSE){
            $data ['judul'] = 'Buat Laporan';
            $this->load->view('buat_laporan/index',$data);
        }
        else{
            $this->Home_model->tambahLaporan();
            redirect('home');
        }
    }

    public function do_upload(){
        $config['upload_path']          = './gambar/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
     
        $this->load->library('upload', $config);
     
        if ( ! $this->upload->do_upload('myFile')){
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('buat_laporan/index', $error);
        }else{
            $data = array('upload_data' => $this->upload->data());
            $data = [ 
                "laporan" => $this->input->post('laporan',true),
                "lampiran" => $this->input->data(),
                "waktu" => $this->input->post('$tgl',true),
                "aspek" => $this->input->post('aspek',true)
            ];

            // $this->load->view('v_upload_sukses', $data);
            $this->db->insert('simple_lapor', $data);
        }
       
        }
        



}

?>