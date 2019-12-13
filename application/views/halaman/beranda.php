<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/utama.css" />
	<title>Tampilan Utama</title>
</head>

<body>
	<header>
		<div class="container">
			<center>
				<h1>Simple Lapor!</h1>
			</center>
		</div>
	</header>

	<section id="searchlaporan">
		<div class="container">
			<form action="" method="get">
				<input type="text" placeholder="search" />
				<button type="submit" class="button-1">Search Now</button>
			</form>
		</div>
	</section>
	<section id="buatlaporan">
		<div class="container">
			<center>
				Buat Laporan/Komentar <span style="text-style:bold;padding: 1px 2px;background-color: #000; color: #fff;">+</span>
				<!-- belum ditambah icon+(plus) -->
			</center>
			
		</div>
	</section>
	<section id="laporan/komentarterakhir">
		<div class="container">
			<h4>Laporan/Komentar Terakhir</h4>
		</div>
	</section>
	<section id="boxes">
		<?php 
			if(count($listlaporan)>0){
				$count = 1;
				foreach($listlaporan as $index => $value){
		?>
		<div class="container">
			<hr />
			<div class="box-v">
				<p><?php echo $value->laporan ?>
				</p>
				<div class="box-h">
					<div class="lampiran">
						<h4><a href="#">Lampiran : </a></h4>
					</div>
				</div>
				<div class="box-h">
					<div class="waktu">
						<h4>Waktu : <?php echo $value->waktu ?></h4>
					</div>
				</div>
				<div class="box-h">
					<div class="lihat">
						<h4><a href="#">Lihat Selengkapnya></a></h4>
					</div>
				</div>
			</div>
		</div>

		<?php
		
				}
			}
		?>
		
		<div class="container"><hr></div>
	</section>
</body>

</html>
