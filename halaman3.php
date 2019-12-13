<!DOCTYPE html>
<html lang="en">
<head>
<title>Layanan Aspirasi Mahasiswa Teknik Informatika ITERA</title>
<link rel="stylesheet" type="text/css" href="css/csshal3.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<header>
<div class="header">
  <h1>Layanan Aspirasi Mahasiswa Teknik Informatika ITERA</h1>
</div>
<br><br>
</header>
<div class="konten">
  <a > Detail Laporan/Komentar </a>
  <hr>
   <?php  
	include "koneksi.php";
	if(isset($_GET['detail'])){
       $id = $_GET['detail'];
	$sql = "SELECT * FROM laporan WHERE id_lapor = $id";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

	while($data = mysqli_fetch_array($query)){
		$isi = $data['isi_lapor'];
		$jenis = $data['jenis_lapor'];
		$tgl = $data['tgl_lapor'];
		$file = $data['file'];
	} ?>

	<div class="isilaporan">
		<?php echo $isi; ?>
	</div>
	<br>
	Lampiran :
	<br>
	<div class="lampiran">
		<br>
		<?php echo "<img src='img/".$file."'style='width:200px; height:200px;'>"?>
	</div>
	<br>
	<p class="ratakiri">Waktu : <?php echo $tgl; ?> &emsp;&emsp; Aspek : <?php echo $jenis; ?></p>
	<p class="ratakanan">Hapus Laporan/Komentar<img src="img/x.png" width="10px"></p>
	<br><br><br>
	<hr>





   <!-- <textarea  name="komentar" id="message" rows="20" cols="130"></textarea> 
   <br><br>
   <select   name="aspek_komentar">
                <option >Pilih Aspek Komentar</option>
                <option value="Ruangan">Ruangan</option>
                <option value="Matakuliah">Matakuliah</option>
                <option value="Nilai">Nilai</option>
                <option value="Dosen">Dosen</option>
                
            </select>
            <br>
    <input type="file" name="file" value="" class="konten">
  </div>

  <footer>
    <input type="submit" value="BUAT LAPOR!">
  </footer> -->

</body>
</html>
