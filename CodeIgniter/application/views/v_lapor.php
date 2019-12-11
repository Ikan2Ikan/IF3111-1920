<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Buat Laporan!</title>
	<link rel="stylesheet" href="assets/css/lapor.css"></link>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

	<style type="text/css"> /**Dibuat embedded css karena ketika dibuat external, css tidak mau jalan. entah karena versi ataupun permasalahan komputer yang saya miliki**/
	body {
	font-family: constantia;
	margin: 80px;
	}

	body h1{
		text-align: center;
	}
	label{
		text-align: left;
	}
	hr{
		border: 1px solid;
		color: black;
	}
	.area{
		height: 300px;
		border: 2px solid;
		width: 100%;
		padding-top: 10px;
	}

	a{
		text-decoration: none;
		color: black;
	}

	select{
		border: 2px solid;
	}
	.but{
		position: relative;
		left: 1050px;
		height: 50px; 
		width: 110px; 
		border: 2px solid; 
		background-color: white;
	}

	</style>

</head>

<body>
	<a href="<?php echo site_url('home')?>">
	<h1>SIMPLE LAPOR!</h1></a>
	<label>Buat Laporan</label>
	<hr><br>

	<form method="POST" action="tambah_aksi" onsubmit="return validateForm()">
		<textarea class="area" name="laporan" placeholder="Laporan/Komentar"></textarea>
		<br><br>
		<select style="height: 40px;" name="aspek">
			<option>Pilih Aspek Pelaporan/Komentar:</option>
			<option>Infrastruktur</option>
			<option>Pendidikan</option>
			<option>Sistem Informasi</option>
			<option>Ekonomi</option>
			<option>Teknologi</option>
			<option>Keamanan</option>
			<option>Sosial & Budaya</option>
			<option>Hiburan</option>
			<option>Yang lain</option>
		</select>
		<br><br>
		Pilih file: <input type="file" name="file" placeholder="File"  name="kirim" accept="image, .doc, .docx, .xls, .xlsx, .ppt, .pptx, .pdf">
		<?php
		date_default_timezone_set('Asia/Jakarta');
		?>
		<input type="text" name="waktu" value="<?php echo date('d-m-Y H:i:s')?>" hidden>
		<br><br>
		<input type="submit" class="but" value="Buat LAPOR!"><br><br>

		<hr>
	</form>

</body>
</html>