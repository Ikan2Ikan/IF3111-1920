<!DOCTYPE html>
<html>

<head>
	<title>Detail Laporan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="pembungkus">
		<header>SIMPLE LAPOR!</header>

		<div class="konten">
			<p>Detail Laporan/Komentar</p>
			<hr><br>
			<?php
			foreach ($data as $key) {
				echo $key['laporan'];
				?>

				<p>
					Lampiran<br>
					<?php
						echo $key['file'];
						?>
				</p>
				<div class="lampiran">
					Waktu:
					<?php
						echo $key['waktu'];
						?>
					Aspek:
					<?php
						echo $key['aspek'];
						?>
				</div>
				<div class="selengkapnya">
					Hapus Laporan/Komentar
					<a href="<a href='http://localhost/IF3111-1920-master/IF3111-1920-master/CodeIgniter-3.1.11/index.php/Welcome/HapusLaporan/ <?php $key['id'] ?> "><img src="img/close.png"></a>
				</div>
				<hr>
			<?php } ?>
		</div>
	</div>
</body>

</html>