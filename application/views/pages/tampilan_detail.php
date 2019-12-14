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

		<section id="buatlaporan">
			<div class="container">
				<h4>Detail Laporan/Komentar</h4>
			</div>
		</section>
		<?php 
			if(count($detail)>0){
				$count = 1;
				foreach($detail as $index => $value){
		?>
		<section id="searchlaporan">
			<div class="container">
				<hr>
				<p>
					<?php echo $value->laporan ?>
				</p>
			</div>
		</section>

		<section id="boxes">
			<div class="container">
				<h4>Lampiran</h4>
				<?php
					if($value->tipe_file == "image/png" || $value->tipe_file == "image/jpeg"){
				?>
				<img src="<?php echo base_url()."lampiran/".$value->lampiran ?>" width="500" height="375" alt="">
				<?php 
					} if($value->tipe_file == "application/pdf") { 
				?>
				<embed src= "<?php echo base_url()."lampiran/".$value->lampiran ?>" width= "500" height= "375">
				<?php 
					} else {
				?>
				<a href="<?php echo base_url()."lampiran/".$value->lampiran ?>"><?php echo $value->lampiran ?></a>
				<?php 
					}
				?>
				<div class="box-h">
					<div class="waktu">
						<h4>Waktu : <?php echo $value->waktu ?></h4>
					</div>
				</div>
				<div class="box-h">
					<div class="aspek">
						<h4>Aspek : <?php echo $value->aspek ?></h4>
					</div>
				</div>
				<div class="box-h">
					<div class="hapus">
						<h4><a href="<?php echo base_url()."delete/". $value->id?>">Hapus Laporan/Komentar></a></h4>
					</div>
				</div>
			</div>
		</section>
		<?php
		
				}
			}
		?>
	</fieldset>
</body>

</html>