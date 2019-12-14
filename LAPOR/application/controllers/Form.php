<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Form_model');
		$this->load->library('form_validation');

	}
	public function db(){
		$judul = $_POST['judul'];
		$komen = $_POST['komen'];
		$img = $_FILES['img']['name'];
		$tmp = $_FILES['img']['tmp_name'];
		$pilihan = $_POST['pilihan'];

		$fotobaru = date('dmYHis').$img;
		$path = "images/".$fotobaru;

	  if(move_uploaded_file($tmp, $path)){
		  $query = "INSERT INTO lapor VALUES('".$judul."', '".$komen."', '".$img."', '".$pilihan."')";
		  $sql = mysqli_query($connect, $query);
	  }else{
		echo "Maaf, Gambar gagal untuk diupload.";
	  }
	  redirect('beranda')
	}

}
