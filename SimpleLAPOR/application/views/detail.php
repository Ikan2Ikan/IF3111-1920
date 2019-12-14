<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('tampilan/css/style.css'); ?>">   
    <title>Document</title>
</head>
<body>
<div class="header">
	<h1>LAPOR!</h1>
</div>
<div class="navbar">
	<ul>
		 <li><a class="active" href="<?php echo base_url().'';?>">Beranda</a></li>
		 <span><li><a href="">Masuk</a></li>
		 <li><a href="#contact">Daftar</a></li></span>
		 <li><a href="<?php echo base_url().'create'; ?>">Buat Laporan/Komentar</a></li>
	</ul>
</div>	
<div id="box">
<h1 align="center">SIMPLE LAPOR!</h1>


	
		<h4>Detail Laporan / Komentar</h4>
		<hr>
		<p><?php echo $laporan_item['komentar'];?></p>
		<!-- <script type="text/javascript"> -->
		<!-- function image(img) { -->
  		  <!-- var src = img.src; -->
   			 <!-- window.open(src); -->
			<!-- } -->

			
		<?php echo '<img src="data:image/;base64,'.base64_encode( $laporan_item['lampiran'] ).'"/>' ?>
			<span>Aspek : <?php echo $laporan_item['aspek_pelaporan']; ?> </span>
			<span>Dibuat pada : <?php echo $laporan_item['tanggal']; ?> </span>
			
			<?php $id = $laporan_item['no']; ?>
			

</script>

</div>
					

</div>
<div class="footer">
	<p>Muhammad Telaga Nur Handi Nindita</p>
	<p>Muhammad Alfan Riyadi</p>
</div>	
</body>
</html>