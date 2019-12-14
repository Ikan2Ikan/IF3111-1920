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
			<form action="halaman_utama.php" method="POST" onSubmit="Validasi()">
				<p>Buat Laporan/Komentar</p>
				<hr><br>
				<textarea input type="text" name="Laporan" id="Laporan">Laporan/Komentar</textarea><br>
				<select input type="select" name="Aspek" id="Aspek">
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

<script>
	function Validasi() {
		var laporan = document.getElementById("Laporan").value;
		var aspek = document.getElementById("Aspek").value;

		if (laporan == "" || aspek == "") {
			alert('Mohon isi data dengan lengkap');
			return false;
		} else {
			var yakin = confirm("Apakah anda yakin ?");

			if (yakin) {
				return true;
			} else {
				return false;
			}
		}
	}
</script>

</html>