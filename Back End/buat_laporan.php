<!DOCTYPE html>
<html>

<head>
	<title>Buat Laporan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="pembungkus">
		<header>SIMPLE LAPOR!</header>

		<div class="konten">
			<p>Buat Laporan/Komentar</p>
			<hr><br>

			<form action="" method="POST" enctype="multipart/form-data">
				<textarea name="laporan" id="laporan" rows="16px">Laporan/Komentar</textarea>
				<select>
					<option value="">Pilih Aspek Pelaporan/Komentar</option>
					<option value="Ruang Kelas">Ruang Kelas</option>
					<option value="Dosen">Dosen</option>
					<option value="Gedung">Gedung</option>
					<option value="Parkiran">Parkiran</option>
					<option value="Jalanan">Jalanan</option>
				</select> <br><br>
				<input type="file" name=""> <br><br>
				<button type="submit">Buat LAPOR!</button>
				<br><br><br>
				<hr>
			</form>
		</div>
	</div>
</body>

</html>