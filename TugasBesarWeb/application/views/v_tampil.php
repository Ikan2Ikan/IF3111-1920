	<div class="tabel">
	<center><table border="1">
		<tr>
			<td width="790px"><input type="text" name="search" size="110" /></td>
			<td width="10px"><a href="">Cari</a></td>
		</tr>
	</table></center></div><br>

	<center><a href="<?php echo base_url() ?>home/tambah/">Buat Laporan/Komentar</a></center>

	<p>Laporan/Komentar Terakhir</p>
	<hr>

<?php
	foreach ($laporan as $key) {
		$kata = substr($key->isi, 0, 600);
		echo "<center><table width='810px'>
				<tr>";
					if (strlen($key->isi) > 600) {
						echo "<td style='text-align:justify;'>$kata...</td>";
					} else {
						echo "<td style='text-align:justify;'>$key->isi</td>";
					}
				echo "</tr>
			</table></center><br>
		";

		echo "<div class='aspek'>Lampiran : $key->lampiran</div>";
		
		echo "<div class='tombol'>Waktu : $key->waktu ";?>
		<a href="<?php echo base_url() ?>home/detail/<?php echo $key->id; ?>">Lihat Selengkapnya ></a></div>

	<?php	echo "<hr><br>";
	} ?>