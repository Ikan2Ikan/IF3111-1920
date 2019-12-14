<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public $table       = 'userlogin';

    public function cari_Like($inp)
    {
        $this->db->order_by('tanggal', 'desc');
        return $this->db->like('isi', $inp);
    }
}
