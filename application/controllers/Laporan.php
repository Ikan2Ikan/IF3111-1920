<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('post_model');
        $this->load->helper(array('form', 'url'));
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
        $this->load->view('pages/add', array('error' => ' '));
        $this->load->view('template/footer');
    }

    public function input(){
        $isi = $this->input->post('isi-laporan');
        $aspek = $this->input->post('aspek');
        $lampiran = $_FILES['lampiran']['name'];
        
		if ($lampiran = ''){
        
        }else{
            $config['upload_path']   = './lampiran/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['file_name']    = date('Y-m-d H-i-s', time());
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('lampiran')) {
                echo "upload gagal"; die();
            }else{
                $lampiran = $this->upload->data('file_name');
            }

            $data = array(
                'isi'   => $isi,
                'aspek' => $aspek,
                'lampiran' => $lampiran
            );

            $this->post_model->input_laporan('posts', $data);
            redirect('');
        }
    }

    public function delete($id){
        $deleted_row = array('id'=>$id);
        $this->post_model->hapus_data($deleted_row, 'posts');
        redirect('');
    }

    public function edit($id){
        $searchkey = array('id' => $id);
        $data['laporan'] = $this->post_model->get_posts($id);
        $this->load->helper('form');
        $this->load->view('template/header');
        $this->load->view('pages/edit', $data);
        $this->load->view('template/footer');
    }

    public function update($id){
        $isi = $this->input->post('isi-laporan');
        $aspek = $this->input->post('aspek');
        $data = array(
            'isi'   => $isi,
            'aspek' => $aspek
        );
        $searchkey = array('id' => $id);
        $this->post_model->update_data($searchkey, $data, 'posts');
        redirect('laporan/view/'.$id);
    }
}