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

    public function add(){
        $this->load->helper('form');
        $this->load->view('template/header');
        $this->load->view('pages/add');
        $this->load->view('template/footer');
    }

    public function input(){
        $isi = $this->input->post('isi-laporan');
        $aspek = $this->input->post('aspek');

        $data = array(
            'isi'   => $isi,
            'aspek' => $aspek
        );
        $this->post_model->input_laporan('posts', $data);
        redirect('');
    }

    public function delete($id)
    {
        $deleted_row = array('id'=>$id);
        $this->post_model->hapus_data($deleted_row, 'posts');
        redirect('');
    }
}