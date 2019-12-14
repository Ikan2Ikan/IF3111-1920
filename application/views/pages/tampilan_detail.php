<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('assets/css/style_tampilan_detail.css') ?>" />

	<title>Tampilan Detail</title>
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

		<div class="container">
			<h4>Detail Laporan/Komentar</h4>
		</div>

		<div class="container">
			<?php

			echo form_open("control/lihat/" . $laporan->id);
			echo $laporan->id;
			echo "<p>" . $laporan->laporan . "</p>";

			echo "<h4>Lampiran</h4>";
			if ($laporan->tipe_file == 'imege/jpg' || $laporan->tipe_file == 'image/png'  || $laporan->tipe_file == 'image/jpeg') {
				echo "<img src='" . base_url("lampiran/" . $laporan->lampiran) . "' width='500' height='500'>";
			} else {
				echo "<img src='" . base_url("lampiran/" . "icon-dokumen.PNG") . "' width='500' height='500'>";
			}
			?>
		</div>

		<section id="boxes">
			<div class="container">
				<?php

				echo form_open("control/lihat/" . $laporan->id);
				$link = base_url('control/hapus/' . $laporan->id);
				$link1 = base_url('control/ubah/' . $laporan->id);

				echo "<div class='box-h'>",
					"<div class='waktu'>",
					"<h4>Waktu :" . $laporan->waktu . "</h4>",
					"</div>",
					"</div>";

				echo "<div class='box-h'>",
					"<div class='aspek'>",
					"<h4>Aspek : " . $laporan->aspek . "</h4>",
					"</div>",
					"</div>";

				echo "<div class='box-h'>",
					"<div class='lihat'>",
					"<h4><a href=" . $link1 . ">Ubah</a></h4>",
					"</div>",
					"</div>";

				echo "<div class='box-h'>",
					"<div class='lihat'>",
					"<h4><a href=" . $link . ">Hapus</a></h4>",
					"</div>",
					"</div>";
				?>

			</div>
		</section>
	</fieldset>
</body>

</html>