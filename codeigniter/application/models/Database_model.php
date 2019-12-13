<?php 
class database_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }

    public function get_data($id = FALSE){
        if ($id == FALSE) {
            $query = $this->db->get('laporan');
            return $query->result_array();
        }
        $query = $this->db->get_where('laporan', array('id' => $id));
        return $query->row_array();
    }

    // public function cari ($data){
    //     $this->db->like('laporan', $data)
    //     $query = $this->db->get('laporan');
    //     return $query->result_array();
    // }

}