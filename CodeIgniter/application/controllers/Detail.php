<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Detail extends CI_Controller{
    public function __construct()
	{
		parent::__construct();
        $this->load->model('m_data');
		
	}
    
    public function index()
    {
        $data ['detail'] = $this->m_data->getDetailLaporan();
        $this->load->view('v_detail',$data);
     
    }
}

?>