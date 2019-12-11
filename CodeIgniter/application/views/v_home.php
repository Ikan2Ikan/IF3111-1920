<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sistem Lapor!</title>
	<link rel="stylesheet" href="assets/css/awal.css"></link>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<style type="text/css"> /**Dibuat embedded css karena ketika dibuat external, css tidak mau jalan. entah karena versi ataupun permasalahan komputer yang saya miliki**/
	body {
	font-family: constantia;
	margin: 80px;
	text-align: center;
	}

	body h1{
		text-align: center;
	}

	body form{
		text-align: center;
	}

	body form input{
		width: 800px;
		height: 40px;
		margin-top: 30px;
		border: 2px solid;
	}

	body form button{
		height: 45px;
		background-color: white;
		border: 2px solid;
	}

	a{
		text-decoration: none;
		color: black;
	}
	.lampiran{
		position: relative;
		right: 330px;
	}
	hr{
		border: 1px solid;
		color: black;
		width: 72%;
	}

	p{
		width: 72%;
		position: relative;
		left: 165px;
	}
	span{
		position: absolute;
		right: 1px;
	}
	</style>
		
</head>

<body>
		<a href="<?php echo site_url('home')?>">
		<h1>SIMPLE LAPOR!</h1></a>

		<form action="search.php">
	      <input type="text" name="search">
	      <button type="submit"><i class="fa fa-search"> CARI</i></button>
	    </form>
	    <br>
	    <a style="text-align: center;" href="<?php echo site_url('home/lapor') ?>">Buat Laporan/Komentar
	    	<i class="fa fa-plus"></i>
	    </a><br><br><br>
	    <label class="lampiran">Lampiran/Komentar Terakhir</label>
	<hr>

		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		 
		<p align="justify">
		<?php $string = $u->laporan; //Membuat limit hanya 300 char yang dapat ditampilkan.
		if (strlen($string) > 300) {
		$trimstring = substr($string, 0, 300). '.....';
		} else {
		$trimstring = $string;
		}
		echo $trimstring;
		?>	
		</p>

		<p align="left">
			<i class="fa fa-folder"></i> Lampiran: <?php echo $u->file?> 
			<span><i class="fa fa-calendar"></i> Waktu: <?php echo $u->waktu?> ||  
				<a href="">Lihat selengkapnya
					<i class="fa fa-caret-square-o-right"></i>
				</a>
			</span>

		</p>
		<hr>
		
			
		<?php } ?>

</body>
