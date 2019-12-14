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
            $data=$this->Comment->tComm();
            var_dump($data);
            die;
        }else{
            echo "heh, salah";
        }
    }
    public function detail($id)
    {
        $data['result'] = $this->Comment->sComm2($id);
        $this->load->view('V_detail', $data);
    }

    public function delete($id){
        $this->Comment->detComm($id);
        redirect('home');
    }

     public function fileUpload()
     {
         $file['upload_path'] = './assets/file';
         $file['allowed_types']  = 'jpg|png|doc|gif|jpeg|pdf';
         $file['max_size'] = 10000;

        $this->load->library('upload', $file);
        $this->upload->do_upload('lampiran');
        // if ($this->upload->do_upload('lampiran')) {
        //     echo "<script>
        //     alert('berhasil di upload');
        //     </script>";
        // } else {
        //     echo "<script>
        //     alert('gagal di upload');
        //     </script>";
        // }
        // redirect('home');
    }
}
