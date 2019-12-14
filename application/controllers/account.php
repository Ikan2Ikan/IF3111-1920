<?php
defined('BASEPATH') or exit('No direct script access allowed');

class account extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation'));
        $this->load->Model('Maccount');
    }

    public function index()
    {
        $this->load->view('account/login');
    }
    public function daftar()
    {
        $this->form_validation->set_rules('nama_lengkap', 'Nama_lengkap', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Password2', 'required|matches[password]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('account/register');
        } else {

            $data['nama_lengkap']   =    $this->input->post('nama_lengkap');
            $data['username'] =    $this->input->post('username');
            $data['email']  =    $this->input->post('email');
            $data['password'] =    md5($this->input->post('password'));

            $this->Maccount->daftar($data);
        }
    }
}
