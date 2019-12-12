<h2>Latest Posts</h2>
<?php foreach($posts as $post) : ?>
	<?php echo $post['deskripsi']; ?>
	<br>
	<br>
	Lampiran : <?php echo $post['lampiran'] ?>
	<br>
	Waktu : <?php echo $post['waktu']; ?>
	<br><br>
<?php endforeach; ?>