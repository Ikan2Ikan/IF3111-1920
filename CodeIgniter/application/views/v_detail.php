<!DOCTYPE html>
<html>
<head>
	<title>Detail Laporan</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/v_detail.css">


</head>
<body>
	<a href="<?php echo site_url('home')?>">
	<h1>SIMPLE LAPOR!</h1></a>



	<label>Detail Laporan/Komentar</label>
	<hr><br>

		<?php 
		$no = 1;
		foreach($detail as $d){ 
		?>
		 
		<p align="justify">
		<?php echo $d->laporan?>
		</p>

		<p align="left"> Lampiran:

		<br>
		<img src="">
		<br><br>
		
		Waktu: <?php echo $d->waktu?> &nbsp &nbsp
		Aspek: <?php /**Panggil aspek**/?>

		<span><a href="#"><i class="fa fa-edit"></i> 
			Ubah Laporan</a> ||  
			<a href="<?php echo site_url('home/detail')?>">Hapus Laporan
				<i class="fa fa-close"></i>
			</a>
		</span>
		<hr>

		<?php } ?>
</body>
</html>