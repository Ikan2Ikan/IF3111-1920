<?php
class input_form extends CI_Model{

    function input($table, $data){
        $this->db->insert($table, $data);
    }
}
?>