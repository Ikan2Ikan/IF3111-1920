
	<p>Detail Laporan/Komentar</p>
	<hr>

	<?= $data['laporan'] ?>
	<br><br>

	Lampiran:
	<?= $data['file'] ?>
	<br><br>

	Waktu: <?= $data['date']?>  &nbsp &nbsp &nbsp
	Aspek: <?= $data['aspek']?> 

	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	<a href="<?= base_url(); ?>home/ubah/<?= $data['id']?>">Ubah Laporan/Komentar</a>
	&nbsp &nbsp
	<a href="<?= base_url(); ?>home/hapus/<?= $data['id']?>">Hapus Laporan/Komentar</a>