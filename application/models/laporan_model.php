<?php
    class Laporan_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_laporan(){
                $query = $this->db->get('laporan');
                return $query->result_array();
        }
    
        public function input_laporan($table, $data){
            $this->db->insert($table, $data);
        }
    }
?>