<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Tubes Web</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/style.css"/>
</head>
<body>
	<center><h1>SIMPLE LAPOR!</h1></center>

	<center><table border="1">
		<tr>
			<td width="790px"><input type="text" name="search" size="110" /></td>
			<td width="10px"><a href="">Cari</a></td>
		</tr>
	</table></center><br>

	<center><a href="<?php echo base_url() ?>home/tambah/">Buat Laporan/Komentar</a></center>

	<p>Laporan/Komentar Terakhir</p>
	<hr>

<?php
	foreach ($laporan as $key) {		
		echo "<center><table width='810px'>
				<tr>
					<td style='text-align:justify;'>$key->isi</td>
				</tr>
			</table></center><br>
		";

		echo "<div class='aspek'>Lampiran : $key->lampiran</div>";
		
		echo "<div class='tombol'>Waktu : $key->waktu ";?>
		<a href="<?php echo base_url() ?>home/ubah/<?php echo $key->id; ?>">Lihat Selengkapnya ></a></div>

	<?php	echo "<hr><br>";
	} ?>
	
</body>
</html>