<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Laporan extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->model('laporan_model');
            $this->load->helper('url_helper');
        }

        public function input(){
            $isi = $this->input->post('kolomlaporan');
            $aspek = $this->input->post('dropdownbuat');

            $data = array(
                'isi_laporan' => $isi,
                'aspek' => $aspek
            );
            $this->laporan_model->input_laporan('laporan',$data);
            redirect('template');
        }

        public function delete($id){
            $where = array('id_laporan' => $id);
            $this->laporan_model->hapus_laporan($where, 'laporan');
            redirect('template');
        }
        
        public function view($id) {
            $data['laporan'] = $this->laporan_model->get_laporan($id);
            $this->load->view('default/header');
            $this->load->view('konten/detail_laporan', $data);
        }
 
        
    }