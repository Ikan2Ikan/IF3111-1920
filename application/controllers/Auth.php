<?php

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');

	}

	public function index(){

		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');


		if($this->form_validation->run()==false){
		$data['judul']='Login';
		$data['link']='home';
		$this->load->view('templates/header',$data);
		$this->load->view('auth/login');
		$this->load->view('templates/footer');
		}else{
			$this->login();
		}
	}

	private function login(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$user=$this->db->get_where('user',['username'=>$username])->row_array();
		if($user){
			if($password== $user['password']){
				$data=[
					'username'=>$user['username']
				];
				$this->session->set_userdata($data);
				redirect ('user');
			 } else{
			 	 $this->session->set_flashdata('message','Password salah!');
			 	  redirect('auth');
			 }
		 } else{
		 	$this->session->set_flashdata('message','Username salah!');
		 	 redirect('auth');
		 }
	}

	public function logout(){
		$this->session->unset_userdata('username');

		redirect('home');
	}
}
