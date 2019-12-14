<!DOCTYPE html>
<html>

<head>
	<script src="assets/js/kode.js"></script>
</head>

<body>
	<?php echo $this->session->flashdata('pesan'); ?>
	</br></br></br>
	<div class="postengah">
		<h1>SIMPLE LAPOR!</h1>
	</div>
	<div class="border">
	<div class="postengah">
	<form action="<?php echo base_url(''); ?>auth/index" method="post">
			<input class="search" type="search" placeholder="Search" name="search">
			<input class="button" type="submit" name="submit" value="CARI">
	</form>
	
		<h5><a onclick="peringatan()" href="<?php echo base_url(''); ?>auth/Buat_Laporan">Buat Laporan/Komentar</a></h5>
	</div>

<p class="poskiri"> Laporan/komentar terakhir</p>
<hr>

<?php 
	foreach($user as $data) {
		echo substr($data->isi, 0, 200);
		echo "<br>";
	?>
		<p class="poskiri">Lampiran : <?php
		echo $data->file;
		?>
		<span class="poskanan"> waktu : <?php
		echo $data->tanggal;
	?>

		
	<a href="<?php echo base_url('auth/BacaSelengkapnya/').$data->id ?>">Baca Selengkapnya</a>

	</span>
	<hr>
	</p>

	<?php
	}
?>

</div>	

<br><hr>
</body>

</html>