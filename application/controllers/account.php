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
        if ($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
            redirect('home');

        $this->load->view('account/login');
    }

    public function login()
    {
        $username = $this->input->post('email');
        $password = $this->input->post('password');
        $where = array(
            'email' => $username,
            'password' => md5($password)
        );
        $cek = $this->Maccount->cek_login("user", $where)->num_rows();

        if ($cek > 0) {
            $data_session = array(
                'nama' => $username,
                'status' => 1
            );
            $this->session->set_userdata($data_session);
            redirect('Home');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email atau Password salah!</div>');
            redirect('');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
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
            redirect('account');
        }
    }
}
