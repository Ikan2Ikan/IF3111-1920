<?php

class Aspek_model extends CI_Model {

    public function getIndex(){
        $aspek= $this->db->get('aspek');
        return $aspek;
    }

    public function read($id){
        $this->db->where('id',$id);
        $query=$this->db->get('aspek');
        return $query->row()->nama;
    }
}

?>