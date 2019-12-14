<?php

class Maccount extends CI_Model
{

    // var $table = 'user';
    public function __construct()
    {
        parent::__construct();
    }

    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function daftar($data)
    {
        $daftar = $this->db->insert('user', $data);
        return $daftar;
    }
}
