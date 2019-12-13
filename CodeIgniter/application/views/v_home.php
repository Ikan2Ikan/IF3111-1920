<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sistem Lapor!</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/v_home.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	
</head>

<body>
		<a href="<?php echo site_url('home')?>">
		<h1>SIMPLE LAPOR!</h1></a>

		<form action="<?php echo site_url('home/search')?>" method="POST">
	      <input type="text" name="cari" placeholder=" Cari berdasarkan: ID / Nama/ Judul / Aspek">
	      <button type="submit"><i class="fa fa-search"> CARI</i></button>
	    </form>
	    <br>
	    <a style="text-align: center;" href="<?php echo site_url('home/lapor') ?>">Buat Laporan/Komentar
	    	<i class="fa fa-plus-square"></i>
	    </a><br><br><br>
	    <label class="lampiran">Lampiran/Komentar Terakhir</label>
	<hr>

		<?php 
		$no = 1;
		foreach($lapor as $u){ 
		?>

		<p align="left"> <i class="fa fa-user-circle"></i> Nama: <?php echo $u->nama ?> &nbsp &nbsp
		<i class="fa fa-pencil"></i> Judul: <?php echo $u->judul ?></p>
		 
		<p align="justify">
		<?php $string = $u->laporan; //Membuat limit hanya 300 char yang dapat ditampilkan.
		if (strlen($string) > 300) {
		$trimstring = substr($string, 0, 300). '.....';
		} else {
		$trimstring = $string;
		}
		echo $trimstring;
		?>	
		</p>

		<p align="left">
			<i class="fa fa-folder"></i> Lampiran: <?php echo $u->file?>
			<span>
				<i class="fa fa-info"></i> ID: <?php echo $u->id ?> ||
				<i class="fa fa-calendar"></i> Waktu: <?php echo $u->waktu?> ||  
				
				<a href="<?php echo site_url('home/detail')?>">Lihat selengkapnya <i class="fa fa-caret-square-o-right"></i>
				</a>
			</span>

		</p>
		<hr>
		
			
		<?php } ?>

</body>
