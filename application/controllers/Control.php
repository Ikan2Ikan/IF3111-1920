<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Control extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("control_model");
        $this->load->helper(array('form', 'url'));
    }

    // menampilkan semua data ================================================
    public function index()
    {
        $data['laporan'] = $this->control_model->read();
        $this->load->view("pages/tampilan_utama", $data);
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $listlaporan = $this->control_model->search_laporan($keyword);
        $data = array(
            "listlaporan" => $listlaporan
        );
        $this->load->view("pages/tampilan_utama", $data);
    }

    // menampilkan data yang dipilih =========================================
    public function lihat($id)
    {
        $data['laporan'] = $this->control_model->view_by($id);
        $this->load->view('pages/tampilan_detail', $data);
    }

    // menambahkan data ======================================================
    public function tambah()
    {
        $upload = $this->control_model->upload();
        $this->control_model->create($upload);
        redirect('control');
    }

    // mengubah data ========================================================
    public function lihat2($id)
    {
        $data['laporan'] = $this->control_model->view_by($id);
        $this->load->view('pages/tampilan_ubah', $data);
    }

    public function ubah($id)
    {
        $upload = $this->control_model->upload();
        $this->control_model->update($upload, $id);
        redirect('control');
    }

    // menghapus data yang dipilih ==========================================
    public function hapus($id)
    {
        $this->control_model->delete($id);
        redirect('control');
    }

    // load halaman tampilan_lapor ==========================================
    public function tampilan_lapor()
    {
        $this->load->view("pages/tampilan_lapor");
    }


    public function tampilan_detail($id)

    {
        $detail = $this->control_model->get_by_id_laporan($id);
        $data = array(
            "detail" => $detail
        );
        $this->load->view("pages/tampilan_detail", $data);
    }

    // load halaman tampilan_ubah =========================================
    public function tampilan_ubah()
    {
        $this->load->view("pages/tampilan_ubah");
    }
}
