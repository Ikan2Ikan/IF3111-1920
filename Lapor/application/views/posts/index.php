<!-- Header -->
	<header>
		<h1 class="judul">SIMPLE LAPOR!</h1>
	</header>

	<!-- Pencarian -->
	<form>
  		<input class="search" type="text" placeholder="Cari..." required>	
  		<input class="button" type="button" value="Cari">	
	</form>
	<!-- Akhir Pencarian -->

	<form>
		<a href="posts/create" class="next">Buat Laporan/Komentar <i class="fa fa-plus"></i></a>
	</form>
	<!-- Akhir Header -->
	
	<?php foreach($posts as $post) : ?>
	<!-- Isi -->
	<div class="wrap"> 
		<div class="konten">
			<h1> Laporan Tentang <?php echo $post['kategori']; ?></h1>
			<hr>
			<p>
				<?php echo $post['deskripsi']; ?>
			</p>
			<img src="<?php echo $post['lampiran']; ?>">
			<form>
				<label>Waktu: <?php echo $post['waktu']; ?></label>		
				<a href="posts/<?php echo $post['id']; ?>" class="next">Selengkapnya →</a>
			</form>
		</div>
	</div>
	<!-- Akhir Isi -->
	<?php endforeach; ?>