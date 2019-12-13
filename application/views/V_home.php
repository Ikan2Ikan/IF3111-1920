<!DOCTYPE html>
<html lang="en">

<style>

</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/home.css')?>">
    <title>LAPOR! ITERA</title>
</head>

<body>

<nav>
<div>
    <form>
   <label>LAPOR! ITERA</label>
    <a href="/home/">Tentang LAPOR!</a>
    <a href="/gallery/">Laporan</a>
	<input class="search" type="text" placeholder="Cari Aduan" required>	
	<input class="button" type="button" value="Cari">		
    </form>
</div>
</nav>

<div class = "kepala">
<h1>Layanan Aspirasi Online Masyarakat ITERA</h1>
<h3>Sampaikan laporan Anda langsung kepada instansi kampus berwenang</h3>
</div>

<div class = "kolom-lapor">
<textarea type="text" name="laporan" rows="13" cols="97" placeholder="Ketik laporan Anda..."></textarea>
</div>

<div class= "kolom-lapor1">
<input class="button" type="button" value="Lapor!">
</div>

</body>
</html>
