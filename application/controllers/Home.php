<?php
class Home extends CI_Controller {
    public function index(){
        $this->load->view('V_home');
        $this->load->model('Comment');
        // $data['result'] = $this->Comment->showAllComments();
        $data['judul'] = "Halaman Utama";
        // $this->load->view('templates/index_header', $data);
        // $this->load->view('home/index.php', $data);
        // $this->load->view('templates/footer');  
    }

    public function detailComm(){
        $this->load->model('Comment');
        
    }

    
}

?>