<?php
class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Comment');
    }

    public function index(){
        
        $data['judul'] = "Halaman Utama";
        $this->load->view('templates/header', $data);
        $this->load->view('V_home',$data);
    }

    public function detailComm(){

    }

    
}

?>