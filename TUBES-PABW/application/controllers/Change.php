<?php

class Change extends CI_Controller{
    public function __construct()
	{
        parent::__construct();
        
        $this->load->model('Change_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
        $this->load->library('form_validation');
	}
    
    public function index()
    {

        $data ['change'] = $this->Change_model->getChange();
       
        $this->form_validation->set_rules('komentar','Komentar','required');
        $this->form_validation->set_rules('aspek','Aspek','required');


        if($this->form_validation->run() == FALSE){
            $data ['judul'] = 'Change Page';
            $this->load->view('change_laporan/index',$data);
        }
        else{
            $this->Change_model->updateLaporan();
         
        }
    }

    
}

?>