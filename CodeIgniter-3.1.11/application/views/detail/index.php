<!DOCTYPE html>
<html>
<head>
	<title>SIMPLE LAPOR!</title>
	<!-- file css ada di asset/css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/asset/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/asset/css/reset.css">
</head>
<body>

<div class="container">
	<h1>SIMPLE LAPOR !</h1>

	<h4>Detail laporan / Komentar</h4>
	<hr />
	
	<ul>
		<li>
			<h4 style="margin-bottom: 20px;"><?php echo $lapor["isi"]; ?></h4>
			<h4 class="lampiran">Lampiran : </h4><br \>
			<embed src="<?php echo base_url() ?>/asset/file/<?php echo $lapor["file"]; ?>" />
			<div style="clear: both"></div>
			<a href="<?php echo base_url() ?>index.php/Home/delete/<?php echo $lapor["id"]?>" onclick="return confirm('yakin ingin hapus?');"><h4 class="hapus">Hapus laporan / komentar</h4></a>
			<h4 class="waktudetail" style="margin-right: 30px;">Waktu : <?php echo $lapor["tanggal"]; ?></h4>
			<h4 class="aspek">Aspek : <?php echo $lapor["aspek"]; ?></h4>
			<div style="clear: both"></div>
		</li>
		<br>
		<hr />
	</ul>

	<footer>
		&copyCopyright 2019 - itera.ac.id
	</footer>
</div>

</body>
</html>

