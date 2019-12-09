<?php
    class post_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_posts($isi = FALSE){
            if($isi === FALSE){
                $query = $this->db->get('posts');
                return $query->result_array();
            }

            $query = $this->db->get_where('posts', array('isi' => $isi));
            return $query->row_array;
        }
    }
?>