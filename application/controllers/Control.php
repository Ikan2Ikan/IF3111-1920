<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Control extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("control_model");
        $this->load->helper(array('form', 'url'));
        // $this->load->library('form_validation');
    }

    public function index()
    {
        // $data["pages"] = "tampilan_utama";
        $listlaporan = $this->control_model->get_all_laporan();
        $data = array(
            "listlaporan" => $listlaporan
        );
        $this->load->view("pages/tampilan_utama", $data);
    }

    public function tampilan_lapor()
    {
        //$data["pages"] = "tampilan_lapor";
        $this->load->view("pages/tampilan_lapor");
    }
    public function tampilan_detail($id)
    {
        $this->load->view("pages/tampilan_detail");
    }

    public function tambah()
    {
        $data = array();
        $upload = $this->control_model->upload();
        $this->control_model->create($upload);
    }

    public function search(){
        $keyword = $this->input->post('keyword');
        $listlaporan = $this->control_model->search_laporan($keyword);
        $data = array(
            "listlaporan" => $listlaporan
        );
        $this->load->view("pages/tampilan_utama", $data);
    }
}
