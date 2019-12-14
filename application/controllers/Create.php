<?php
class Create extends CI_Controller {
    public function index(){
        $data['judul'] = 'Create';
        $this->load->view('templates/header',$data);
        $this->load->view('create/index');
        $this->load->view('templates/footer');
    }
}
?>