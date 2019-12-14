<?php
class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Comment');
    }

    public function index(){
        
        $data['judul'] = "Halaman Utama";
        $this->load->view('templates/coment', $data);
        $this->load->view('V_home',$data);
        $this->load->view('templates/footer', $data);
    }

    public function fileUpload(){
        $file['fileup'] = base_url('assets/');
        $file['typefile']  = 'jpg|png|doc|gif|jpeg|pdf';
        $file['size'] = 5000;

        $this->load->library('upload', $file);
        if ($this->upload->do_upload('lampiran')){
            echo "<script>
            alert('berhasil di upload');
            </script>";
        } else {
            echo "<script>
            alert('gagal di upload');
            </script>";
        }

    
}

?>