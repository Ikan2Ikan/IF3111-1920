<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    public function index($page = 'test'){
        $this->load->helper('url');
        $this->load->view('template/header');
        $this->load->view('pages/'.$page);
        $this->load->view('template/footer');
    }
}