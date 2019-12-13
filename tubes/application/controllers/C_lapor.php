<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class C_lapor extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('M_lapor');
		$this->load->helper(array('form', 'url'));
	}

	public function index(){
		$this->load->view('v_header');
		$this->load->view('v_header2');
        $jumlah_data = $this->M_lapor->jumlah_data();
        $this->load->library('pagination');                             // library untuk membuat/membagi page 
        $config['base_url'] = base_url().'index.php/C_lapor/index/';
        $config['total_rows'] = $jumlah_data;                           // set nilai total_rows
        $config['per_page'] = 6;                                        // set data yang akan diambil adalah 6 baris per page
        $from = $this->uri->segment(3);                                 // segmen dari base url (dari index.php)
        $this->pagination->initialize($config);
        $data['lapor'] = $this->M_lapor->data($config['per_page'],$from);
        $this->load->view("v_index", $data);
	}

	public function review(){
        $this->load->view('v_header');
        $id = $this->uri->segment(3);
        $data['lapor'] = $this->M_lapor->ambilbaris($id);
        $this->load->view("v_review", $data);
	}

    public function edit(){
        $this->M_lapor->update();
        redirect('/C_lapor');
    }

    public function hapus(){
        $id = $this->uri->segment(3);
        $this->M_lapor->hapus($id);
        redirect('/C_lapor');
    }

    public function add(){    
        $this->load->helper(array('form', 'url')); 
        $file = $file;
        $this->load->library('upload');
        $config['upload_path'] = './upload'; // Sesuaikan sama folder dimana foto akan d simpan
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
        $data = array(
            'judul'=>$this->input->post('judul'),
            'isi'=>$this->input->post('isi'),
            'kategori'=>$this->input->post('cat'),
            'file' => $file,
            'waktu'=> $time
        );
        $this->M_lapor->save($data);
        redirect('/C_lapor');
    }

}