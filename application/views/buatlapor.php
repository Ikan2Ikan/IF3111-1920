<!DOCTYPE html>
<html>
<head>
	<title>LAPOR!</title>
	<link rel="stylesheet" type="text/css" href="tampilan/css/style.css">
</head>
<body>
	<div id="boxlapor">
		<h1 align="center">SIMPLE LAPOR!</h1>
		<div class="lapor">
		<p>Buat Laporan/Komentar</p><hr>
		</div>
			<form>
				<textarea cols="110" rows="20" placeholder="Laporan/Komentar"></textarea><br>
				<select>
					<option selected="selected" disabled="disabled">Pilih Aspek Laporan/Komentar</option>
					<optgroup label="--"></optgroup>
					<option value="siakad">SIAKAD ITERA</option>
					<option value="elearning">e-Learning ITERA</option>
					<option value="ktm">Kartu Tanda Mahasiswa</option>
					<option value="kehilangan">Kehilangan Barang</option>
				</select><br><br>
				<input class="upload" type="file" value="Choose File"><br>
				<input class="buat" type="button" value="Buat LAPOR!">
			</form>											
	</div>
</body>
</html>	