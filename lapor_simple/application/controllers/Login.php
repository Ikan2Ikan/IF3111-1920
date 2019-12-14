<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class Login extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		$this->load->view('login_view');
	}

	public function login()
	{
		// mengambil email yang dimasukkan
		$username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
		// mengambil password yanng dimasukkan
		$password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);

		$cek_mahasiswa = $this->login_model->cek_mahasiswa($username, $password);

		//Set data user dari DB ke Session
      if ($cek_mahasiswa->num_rows() > 0) {
	        $data = $cek_mahasiswa->row_array();
	        $this->session->set_userdata('masuk', TRUE);
	        $this->session->set_userdata('akses', 'Mahasiswa');
	        $this->session->set_userdata('ses_id', $data['NIM']);
	        $this->session->set_userdata('ses_nama', $data['Nama']);
	        $this->session->set_userdata('ses_email', $data['Email']);
	        $this->session->set_userdata('ses_no_telp', $data['No_telepon']);
	        $this->session->set_userdata('ses_alamat', $data['Alamat']);
	        $this->session->set_userdata('ses_foto', $data['foto']);
	        redirect('Beranda');
	      } else {
	        $this->session->set_flashdata('error', 'Username / Password Salah!');
	        $url = base_url('Login');
	        redirect($url);
	      }
	}

	function logout()
	{
	    $this->session->sess_destroy();
	    $url = base_url();
	    redirect($url);
	}
}