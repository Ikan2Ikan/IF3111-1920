<?php

class Laporan_model extends CI_Model {

    public function getIndex(){
        $laporan= $this->db->get('laporan');
        return $laporan->result();
    }

    public function read($id){
        $this->db->where('id',$id);
        $query=$this->db->get('laporan');
        return $query->row();
    }
    
    public function update($id,$data){
        $this->db->where('id',$id);
        $this->db->update('laporan',$data);
    }
}

?>