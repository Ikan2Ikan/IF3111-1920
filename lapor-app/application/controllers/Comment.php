<?php
class Comment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_comment');
    }
    public function index()
    {
        if ($this->session->has_userdata('logged_in')) {
            $data['title'] = "Tambah Komentar/Laporan";
            $this->load->view('templates/comm_header', $data);
            $this->load->view('comment/index.php', $data);
            $this->load->view('templates/footer');

            if (isset($_POST['submit'])) {
                $this->M_comment->addComment();
            }
        } else {
            echo "<script>
                    alert('anda belum login!');
                </script>
            ";
            redirect(base_url('auth'));
        }
    }
}
