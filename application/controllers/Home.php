<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Comment');
    }

    public function index()
    {
        $data['judul'] = "Halaman Lapor";
        $data['result'] = $this->Comment->sComm();
        $this->load->view('V_simple', $data);
    }
    public function buat()
    {
        $this->load->view('V_home');
        if (isset($_POST['submit'])) {

            $this->Comment->tComm();
        }
    }
    public function detail($id)
    {
        $data['result'] = $this->Comment->sComm2($id);
        $this->load->view('V_detail', $data);
    }


    // public function fileUpload()
    // {
    //     $file['fileup'] = base_url('assets/file');
    //     $file['typefile']  = 'jpg|png|doc|gif|jpeg|pdf';
    //     $file['size'] = 5000;

    //     $this->load->library('upload', $file);
    //     if ($this->upload->do_upload('lampiran')) {
    //         echo "<script>
    //         alert('berhasil di upload');
    //         </script>";
    //     } else {
    //         echo "<script>
    //         alert('gagal di upload');
    //         </script>";
    //     }
    // }
}
