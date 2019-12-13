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
		<a href="../posts">Home</a>
	  	<a href="../posts">Post</a>
	</div>

	<!-- Header -->
	<header>
		<h1 class="judul">SIMPLE LAPOR!</h1>
	</header>
	<!-- Akhir Header -->
	
	<!-- Isi -->
	<div class="wrap"> 
		<div class="konten">
			<h2>Detail Laporan/Komentar</h2>
			<hr>
			<p>
				<?php echo $post['deskripsi']; ?>
			</p>
			<p>Lampiran:</p>
			<div>
				<img src="<?php echo $post['lampiran']; ?>">
			</div>
			<form>
				<label>Waktu: <?php echo $post['waktu']; ?>  ||</label>	
				<label> Aspek: <?php echo $post['kategori']; ?></label>	<br>
				<a href="edit/<?php echo $post['id']; ?>" class="next">Ubah Laporan/Komentar <i class="fa fa-pencil"></i></a>
			</form>

			<?php echo form_open('../../../../posts/delete/'.$post['id']); ?>
					<input type="submit" value="Delete">
			</form>
			<br><br><br>
			<hr>
		</div>
	</div>
	<!-- Akhir Isi -->
	
	<div class="footer">
  		<p>Created by Laurensius Joshua Anrico Agustinus and Krisdiyansyah</p>
	</div>
</body>
</html>