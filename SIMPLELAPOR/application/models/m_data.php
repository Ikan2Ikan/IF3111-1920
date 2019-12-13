<?php

class M_data extends CI_Model
{
	public function tampil_data()
	{
		return $this->db->get('laporan');
	}

	public function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}
	public function tampil()
	{
		$query = $this->db->get('laporan');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}

	public function per_id($id_laporan)
	{
		$this->db->where('id_laporan', $id_laporan);
		$query = $this->db->get('laporan');
		return $query->result();
	}

	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
}
