
	<form action="<?= base_url(). 'home/cari_laporan'; ?>"  method="POST" >
		<input type="text" name="cari" placeholder="Cari Aspek">
	    <button type="submit"><i class="fa fa-search"> CARI</i></button>
	</form>

	<br>
	<a style="text-align: center;" href="<?= base_url(); ?>home/lapor">Buat Laporan/Komentar</a>
	<br>

	<label class="lampiran">Lampiran/Komentar Terakhir</label>
	<hr>
	<?php 
		foreach($data as $tampil){ 
			$string = $tampil->laporan; 
			if (strlen($string) > 150) {
				$trimstring = substr($string, 0, 150). '.....';
			} else {
				$trimstring = $string;
			}
			echo $trimstring;
	?>	
	<p>
		Lampiran: <?= $tampil->file?>
		<span>
			<a> Waktu: <?= $tampil->date?>  </a>  
			<a href="<?= base_url(); ?>home/lihat/<?= $tampil->id;?>">Lihat selengkapnya</a>
		</span>
	</p>
	<hr>	
		<?php } ?>
</body>
</html>