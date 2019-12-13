<?php 
	class Laporan extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model("app_model");
		}

		public function index(){
			$listlaporan = $this->list_laporan();
			$data = array(
				"listlaporan" => $listlaporan
			);
			$this->load->view("halaman/beranda", $data);
		}

		public function list_laporan(){
			$data = $this->app_model->ambil_data(laporan());
			return $data;
		}		
	}
?>