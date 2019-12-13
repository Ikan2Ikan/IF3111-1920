<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('assets/css/style_tampilan_utama.css') ?>" />

	<title>Tampilan Utama</title>
</head>

<body>

	<fieldset>
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
					<h4><a href="<?php echo base_url() . 'control/tampilan_lapor' ?>">Buat Laporan/Komentar</a></h4>
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
			<div class="container">
				<hr />
				<div class="box-v">
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae
						officiis atque rem provident? Aperiam nihil officiis sit consequatur
						quaerat, itaque, eius eos vel commodi voluptates dolor temporibus
						illum id voluptatum?
					</p>
					<div class="box-h">
						<div class="lampiran">
							<h4><a href="#">Lampiran : </a></h4>
						</div>
					</div>
					<div class="box-h">
						<div class="waktu">
							<h4>Waktu :</h4>
						</div>
					</div>
					<div class="box-h">
						<div class="lihat">
							<h4><a href="<?php echo base_url() . 'control/tampilan_detail' ?>">Lihat Selengkapnya></a></h4>
						</div>
					</div>
				</div>
			</div>


			<div class="container">
				<hr />
				<div class="box-v">
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae
						officiis atque rem provident? Aperiam nihil officiis sit consequatur
						quaerat, itaque, eius eos vel commodi voluptates dolor temporibus
						illum id voluptatum?
					</p>
					<div class="box-h">
						<div class="lampiran">
							<h4><a href="#">Lampiran : </a></h4>
						</div>
					</div>
					<div class="box-h">
						<div class="waktu">
							<h4>Waktu :</h4>
						</div>
					</div>
					<div class="box-h">
						<div class="lihat">
							<h4><a href="#">Lihat Selengkapnya></a></h4>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<hr />
				<div class="box-v">
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae
						officiis atque rem provident? Aperiam nihil officiis sit consequatur
						quaerat, itaque, eius eos vel commodi voluptates dolor temporibus
						illum id voluptatum?
					</p>
					<div class="box-h">
						<div class="lampiran">
							<h4><a href="#">Lampiran : </a></h4>
						</div>
					</div>
					<div class="box-h">
						<div class="waktu">
							<h4>Waktu :</h4>
						</div>
					</div>
					<div class="box-h">
						<div class="lihat">
							<h4><a href="#">Lihat Selengkapnya></a></h4>
						</div>
					</div>
				</div>
				<hr />
			</div>

		</section>
	</fieldset>
</body>

</html>