<?php
class Cari_model extends CI_model{
    public function getAllHome(){
        // return $this->db->get('simple_lapor',)->result_array();
        
        // $this->db->order_by("id_lapor", "desc");
        return $this->db->get('simple_lapor')->result_array();
        // $query = $this->db->get();
        // return $query->result();
    }
    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('simple_lapor');
        $this->db->like('laporan', $keyword);
        $this->db->or_like('aspek', $keyword);
        // $this->db->or_like('lampiran', $keyword);
        return $this->db->get()->result();
    }
}

?>
