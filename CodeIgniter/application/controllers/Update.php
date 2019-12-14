<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Update extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('m_data');
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        $data ['ubah'] = $this->m_data->ubahLaporan();
       
        $this->form_validation->set_rules('laporan','Laporan','required');
        $this->form_validation->set_rules('aspek','Aspek','required');

        if($this->form_validation->run() == FALSE){
            $data ['judul'] = 'Ubah Laporan';
            $this->load->view('ubah_laporan/index',$data);
        }
        else{
            $this->m_data->updateLaporan();
         
        }
    }

    
}

?>