<?php defined('BASEPATH') or exit('No direct script access allowed');

class Lapor_model extends CI_model {
    public function index()
    { }

    //CREATE DATA
    public function upload(){
        $config['upload_path'] = './asset/filess/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']  = '2048';
        $config['remove_space'] = TRUE;
      
        $this->load->library('upload', $config); // Load konfigurasi uploadnya
        if($this->upload->do_upload('lampiran')){ // Lakukan upload dan Cek jika proses upload berhasil
          // Jika berhasil :
          $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
          return $return;
        }else{
          // Jika gagal :
          $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
          return $return;
        }
      }
    
    public function create($upload) 
    {
        date_default_timezone_set('Asia/Jakarta');
        $data = array(
            'nama'=>"cobanamaa",
            'laporan' => $this->input->post('komentar'),
            "tanggal" => mdate('%Y-%m-%d'),
            "waktu" => mdate('%H:%i:%s'),
            'lampiran' => $upload['file']['file_name'],
            "aspek" => $this->input->post('aspek')
          );

          return $this->db->insert('laporan', $data);
    }
    
    public function getAllLaporan(){
        
    }
        
}
