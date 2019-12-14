<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Form_lapor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("form_lapor_model");     
        $this->load->helper(array('form', 'url'));
    }

 

    function tambahgambar(){
        $this->load->view('header');
        $this->load->view('form_lapor');
        $this->load->view('footer');
    }

    function addForm(){

    $lampiran=$_FILES['lampiran']['name'];
        if ($lampiran='') {}
            else{
                $config['upload_path']='./assets/lampiran';
                $config['allowed_types']='jpg|png|pdf|docx|doc|xls|xlsx';
                $namaFile=$_FILES['lampiran']['name'];
                $this->load->library('upload',$config);

                if (!$this->upload->do_upload('lampiran')) {
                    echo "Upload gagal";
                    echo $this->upload->display_errors(); die() ;
                }else{
                        $lampiran=$namaFile;
                }

            }    

    global $lampiran;
    global $tgl;
    $data = array(
        'id' =>"",
        'nama' => "Sianipar Agus",
        'teks_laporan' => $this->input->post('teks_laporan'),
        'aspek_laporan' => $this->input->post('aspek_laporan'),
        'lampiran' => $namaFile,
        'waktu' => $tgl
    );

    if (($data['teks_laporan']!="")&&($data['aspek_laporan']!="")) {

        $this->db->insert('laporan',$data);
        redirect('welcome');
    }else{
        return false;
    }
    
}    


}