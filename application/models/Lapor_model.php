<?php

class Lapor_model extends CI_model {
    public function getAllLaporan()
    {
        return $this->db->get('laporan')->result_array();
    }

    public function createLaporan() 
    {
        date_default_timezone_set('Asia/Jakarta');
        $data = [
            "nama" => "cobaanama",
            "laporan" => $this->input->post('komentar'),
            "tanggal" => mdate('%Y-%m-%d'),
            "waktu" => mdate('%H:%i:%s'),
            "file" => "cobafile",
            "aspek" => $this->input->post('aspek')
        ];

        $this->db->insert('laporan',$data);
    }
}
?>