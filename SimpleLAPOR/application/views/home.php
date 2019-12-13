<!DOCTYPE html>
<html>
<head>
	<title>LAPOR!</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('tampilan/css/style.css'); ?>">
</head>
<body>
	<div class="header">
	  <h1>LAPOR!</h1>
	</div>
	<div class="navbar">
		<ul>
		  <li><a class="active" href="<?php echo base_url().'index.php/default_controller'; ?>">Beranda</a></li>
		  <span><li><a href="">Masuk</a></li>
		  <li><a href="#contact">Daftar</a></li></span>
		  <li><a href="<?php echo base_url().'index.php/create'; ?>">Buat Laporan/Komentar</a></li>
		</ul>
	</div>
	<div id="box">	
		<form action="" method="POST">
			<input class="search" type="text" placeholder="cari...">	
			<input class="button" type="button" value="Cari"><br>
		</form>				
		<div class="konten1">
		<h4>Laporan/Komentar Terakhir</h4>
		<hr>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
		</div>
		<div class="konten2">
			<h4>Lampiran: Gambar.jpg <span>(WAKTU) <a href="<?php echo base_url().'detail'; ?>">Lihat Selengkapnya ></a>></span></h4>
			<hr>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>						
		</div>
		<div class="konten3">
			<h4>Lampiran: Gambar.doc <span>(WAKTU) <a href="<?php echo base_url().'detail'; ?>">Lihat Selengkapnya ></a>></span></h4>
			<hr>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>						
		</div>
		<div class="konten4">
			<h4>Lampiran: Gambar.jpg <span>(WAKTU) <a href="<?php echo base_url().'detail'; ?>">Lihat Selengkapnya ></a>></span></h4>
			<hr><br><br>						
		</div>
		</div>
			<div class="footer">
	  		<p>Muhammad Telaga Nur Handi Nindita</p>
	  		<p>Muhammad Alfan Riyadi</p>
		</div>		
</body>
</html>	

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

