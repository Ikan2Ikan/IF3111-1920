<?php 
class C_tampil extends CI_Controller{
 
 function __construct(){
     parent::__construct();		
     $this->load->model('m_data');
             $this->load->helper('url');
 }

public function index()
	{
        $this->load->view('style');
        $this->load->view('header');
        $this->load->view('v_home');
        $data['lapor'] = $this->m_data->tampil_data();
        $this->load->view('v_list', $data);
        $this->load->view('footer');
	}
}