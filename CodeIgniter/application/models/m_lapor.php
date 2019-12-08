<?php

/**
 * 
 */
class M_lapor extends CI_Model
{
	
	public function get_data()
	{
		return $this->db->get('laporan')->result_array();
	}

	public function tambahLaporan(){
		$data = [
			"deskripsi" => $this->input->post('deskripsi', true),
			"aspek" => $this->input->post('aspek',true),
			"berkas" => $this->input->post('berkas',true)
		];

		$this->db->insert('laporan', $data);
	}
}