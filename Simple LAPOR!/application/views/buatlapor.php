<!DOCTYPE html>
<html>
<head>
	<title>LAPOR!</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('tampilan/css/style.css'); ?>">
</head>
<body>
	<div id="boxlapor">
		<h1 align="center">SIMPLE LAPOR!</h1>
		<div class="lapor">
		<p>Buat Laporan/Komentar</p><hr>
		</div>
			<form>
				<input type="text" name="nama" placeholder="Nama"><br>
				<input type="text" name="kontak" placeholder="Kontak"><br>
				<textarea cols="110" rows="20" placeholder="Laporan/Komentar"></textarea><br>
				<select>
					<option selected="selected" disabled="disabled">Pilih Aspek Laporan/Komentar</option>
					<optgroup label="--"></optgroup>
					<option value="dosen">Dosen</option>
					<option value="staff">Staff</option>
					<option value="mahasiswa">Mahasiswa</option>
					<option value="infrastruktur">Infrastruktur</option>
					<option value="pengajaran">Pengajaran</option>
				</select><br><br>
				<input class="upload" type="file" value="Choose File"><br>
				<input class="buat" type="button" value="Buat LAPOR!">
			</form>											
	</div>
</body>
</html>	