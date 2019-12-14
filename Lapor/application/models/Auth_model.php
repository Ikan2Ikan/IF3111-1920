<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public $table       = 'userlogin';
    // public $id          = 'tbl_user.id';

    public function reg()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password1'))
        );
        return $this->db->insert('userlogin', $data);

    }

    public function Baca($data) {
        return $this->db->get_where('komentar', $data);
    }

    public function inputKomentar($data)
    {
        $this->db->insert('komentar', $data);
    }

    public function login($b) {
        return $this->db->get_where('userlogin', $b);
    }

    public function tampilLapor() {
        $this->db->order_by('tanggal', 'desc');
        return $this->db->get('komentar');
    }

    public function cari_Like($inp) {
        $this->db->order_by('tanggal', 'desc');
        return $this->db->like('isi', $inp);
    }

    public function hapusdata($id) {
        $this->db->where($id);
		$this->db->delete('komentar');
    }

    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}
