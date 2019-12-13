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

}