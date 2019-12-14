<?php

class Comment extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function tComm()
    {
        $data = [
            'id_comm' => '',
            'timestamp' => date('d m Y |H:i:s'),
            'nama' => $this->input->post('nama'),
            'isi_comm' => $this->input->post('comment'),
            'aspek' => $this->input->post('aspek'),
            'lampiran' => $this->input->post('lampiran')
        ];
        $this->db->insert('komentar', $data);
        redirect('home');
    }

    public function  sComm()
    {
        $data = $this->db->query("SELECT * FROM komentar")->result_array();
        return $data;
    }

    public function detComm()
    {
        // $data = $this->db->query("SELECT * FROM komentar WHERE id=$id")->result_array()[0];
        // return $data;
    }

    public function uploadfile()
    {
        $file = [
            'fileup' => '',
            'typefile' => "jpg|png|doc|gif|jpeg|pdf",
            'overwrite' => TRUE,
            'size' => "2048000",
            'height' => "768",
            'width' => "1024",
            'filename' => $this->session->userdata('id') .  "-" . data(dmY - His)
        ];

        $this->load->library('upload', $file);
        $this->upload->do_upload('lampiran');
        print_r($this->upload->display_errors());
        return $this->upload->data('filename');
    }
}
