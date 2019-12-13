<?php
class lapor extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_lapor');
    }

    funtion index(){
        $this->load->view('home');
    }

    
}


?>