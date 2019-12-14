<?php

class Lapor_model extends CI_model {
    public function getAllLaporan()
    {
        return $this->db->get('laporan')->result_array();
    }

    public function viewlampiran()
    {
        return $this->db->get('file')->result();
    }

    public function upload(){
        $config['upload_path'] = './asset/images/';
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
    
    public function createLaporan($upload) 
    {
        date_default_timezone_set('Asia/Jakarta');
        $data = array(
            'nama'=>"cobanamaa",
            'laporan' => $this->input->post('komentar'),
            "tanggal" => mdate('%Y-%m-%d'),
            "waktu" => mdate('%H:%i:%s'),
            'file' => $upload['file']['file_name'],
            "aspek" => $this->input->post('aspek')
          );
          $this->db->insert('laporan', $data);
    }

        
}
