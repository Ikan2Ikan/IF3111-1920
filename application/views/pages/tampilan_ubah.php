<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('assets/css/style_tampilan_ubah.css') ?>" />

	<title>Tampilan Ubah</title>

	<script type="text/javascript" src="<?php echo base_url('assets/js/script.js') ?>"></script>
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
				<h3>Ubah Laporan/Komentar</h3>
				<hr>
				<br>
			</div>
		</section>

		<section id="formbuatlaporan">
			<div class="container">

				<form name="createForm" onsubmit="return validasi()" action="<?= base_url('control/ubah/' . $laporan->id); ?>" method="POST" enctype="multipart/form-data">

					<textarea name="laporan" id="laporan" cols="77" rows="20" placeholder="Laporan/Komentar"><?php echo set_value('laporan', $laporan->laporan) ?></textarea>
					<br><br>

					<select name="aspek" id="aspek">
						<option disabled selected value>Pilih Aspek Pelaporan/Komentar</option>
						<option value="Dosen">Dosen</option>
						<option value="Staf">Staff</option>
						<option value="Mahasiswa">Mahasiswa</option>
						<option value="Infrastruktur">Infrastruktur</option>
						<option value="Pengajaran">Pengajaran</option>
					</select>
					<br>
					<br>

					<input type="file" name="lampiran" id="lampiran">
					<br><br>
					<button type="submit" class="button-1" name="submit" value="simpan">Ubah LAPOR!</button>

				</form>
				<br>
				<br>
				<hr>
				<br>

			</div>
		</section>
	</fieldset>
</body>

</html>