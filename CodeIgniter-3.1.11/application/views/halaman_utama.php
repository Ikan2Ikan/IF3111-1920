<!DOCTYPE html>
<html>

<head>
	<title>Halaman Utama</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="pembungkus">
		<header>
			SIMPLE LAPOR!
			<div class="search-box">
				<form action="" method="POST">
					<input name="search" required="yes" type="text">
					<button type="submit"><img src="img/icon-search.png">Cari</button>
				</form>
			</div>
			<p>Buat Laporan/Komentar <a href="http://localhost/TubesWeb/IF3111-1920/CodeIgniter-3.1.11/index.php/Welcome/BuatLaporan"><img src="img/insert.png"></a></p>
		</header>

		<div class="konten">
			<p>Laporan/Komentar Terakhir</p>
			<hr>

			<?php
			foreach ($data as $key) {
				echo "<p>" . $key['laporan'] . "</p>";
				echo "<div class='lampiran'> Lampiran:" . $key['file'] . "</div>";
				echo "<div class='selengkapnya'> Waktu: " . $key['waktu'] . " <a href=''>Lihat Selengkapnya ></a> </div> <hr>";
			} ?>

			<p>Lorem ipsum dolor sit amet, consectur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien
				dui mattis dui, non pulvinar lorem felis nec erat. Lorem ipsum dolor sit amet, consectur adipiscing
				elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat.
				Lorem ipsum dolor sit amet, consectur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien
				dui mattis dui, non pulvinar lorem felis nec erat</p>
			<div class="lampiran">
				Lampiran: Gambar.jpg
			</div>

			<div class="selengkapnya">
				Waktu: 20-11-2019 20:00
				<a href="">Lihat Selengkapnya ></a>
			</div>
			<hr>

			<p>Lorem ipsum dolor sit amet, consectur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien
				dui mattis dui, non pulvinar lorem felis nec erat. Lorem ipsum dolor sit amet, consectur adipiscing
				elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat.
				Lorem ipsum dolor sit amet, consectur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien
				dui mattis dui, non pulvinar lorem felis nec erat</p>
			<div class="lampiran">
				Lampiran: Gambar.jpg
			</div>

			<div class="selengkapnya">
				Waktu: 20-11-2019 20:00
				<a href="">Lihat Selengkapnya ></a>
			</div>
			<hr>

			<p>Lorem ipsum dolor sit amet, consectur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien
				dui mattis dui, non pulvinar lorem felis nec erat. Lorem ipsum dolor sit amet, consectur adipiscing
				elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat.
				Lorem ipsum dolor sit amet, consectur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien
				dui mattis dui, non pulvinar lorem felis nec erat</p>
			<div class="lampiran">
				Lampiran: Gambar.jpg
			</div>

			<div class="selengkapnya">
				Waktu: 20-11-2019 20:00
				<a href="">Lihat Selengkapnya ></a>
			</div>
			<hr>
		</div>

		<footer>
			<br><img src="img/menu-option.png"><br>
			<img src="img/menu-option.png">
		</footer>
	</div>
	<!-- <div class="kotak-pencarian">
		<input type="search" name="cari">
	</div>
	<button type="submit"></button> -->
</body>

</html>