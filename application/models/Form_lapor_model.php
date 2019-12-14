<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
$tgl=date('d-m-Y, h-i');
class Form_lapor_model extends CI_Model
{
    private $_table = "laporan";

    public $id;
    public $nama;
    public $teks_laporan;
    public $aspek_laporan;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    function proses_tambahdata(){
 
    }

    function simpan($data){
        $this->db->insert('laporan', $data);
     }





}