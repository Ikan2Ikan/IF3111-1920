<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('assets/css/style_tampilan_lapor.css') ?>" />
	<title>Tampilan Lapor</title>
</head>

<body>
	<fieldset>
		<header>
			<div class="container">
				<center>
					<h1>Simple Lapor!</h1>
				</center>
			</div>
		</header>
		<section id="buatlaporan">
			<div class="container">
				<h3>Buat Laporan/Komentar</h3>
				<hr>
				<br>
			</div>
		</section>

		<section id="formbuatlaporan">
			<div class="container">
				<form action="tambah" method="POST" enctype="multipart/form-data">

					<textarea name="laporan" id="laporan" cols="77" rows="20" placeholder="Laporan/Komentar" required></textarea>
					<br><br>
					<label for="">Pilih Aspek Pelaporan/Komentar</label>
					<br>
					<select name="aspek" id="aspek">
						<option value="Dosen">Dosen</option>
						<option value="Staf">Staff</option>
						<option value="Mahasiswa">Mahasiswa</option>
						<option value="Infrastruktur">Infrastruktur</option>
						<option value="Pengajaran">Pengajaran</option>
					</select>
					<br>
					<br>
					<input type="file" name="lampiran" id="" required>
					<br><br>
					<hr>
					<br>
					<button type="submit" class="button-1" name="submit" value="simpan">Buat LAPOR!</button>
					<br>
				</form>
				<br>
			</div>
		</section>
	</fieldset>
</body>

</html>