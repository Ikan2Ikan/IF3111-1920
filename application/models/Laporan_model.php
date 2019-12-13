<?php

class Laporan_model extends CI_Model {

    public function getIndex(){
        $laporan= $this->db->get('laporan');
        return $laporan->result();
    }
}

?>