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
        $this->db->order_by('id_laporan', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_detail($id)
    {
        $this->db->select("*");
        $this->db->from('laporan');
        $this->db->where('laporan.id_laporan', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    function del_data($id)
    {
        $this->db->where($id);
        $this->db->delete('laporan');
    }
    function insert_laporan($data)
    {
        $tambah = $this->db->insert('laporan', $data);
        return $tambah;
    }
    function update_laporan($data, $id)
    {
        $this->db->where('id_laporan', $id);
        $update = $this->db->update('laporan', $data);
        return $update;
    }
}
