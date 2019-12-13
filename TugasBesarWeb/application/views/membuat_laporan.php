<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Buat Laporan</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/style.css"/>
</head>
<body>
	<center><h1>SIMPLE LAPOR!</h1></center>

<form action="<?php echo base_url(). 'home/insert'; ?>" method="post" enctype="multipart/form-data">
	<p>Buat Laporan/Komentar</p>
	<hr>

	<center><textarea name="laporan" rows="20" cols="115">Laporan/Komentar</textarea></center><br>

	<div class="aspek">
		<select name="aspek">
			<option value="">Pilih Aspek Pelaporan/Komentar</option>
			<option value="Dosen">Dosen</option>
			<option value="Staff">Staff</option>
			<option value="Mahasiswa">Mahasiswa</option>
			<option value="Infrastruktur">Infrastruktur</option>
			<option value="Pengajaran">Pengajaran</option>
		</select>
	</div><br><br>

	<div class="aspek">
		<input type="file" name="foto">
	</div><br><br>

	<div class="tombol">
		<input type="submit" value="Buat LAPOR!">
		
	</div><br><br>

	<hr>
</form>

</body>
</html>