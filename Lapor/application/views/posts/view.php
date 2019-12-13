<html>
<head>
	<title>Lapor</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="topnav">
		<div class="logo">
  			<img src="../assets/img/logolapor.png" alt="logo_lapor" width="70"/>
  		</div>
		<a href="../home">Home</a>
	  	<a href="../posts">Post</a>
	  	<a style="float:right" href="#">Sign - In</a>
	  	<a style="float:right" href="#">Sign - Up</a>
	</div>

	<div class="container">
<?php 
echo $post['deskripsi']; ?>
<br>
<br>
Lampiran : <?php echo $post['lampiran']; ?>
<br>
Waktu : <?php echo $post['waktu']; ?>
<br>
Aspek : <?php echo $post['kategori']; ?>
<br>
<p><a href="">Hapus Laporan/Komentar<i class="fa fa-arrow-times"></i></a></p>

	
	</div>
	
	<div class="footer">
  		<p>Created by Laurensius Joshua Anrico Agustinus and Krisdiyansyah</p>
	</div>
</body>
</html>