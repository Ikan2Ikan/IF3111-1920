<?php
class Pusatlapor extends CI_Controller
{
	public function index()
	{

		$data['title'] = 'Simple Lapor';

		$data['pusatlapor'] = $this->Kirim_lapor->get_pusatlapor();

		$this->load->view('layout/header');
		$this->load->view('pusatlapor/index', $data);
		$this->load->view('layout/footer');
	}

	public function view($id = NULL)
	{
		$data['post'] = $this->Kirim_lapor->get_pusatlapor($id);

		if (empty($data['post'])) {
			show_404();
		}

		$data['title'] = 'Simple Lapor';

		$this->load->view('pusatlapor/laporan', $data);
	}
}
