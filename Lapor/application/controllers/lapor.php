<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class lapor extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_lapor');
    }

    function index(){
        $this->load->view('home');
    }

    function login(){
        $this->load->view('login');
    }

    function buat(){
        $this->load->view('buat');
    }


}


?>