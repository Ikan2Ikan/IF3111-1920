<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_lapor extends CI_Model{

/*Nama table pada Database yang digunakan*/
    private $_table = "list_lapor";

/*Nama kolom pada Database yang digunakan*/
    public $id_lapor;
    public $judul;
    public $isi;
    public $kategori;
    public $file;
    public $waktu;

/*Mengambil satu baris data*/
    public function ambilbaris($id){
        $lapor = $this->db->get_where('list_lapor', array('id_lapor' => $id));
        return $lapor;
    }

/*Update atau ubah data*/
    public function update(){
        $this->load->library('upload');
        $config['upload_path'] = './upload'; // direktori file
        $config['allowed_types'] = 'gif|jpg|png|jpeg|doc|docx|xls|xlsx|ppt|pptx|pdf';
        $config['max_size'] = '5048';
        // $config['max_width']  = '1288';
        // $config['max_height']  = '768';
        $this->upload->initialize($config);

        if(!$this->upload->do_upload('nmfile')){
            $file="-";
        }else{
            $file=$this->upload->data('file_name');
        }

        date_default_timezone_set('Asia/Jakarta');
        $time = date('Y-m-d h:i:s');
        $post = $this->input->post();
        $this->id_lapor = $post["id"];
        $data = array(
            'judul'=>$this->input->post('judul'),
            'isi'=>$this->input->post('isi'),
            'kategori'=>$this->input->post('cat'),
            'file' => $file,
            'waktu'=> $time
        );
        $this->db->update($this->_table, $data, array('id_lapor' => $post['id']));
    }

/*Hapus data dari database*/
    public function hapus($id){
        return $this->db->delete($this->_table, array("id_lapor" => $id));
    }

/*ambil semua data per set dari tabel*/
    public function data($number,$offset){
        return $query = $this->db->get('list_lapor',$number,$offset)->result();       
    }

/*Mengambil nilai banyaknya baris dalam tabel list_lapor*/
    public function jumlah_data(){
        return $this->db->get('list_lapor')->num_rows();
    }

/*Untuk insert data ke database*/ 
    public function save($data){
        $this->load->database();
        $this->db->insert('list_lapor',$data);   
    }

}