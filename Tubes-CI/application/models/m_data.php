<?php
class M_data extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function tampil_data($id = FALSE){
        if ($id==FALSE){
            $query = $this->db->get('laporan');
            return $query->result_array();
        }
        $query = $this->db->get_where('laporan', array('id_laporan'=>$id));
        return $query->row_array();
    }

    function input_data($data,$table){
        $this->db->insert($table,$data);
    }

    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

}
?>