<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('Auth_model');
    }
    public function index()
    {
        $this->load->view('auth/header');

        if($this->input->post('submit')) {
            $data['user'] = $this->Auth_model->cari_Like($this->input->post('search'));
        }
        
        $data['user'] = $this->Auth_model->tampilLapor()->result();
        
        $this->load->view('auth/home', $data);
    }

    public function Buat_Laporan()
    {
        $this->load->view('auth/BuatLaporan');
        
    }
    
}