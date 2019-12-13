<h2>Latest Posts</h2>
<?php foreach($posts as $post) : ?>
	<?php echo $post['deskripsi']; ?>
	<br>
	<br>
	Lampiran : <?php echo $post['lampiran']; ?>
	<br>
	Waktu : <?php echo $post['waktu']; ?>
	<br>
	<p><a href="posts/<?php echo $post['id']; ?>">Lihat Selengkapnya<i class="fa fa-arrow-right"></i></a></p>
	<br><br>
<?php endforeach; ?>