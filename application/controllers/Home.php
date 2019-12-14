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
        $this->load->view('templates/coment', $data);
<<<<<<< HEAD
        $this->load->view('V_simple',$data);
        $this->load->view('V_home',$data);
        $this->load->view('V_detail',$data);
=======
        $this->load->view('V_simple');
        $this->load->view('V_home', $data);
        $this->load->view('V_detail');
>>>>>>> 1664431ae23a77d09221da79ad4ab0e666f2fd1b
        $this->load->view('templates/footer', $data);
    }


    public function fileUpload()
    {
        $file['fileup'] = base_url('assets/file');
        $file['typefile']  = 'jpg|png|doc|gif|jpeg|pdf';
        $file['size'] = 5000;

        $this->load->library('upload', $file);
        if ($this->upload->do_upload('lampiran')) {
            echo "<script>
            alert('berhasil di upload');
            </script>";
        } else {
            echo "<script>
            alert('gagal di upload');
            </script>";
        }
    }
}
