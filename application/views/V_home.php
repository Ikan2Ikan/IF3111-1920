<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?= base_url('assets/style_comm.css') ?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<title>ITERA LAPOR!</title>
</head>

<body>
	<div class="container">

		<div class="content">
			<div class="heading">
				<h1>ITERA LAPOR!</h1>
			</div>
			<div class="head">
				<p> Buat Laporan/Komentar</p>
			</div>
			<hr>
			</hr>
			<form method="post" onsubmit="return validasi()">
				<div class="keterangan">
					<input type="text" placeholder="Nama Pelapor" name="nama">
					<br>
					<textarea name="comment" placeholder="Tulis Laporan/Komentar" id="text"></textarea>
				</div>
				<br>
				<div class="aspek">
					<select name="aspek">
						<option default>Pilih Aspek Pelaporan/Komentar</option>
						<option value="Dosen">Dosen</option>
						<option value="Staff">Staff</option>
						<option value="Mahasiswa">Mahasiswa</option>
						<option value="Infrastruktur">Infrastruktur</option>
					</select>
				</div>
				<br>
				<div class="file">
					<input type="file" name="lampiran">
				</div>
				<br>
				<div class="lapor">
					<button type="submit" name="submit">Buat LAPOR!</button>
				</div>
			</form>
		</div>
	</div>
	<!-- ahsjskslslsjsjjs -->
</body>
<script>
	function validasi() {
		var text = document.getElementById('text').value;
		var panjang_kata = document.getElementById('text').value;
		panjang_kata = panjang_kata.split('');
		if (text == '') {
			alert('Kolom harus diisi!');
			return false;
		} else if (panjang_kata.length < 20) {
			alert('Laporan harus lebih dari 20 kata!');
			return false;

		} else if (text != "" && panjang_kata.length >= 20) {
			return true;
		}
	}
</script>

</html>