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
            'lampiran' => $this->uploadfile()
        ];
        $this->db->insert('komentar', $data);
        redirect('home');
    }

    public function  sComm()
    {
        $data = $this->db->query("SELECT * FROM komentar")->result_array();
        return $data;
    }
    public function sComm2($id)
    {
        $data = $this->db->query("SELECT * FROM komentar WHERE id_comm=" . $id)->row_array();
        return $data;
    }

    public function detComm($id)
    { 
         $data = $this->db->query("DELETE FROM komentar WHERE id_comm=" . $id);
         return $data;
    }

    public function uComm()
    { 
        $data = [
            'id_comm' => '',
            'timestamp' => date('d m Y |H:i:s'),
            'nama' => $this->input->post('nama'),
            'isi_comm' => $this->input->post('comment'),
        ];
        $this->db->where('id_comm',$this->input->post('id'));
        $this->db->update('komentar',$data);
        
    }

    public function uploadfile()
    {
        $file = [
            'upload_path' => './assets/file',
            'allowed_type' => "jpg|png|doc|gif|jpeg|pdf",
            'overwrite' => TRUE,
            'max_size' => "2048000",
            'max_height' => "768",
            'max_width' => "1024",
            'file_name' => $this->input->post('lampiran')
        ];

        $this->load->library('upload', $file);
        $this->upload->do_upload('lampiran');
        print_r($this->upload->display_errors());
        return $this->upload->data('file_name');
    }
}
