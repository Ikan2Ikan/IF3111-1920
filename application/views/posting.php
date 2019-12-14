<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Detail Laporan</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/detail.css'?>">
</head>	
<body>
	<div class="body">
	<h1><center>SIMPLE LAPOR!<center></h1>
	
	<p>Detail Laporan/Komentar</p>
	<hr color="black" size="2">
	<?php
	if(is_array($posting)){
		foreach($posting as $key){
			$isi = $key->Isi;
			echo $isi;
		}
	}
	?>
	
	<br><p>Lampiran :</p>
	<?php foreach ($posting as $key){?>
		<img  src="<?php'$lampiran = $key->Lampiran' echo $lampiran;?>">
	<?php } ?>
	
	<p> Waktu : <?php date_default_timezone_set('Asia/Jakarta'); 
		echo date("d-m-Y H:i") ?> &nbsp; 
		Aspek: <?php
		if(is_array($posting)){
			foreach($posting as $key){
				$aspek = $key->Aspek;
				echo $aspek;
			}
		}?>
		<a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalaAdd">
		<span class="fa fa-plus">Hapus Laporan/Komentar X</span> </a>
	</p></div>
	<hr color="black" size="2">