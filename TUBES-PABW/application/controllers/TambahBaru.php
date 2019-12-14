<?php


class TambahBaru extends CI_Controller{
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
       
        $this->form_validation->set_rules('komentar','Komentar','required');
        $this->form_validation->set_rules('aspek','Aspek','required');
        
        
        if($this->form_validation->run() == FALSE){
            $data ['judul'] = 'Tambah Baru';
            $this->load->view('create_new/index',$data);
        }
        else{
            $this->Home_model->tambahBaru();
            
        }
    }


}

?>