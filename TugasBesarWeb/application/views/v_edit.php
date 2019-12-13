<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Edit Laporan</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/style.css"/>
</head>
<body>
	<center><h1>SIMPLE LAPOR!</h1></center>

<form action="<?php echo base_url(). 'home/ubah'; ?>" method="post" enctype="multipart/form-data">
	<p>Buat Laporan/Komentar</p>
	<hr>

<?php
foreach ($laporan as $key) {
	echo "
		<input type='hidden' name='id' value='$key->id'>
		<center><textarea name='laporan' rows='20' cols='115'> $key->isi </textarea></center><br>

		<div class='aspek'>
			<select name='aspek'>
				<option value='$key->aspek'>$key->aspek</option>";
				if($key->aspek == 'Dosen') {
					echo "<option value='Staff'>Staff</option>
					<option value='Mahasiswa'>Mahasiswa</option>
					<option value='Infrastruktur'>Infrastruktur</option>
					<option value='Pengajaran'>Pengajaran</option>";
				} else if($key->aspek == 'Staff') {
					echo "<option value='Dosen'>Dosen</option>
					<option value='Mahasiswa'>Mahasiswa</option>
					<option value='Infrastruktur'>Infrastruktur</option>
					<option value='Pengajaran'>Pengajaran</option>";
				} else if($key->aspek == 'Mahasiswa') {
					echo "<option value='Dosen'>Dosen</option>
					<option value='Staff'>Staff</option>
					<option value='Infrastruktur'>Infrastruktur</option>
					<option value='Pengajaran'>Pengajaran</option>";
				} else if($key->aspek == 'Infrastruktur') {
					echo "<option value='Dosen'>Dosen</option>
					<option value='Staff'>Staff</option>
					<option value='Mahasiswa'>Mahasiswa</option>
					<option value='Pengajaran'>Pengajaran</option>";
				} else {
					echo "<option value='Dosen'>Dosen</option>
					<option value='Staff'>Staff</option>
					<option value='Mahasiswa'>Mahasiswa</option>
					<option value='Infrastruktur'>Infrastruktur</option>";
				}
				
			echo "</select>
		</div><br><br>

		<div class='aspek'>
			<input type='file' name='foto'>
		</div><br><br>
	";	
}
?>

	<div class="tombol">
		<input type="submit" value="Buat LAPOR!">
		
	</div><br><br>

	<hr>
</form>

</body>
</html>