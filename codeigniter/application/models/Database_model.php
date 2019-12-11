<?php 
class database_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }

    public function get_data(){
        $query = $this->db->get('laporan');
        return $query->result_array();
    }

}