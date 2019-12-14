<?php defined('BASEPATH') or exit('No direct script access allowed');

class control_model extends CI_Model
{
    public function index()
    { }

    public function upload()
    {
        $config['upload_path'] = './lampiran/';
        $config['allowed_types'] = 'jpg|png|jpeg|doc|docx|xls|xlsx|ppt|pptx|pdf';
        $config['max_size']  = '2048';
        $config['remove_space'] = TRUE;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('lampiran')) {
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        }
    }

    public function create($upload)
    {
        $object = array(
            'laporan' => $this->input->post('laporan'),
            'aspek' => $this->input->post('aspek'),
            'lampiran' => $upload['file']['file_name'],
            'ukuran_file' => $upload['file']['file_size'],
            'tipe_file' => $upload['file']['file_type']
        );

        return $this->db->insert('laporan', $object);
    }

    public function get_all_laporan(){
        $this->db->select("*");
        $this->db->from("laporan");
        $this->db->order_by("waktu", "desc");
        $query = $this->db->get();
        return $query->result();
    }
}
