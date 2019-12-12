<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('post_model');
        $this->load->helper('url_helper');
    }

	public function index($id){
        $data['post_item'] = $this->post_model->get_posts($id);
    }

    public function view($id){
        $data['post_item'] = $this->post_model->get_posts($id);
        $this->load->view('template/header');
        $this->load->view('pages/laporan', $data);
        $this->load->view('template/footer');
    }
}