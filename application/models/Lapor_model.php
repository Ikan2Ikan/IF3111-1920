<?php

class Lapor_model extends CI_model {
    public function getAllLaporan()
    {
        return $this->db->get('laporan')->result_array();
    }
}
?>