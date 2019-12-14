<?php
class Home extends CI_Controller
{
	public function  view($page = 'index_home')
	{
		if (!file_exists(APPPATH . 'views/home/' . $page . '.php')) {
			show_404();
		}
		$data['title'] = ucfirst($page);

		$this->load->view('layout/header');
		$this->load->view('home/' . $page, $data);
		$this->load->view('layout/footer');
	}
}
