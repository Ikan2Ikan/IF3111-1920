<?php 
class Crud extends CI_Controller{
 
 function __construct(){
     parent::__construct();		
     $this->load->model('m_data');
             $this->load->helper('url');
 }

 function index(){
    $this->load->view('style');
    $this->load->view('v_home');
    $data['lapor'] = $this->m_data->tampil_data();
    $this->load->view('v_list', $data);
}

function tambah() {
    date_default_timezone_set("Asia/Jakarta");
    $isi = $this->input->post('isi');
    $aspek = $this->input->post('aspek');
    $lampiran = $this->input->post('lampiran');
    $waktu = date("Y-m-d H:i:s");

    $data = array(
        'isi' => $isi,
        'aspek' => $aspek,
        'waktu' => $waktu,
        'lampiran' => $lampiran
        );
        
    $this->m_data->input_data($data,'laporan');
    redirect('crud/index');
 }

public function tampil()
	{
        $this->load->view('style');
        $this->load->view('v_home');
        $data['lapor'] = $this->m_data->tampil_data();
        $this->load->view('v_list', $data);
	}
}