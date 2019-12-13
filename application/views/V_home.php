<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset/home.css') ?>">
	<title>LAPOR! ITERA</title>

</head>

<body>
	<!-- 
	<nav>
		<div>
			<form> -->
	<label>LAPOR! ITERA</label>
	<!-- <a href="/home/">Tentang LAPOR!</a>
				<a href="/gallery/">Laporan</a>
				<input class="search" type="text" placeholder="Cari Aduan" required>
				<input class="button" type="button" value="Cari">
			</form>
		</div>
	</nav> -->
	<div class="container">
		<div class="kepala">
			<div>
				<h1 class="judul">LAPOR! ITERA</h1>
			</div>
			<!-- <h3>Sampaikan laporan Anda langsung kepada instansi kampus berwenang</h3> -->
			<div>
				<p class="laporan">Buat Laporan/Komentar</p>
			</div>
			<hr>
			</hr>
			<form action="post">
				<input type="text" name="nama" placeholder="nama pelapor">
				<div class="kolom-lapor">
					<textarea type="text" name="laporan" rows="13" cols="97" placeholder="Ketik laporan Anda..."></textarea>
				</div>
				<input type="file">
			</form>
			<div class="kolom-lapor1">
				<input class="button" type="submit" value="Buat LAPOR!">
			</div>
		</div>
</body>

</html>