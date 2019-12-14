<?php




class History extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('history_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$data['history'] = $this->history_model->get_history();
		$data['title'] = 'History Page';

		$this->load->view('history/index', $data);
	}

	public function view($q = NULL)
	{
		$data['history_item'] = $this->history_model->get_history($q);

		$this->load->view('history/view', $data);
	}
}