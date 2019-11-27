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
    <h4>Buat Laporan/Komentar</h4>
   <hr />

   <form method="post" action="" enctype="">
	    <textarea rows="16" cols="136" name="isi" form="usrform"></textarea>
		<select name="aspek">
			<option>- Pilih Aspek Pelaporan/Komentar -</option>
			<option value="Dosen">Dosen</option>
			<option value="Staff">Staff</option>
			<option value="Mahasiswa">Mahasiswa</option>
			<option value="Infrastruktur">Infrastruktur</option>
			<option value="Pengajaran">Pengajaran</option>
		</select><br />
		<input id="file" type="file" name="File"><br />
		<input id="submit" value="Tambah" type="submit" name="submit">
		<div style="clear: both;"></div>
	</form>
	<hr>
	<footer>
		&copyCopyright 2019 - itera.ac.id
	</footer>

</div>
</body>
</html>