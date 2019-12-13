<?php

class Lapor_model extends CI_model {
    public function getAllLaporan()
    {
        return $this->db->get('laporan')->result_array();
    }

    public function createLaporan() 
    {
        $data = [
            "nama" => "cobaanama",
            "laporan" => $this->input->post('komentar'),
            "tanggal" => "cobaatgl",
            "waktu" => "cobawaktu",
            "file" => "cobafile",
            "aspek" => $this->input->post('aspek')
        ];

        $this->db->insert('laporan',$data);
    }
}
?>