	<div class = "untukcari">
	<form action="<?= base_url(). 'home/cari_laporan'; ?>"  method="POST">
		<input type="text" name="cari" id="formcari" placeholder="Cari berdasarkan aspek atau isi laporan">
	    <button type="submit"><i class="fa fa-search"> CARI</i></button>
	</form>
	</div>

	<div class = "lapor">
	<a style="text-align: center;" href="<?= base_url(); ?>home/lapor">Buat Laporan/Komentar</a>
	</div>

	<div class="laporanterakhir">
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
		Lampiran: <?= $tampil->file?> &nbsp &nbsp &nbsp 
		<span>
		<div style="text-align: right;">
			<a> Waktu: <?= $tampil->date?>  </a>  &nbsp &nbsp &nbsp 
			<a href="<?= base_url(); ?>home/lihat/<?= $tampil->id;?>">Lihat selengkapnya</a>
		</span>
		</div>
	</p>
	<hr>	
		<?php } ?>
	</div>
</body>
</html>