<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?= base_url('assets/style_comm.css') ?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<title><?= $judul; ?></title>
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
			<form method="post">
				<div class="keterangan">
					<input type="text" placeholder="Nama Pelapor">
					<br>
					<textarea name="comment" placeholder="Tulis Laporan/Komentar"></textarea>
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

</body>

</html>