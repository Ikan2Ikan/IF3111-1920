<?php
class Home extends CI_Controller {
    public function index(){
        $this->load->view('V_home');   
    }

    public function detailComm(){
        $this->load->model('Comment');
        
    }

    
}

?>