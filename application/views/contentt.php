<!DOCTYPE html>
<html>
<head>
	<title>DETAIL LAPORAN</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/contenttstyle.css'); ?>" />
</head>
<body>
	<div class="container">
		<div class="topTitle">
			<h2>SIMPLE LAPOR!</h2>
		</div>
		<div class="searchform">
			<div class="kolomsearch">
				<form action="" method="POST">
					<table>
						<tr>
							<td><input type="text" name="cari" size="100"></td>
							<td><button type="submit" name="submit">  C  A  R  I   </button></td>
						</tr>	
					</table>
			</form>
			</div>
			<div class="laporan-baru">
				<label><a href="<?php echo base_url('index.php/form_lapor/tambahgambar'); ?>">Buat Laporan Baru [+]</a></label>
			</div>
		</div>
		<div class="laporan-terakhir">
			<div class="label-laporan">
				<label><b>Laporan Terakhir</b></label>
				<hr>
			</div>
			<div class="daftar-laporan">
				<?php 
					foreach ($laporan as $row) {
						echo substr($row->teks_laporan,0,300).". . . . . ."; ?>
						<br> <br>
						<label>Lampiran : gambar.jpg  <div class="detail-laporan">Waktu : <?php echo $row->waktu;?> <a href="<?php echo site_url('selengkapnya/data_single')."?id=$row->id"; ?>">Lihat Selengkapnya <b>></b> </a></label></div>
						<hr>
				<?php	
					}
				 ?>
				
			</div>
		</div>
		
	</div>
</body>
</html>