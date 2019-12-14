<?php

class Home extends CI_Controller {
    public function index(){
        $this->load->model('Md_komentar');
        $data['result'] = $this->Md_komentar->tampilDaftarKomentar();
        $data['title'] = "Halaman Utama";
        $this->load->view('templates/header_index',$data);
        $this->load->view('home/index.php', $data);
        $this->load->view('templates/footer');
    }

    public function detailKomentar(){
        $this->load->model('Md_komentar');
        $data['id']=$this->uri->segment(3);
        $data['result']=$this->Md_komentar->tampilDetailKomentar($data['id']);
        $this->load->view('home/detail_komentar', $data);        
    }
    
}
?>