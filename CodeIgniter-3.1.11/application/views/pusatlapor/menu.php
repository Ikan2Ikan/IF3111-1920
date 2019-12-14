<html>

<head>
	<title>Lapor</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<h2>LAPORAN</h2>
	<div class="topnav">
		<div class="logo">
			<img src="../assets/gambar/logolapor.png" alt="logo" width="70" />
		</div>
		<a href="../index_home">Home</a>
		<a href="../pusatlapor">Laporan</a>
		<a style="float:right" href="#">Daftar</a>
		<a style="float:right" href="#">Masuk</a>
	</div>

	<div class="container">
		<?php
		echo $post['deskripsi']; ?>
		<br>
		<br>
		Lampiran : <?php echo $post['lampiran']; ?>
		<br>
		Waktu : <?php echo $post['waktu']; ?>
		<br>
		Aspek : <?php echo $post['kategori']; ?>
		<br>
		<p><a href="">Hapus Laporan/Komentar<i class="fa fa-arrow-times"></i></a></p>
</body>

</html>