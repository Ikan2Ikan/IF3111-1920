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

    public function delete($id){
        $this->db->where('id',$id);
        $this->db->update('laporan');
    }

    public function data($number,$offset){
		return $query = $this->db->get('laporan',$number,$offset)->result();		
	}
 
	public function jumlah_data(){
        $this->db->order_by('updated_at', 'DESC');
		return $this->db->get('laporan')->num_rows();
    }
    
    public function search($search){
        $this->db->like('laporan', $search);
        $laporan = $this->db->get('laporan');
        return $laporan->result();
    }
}

?>