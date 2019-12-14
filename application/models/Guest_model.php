<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class Guest_model extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }

  function list_data($keyword)
  {
    $this->db->SELECT('laporan.nim, laporan.hal, laporan.lampiran,
                       laporan.status, laporan.cp, mahasiswa.nama,
                       mahasiswa.prodi');
    $this->db->FROM('laporan');
    $this->db->JOIN('mahasiswa', 'laporan.nim = mahasiswa.nim');
    if ($keyword != '') {
      $this->db->like('laporan.hal', $keyword);
      $this->db->or_like('laporan.nim', $keyword);
      $this->db->or_like('mahasiswa.nama', $keyword);
      $this->db->or_like('mahasiswa.prodi', $keyword);
    }
    $this->db->order_by('laporan.status', 'ASC');
    return $this->db->get();
  }

  function regism()
  {
    $data = [
              "nim"       => $this->input->post('nim', true),
              "nama"      => $this->input->post('nama', true),
              "prodi"     => $this->input->post('prodi', true),
              "password"  => md5($this->input->post('password', true)),
              "verif"     => "0"
            ];

    $this->db->insert('mahasiswa', $data);
  }

  function cek_akun($table,$where)
  {
  return $this->db->get_where($table,$where);
  }

  function input_laporan($nim, $laporan, $lampiran){
    $data = [
              "nim"       => $nim,
              "hal"       => $laporan,
              "lampiran"  => $lampiran,
            ];

    $this->db->insert('laporan', $data);

  }



}




 ?>
