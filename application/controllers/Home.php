<?php
class Home extends CI_Controller {
    public function index(){
        $this->load->view('V_home');   
    }

    public function apapun(){
        $this->load->view('V_apapun');
    }

    
}

?>