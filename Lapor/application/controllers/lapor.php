<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class lapor extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_lapor');
    }

    function index(){
        $this->load->view('tampilan');
    }

    function data_laporan(){
        $data=$this->m_lapor->list_lapor();
        echo json_encode($data);
    }

    function login(){
        $this->load->view('login');
    }

    function buat(){
        $this->load->view('buat');
    }

    function tentang(){
        $this->load->view('tentang');
    }

    function daftar (){
        $this->load->view('daftar');
    }

}


?>