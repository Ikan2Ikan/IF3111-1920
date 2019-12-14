<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$data = $this->modelLapor->GetLapor();

		foreach ($data as $key) {
			echo "id : " . $key['id'] . "<br>";
			echo "laporan : " . $key['laporan'] . "<br>";
			echo "aspek : " . $key['aspek'] . "<br>";
			echo "file : " . $key['file'] . "<hr>";
		}
	}

	public function tampil()
	{
		$data = $this->db->query('select * from lapor');

		foreach ($data->result_array() as $key) {
			echo "id : " . $key['id'] . "<br>";
			echo "laporan : " . $key['laporan'] . "<br>";
			echo "aspek : " . $key['aspek'] . "<br>";
			echo "file : " . $key['file'] . "<hr>";
		}
	}

	public function insert()
	{
		$isi = $this->modelLapor->InsertData(
			array(
				"id" => "zxcvb",
				"laporan" => "ruangan kotor",
				"aspek" => "ruang kelas",
				"file" => ""
			)
		);

		if ($isi >= 1) {
			echo "<h2>Sukses";
		} else {
			echo "<h2>Gagal";
		}
	}

	public function update()
	{
		$isi = $this->modelLapor->UpdateData(
			array(
				"id" => "zxcvb",
				"laporan" => "ruangan berantakan",
				"aspek" => "ruang kelas",
				"file" => ""
			),
			array("id" => "zxcvb")
		);

		if ($isi >= 1) {
			echo "<h2>Sukses";
		} else {
			echo "<h2>Gagal";
		}
	}

	public function delete()
	{
		$isi = $this->modelLapor->DeleteData(
			array("id" => "zxcvb")
		);

		if ($isi >= 1) {
			echo "<h2>Sukses";
		} else {
			echo "<h2>Gagal";
		}
	}
}
