
	<form>
		<input type="text" name="cari">
	    <button type="submit"><i class="fa fa-search"> CARI</i></button>
	</form>

	<br>
	<a style="text-align: center;" href="<?php echo site_url('home/lapor') ?>">Buat Laporan/Komentar</a>
	<br>

	<label class="lampiran">Lampiran/Komentar Terakhir</label>
	<hr>
	<?php 
		foreach($data as $tampil){ 

		$string = $tampil->laporan; 
		if (strlen($string) > 150) {
			$trimstring = substr($string, 0, 300). '.....';
		} else {
			$trimstring = $string;
		}
		echo $trimstring;
	?>	
	<p>
		Lampiran: <?= $tampil->file?>
		<span>
			<a> Waktu: <?= $tampil->date?>  </a>  
			<a href="<?= site_url('home/lihat')?>">Lihat selengkapnya</a>
		</span>
	</p>
	<hr>	
		<?php } ?>
</body>
</html>