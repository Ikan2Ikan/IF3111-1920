	<p>Detail Laporan/Komentar</p>
	<hr>
	<br>
<?php
	foreach ($laporan as $key) {
		echo "<center><table width='810px'>
				<tr>
					<td style='text-align:justify;'>$key->isi</td>
				</tr>
			</table></center><br>
		";

		echo "<p>Lampiran : </p>"; ?>
		<center><img src="<?php echo base_url() ?>lampiran/<?php echo $key->lampiran ?>"  width="100" height="150"></center><br>
<?php
		echo "<div class='aspek'>Waktu : $key->waktu</div>";

		echo "<div class='tambah'>Aspek : $key->aspek</div>";
	}
?>
	<div class="tombol">
		<a href="<?php echo base_url() ?>home/edit/<?php echo $key->id; ?>">Edit </a>
		|
		<a href="<?php echo base_url() ?>home/hapus/<?php echo $key->id; ?>" onClick="return confirm('Anda Yakin Akan Menghapus Laporan Ini?')">Hapus</a>
	</div>
	<hr>