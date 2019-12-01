<?php
class Hapus_model extends CI_model{
    public function getHapusLaporan(){
        // return $this->db->get('simple_lapor')->result_array();
        $id = $_GET["hapus_id"];
        // return "SELECT * FROM simple_lapor WHERE id_lapor= '$id'";
        // return $this->db->get('simple_lapor')->result_array();
        $this->db->delete('simple_lapor', array('id_lapor' => $id));
       
    }
   
}

?>