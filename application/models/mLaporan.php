<?php

class mLaporan extends CI_Model
{

    var $table = 'laporan'; //nama tabel dari database

    public function __construct()
    {
        parent::__construct();
    }

    public function getDataLaporan()
    {
        $this->db->select("*");
        $this->db->from('laporan');
        $this->db->join('user', 'laporan.idUser=user.idUser');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_detail($id)
    {
        $this->db->select("*");
        $this->db->from('laporan');
        $this->db->join('user', 'laporan.idUser=user.idUser');
        $this->db->where('laporan.idKomentar', $id);
        $query = $this->db->get();
        return $query->result();
    }

    function del_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}



}
