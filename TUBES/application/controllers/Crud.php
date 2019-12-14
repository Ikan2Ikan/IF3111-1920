<?php 

class Crud extends CI_Controller{
 
 function __construct(){
     parent::__construct();		
     $this->load->model('m_data');
     $this->load->helper(array('form','url'));
 }

 function index(){
    $this->load->view('desain');
    $this->load->view('mainpage');
}

 function aksi() {
    $config['upload_path']  = './gambar/';
    $config['allowed_types'] = 'jpg|png|pdf|docx|doc|jpeg|xls|xlsx|ppt|pptx';
    $config['max_size'] = 2048;
    //$config['max_width'] = 1028;
    //$config['max_height'] = 768;

    $this->load->library('upload', $config);

    date_default_timezone_set("Asia/Jakarta");
    $isi_laporan = $this->input->post('isi_laporan');
    $kategori = $this->input->post('kategori');
    $tgl_laporan = date("Y-m-d H:i:s");
    $lampiran = $this->upload->do_upload('lampiran');

    $data = array(
        'isi_laporan' => $isi_laporan,
        'kategori' => $kategori,
        'tgl_laporan' => $tgl_laporan,
        'lampiran' => $lampiran
        );
        
    $this->m_data->input_data($data,'laporan');
    redirect('');
 }
}