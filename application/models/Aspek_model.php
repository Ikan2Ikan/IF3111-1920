<?php

class Aspek_model extends CI_Model {

    public function getIndex(){
        $aspek= $this->db->get('aspek');
        return $aspek;
    }
}

?>