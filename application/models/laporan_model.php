<?php
    class Laporan_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_laporan($id = FALSE){
            if ($id===FALSE){
            
                $query = $this->db->get('laporan');
                return $query->result_array();
            }
            $query = $this->db->get_where('laporan', array('id_laporan'=>$id));
            return $query->row_array();
        }

        public function get_laporan1($id){
            return $this->db->get_where("laporan",$id);
           
        }
    
    
        public function input_laporan($table, $data){
            $this->db->insert($table, $data);
        }

        public function hapus_laporan($where, $table){
            $this->db->where($where);
            $this->db->delete($table);
        }

        public function update($a,$b,$c){
            $this->db->where($a);
            $this->db->update($c,$b);
          
            
        }
        
        public function search_data($keyword,$table){
            $this->db->like('isi_laporan',$keyword);
            $query=$this->db->get($table);
            return $query->result_array();
        }
        
    }
?>