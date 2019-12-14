<?php
class Md_komentar extends CI_Model{
    public function __construct(){
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function tambahKomentar(){
        $data = [
            'id' => '',
            'waktuPengiriman' => date('Y-m-d H:i:s'),
            'judul_komentar' => $this->input->post('judul_komentar'),
            'komentar' => $this->input->post('komentar'),
            'kategori' => $this->input->post('kategori'),
            'lampiran' => $this->fileUpload()
        ];
        $this->db->insert('komentar', $data);
    }

    public function tampilDaftarKomentar(){
        $data = $this->db->query("SELECT * FROM komentar ORDER BY id DESC")->result_array();
        return $data;
    }

    public function tampilDetailKomentar($id){
        $data = $this->db->query("SELECT * FROM komentar WHERE id=$id")->result_array()[0];
        return $data;
    }

    public function fileUpload(){
        $config = [
            'upload_path' => './Dokumen/file_upload',
            'allowed_types' => "gif|jpg|jpeg|png|pdf|doc|docx|xls|xlsx|ppt|pptx",
            'overwrite' => TRUE,
            'max_size' => "2048000",
            'max_height' => "768",
            'max_width' => "1024",
            'file_name' =>  $this->input->post('lampiran') . "_" . date('dmY-His')
        ];

        $this->load->library('upload', $config);
        $this->upload->do_upload('lampiran');
        print_r($this->upload->display_errors());

        return $this->upload->data('file_name');
    }
  

}
?>