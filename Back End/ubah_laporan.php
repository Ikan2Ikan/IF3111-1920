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
			<form action="update.php" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="nim" value="<?php echo $data["nim"]; ?>">
				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="nama" value="<?php echo $data["nama"]; ?>">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="mail" value="<?php echo $data['email']; ?>">
				</div>
				<button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
			</form>

			<p>Buat Laporan/Komentar</p>
			<hr><br>
			<textarea>Laporan/Komentar</textarea><br>
			<select>
				<option value="">Pilih Aspek Pelaporan/Komentar</option>
			</select> <br><br>
			<input type="file" name=""> <br><br>
			<button type="submit">Buat LAPOR!</button>
			<br><br><br>
			<hr>
		</div>
	</div>
</body>

</html>