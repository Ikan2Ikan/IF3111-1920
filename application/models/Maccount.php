<?php

class Maccount extends CI_Model
{

    var $table = 'user';
    public function __construct()
    {
        parent::__construct();
    }

    public function daftar($data)
    {
        $daftar = $this->db->insert('user', $data);
        return $daftar;
    }
}
