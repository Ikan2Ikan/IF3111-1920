<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Buat Laporan</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/style.css"/>
</head>
<body>
	<center><h1>SIMPLE LAPOR!</h1></center>

<form name="form-data"  onsubmit="return saveForm(this)" action="<?php echo base_url(). 'home/insert'; ?>" method="post" enctype="multipart/form-data">
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

<script>
  function saveForm(){
  	var x = document.forms["form-data"]["laporan"].value;
	if (x == null || x == "") {
		alert("Isi Laporan Tidak Boleh Kosong");
		return false;
	}
	x = x.split(" ");
	if (x.length<20) {
		alert("Isi Laporan Tidak Boleh Kurang Dari 20 kata");
		return false;
	}
	var x = document.forms["form-data"]["aspek"].value;
	if (x == null || x == "") {
		alert("Aspek Laporan Tidak Boleh Kosong");
		return false;
	}
	var x = document.forms["form-data"]["foto"].value;
	if (x == null || x == "") {
		alert("File Lampiran Tidak Boleh Kosong");
		return false;
	}
	var ft = /(\.jpg|\.jpeg|\.png|\.doc|\.docx|\.xls|\.xlsx|\.ppt|\.pptx|\.pdf)$/i;
	if (!x.match(ft)) {
		alert("Ekstensi Lampiran Tidak Diijinkan");
		return false;
	}
  }
</script>

</body>
</html>