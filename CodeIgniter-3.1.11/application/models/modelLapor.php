<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelLapor extends CI_Model
{
	public function GetLapor()
	{
		$data = $this->db->query('select * from lapor');

		return $data->result_array();
	}

	public function InsertData($data)
	{
		$isi = $this->db->insert('lapor', $data);

		return $isi;
	}

	public function UpdateData($data, $where)
	{
		$isi = $this->db->update('lapor', $data, $where);

		return $isi;
	}

	public function DeleteData($where)
	{
		$isi = $this->db->delete('lapor', $where);

		return $isi;
	}

	public function tampilData()
	{
		$data = $this->db->query('select * from lapor');

		foreach ($data->result_array() as $key) {
			echo "id : " . $key['id'] . "<br>";
			echo "laporan : " . $key['laporan'] . "<br>";
			echo "aspek : " . $key['aspek'] . "<br>";
			echo "file : " . $key['file'] . "<hr>";
		}
	}
}
