<div class='div3'>
<br>
<a style="padding-left: 10px;">Laporan/komentar terakhir</a><br>
<hr/><br>

	<?php 
	//$no = $this->uri->segment('3');
	foreach ($lapor as $lap){
	?>

	<div class='div31'>

		<div class='div311'>
      <?php $result = strlen($lap->isi);
      if ($result > 320){ ?>
      <?php  echo "<p>".substr($lap->isi,0,320)." ...</p>"; ?>
    <?php }else{ ?>
      <a><?php echo $lap->isi ?></a>
    <?php } ?>
		</div>

		<div class='div312'>
      <?php if (strlen($lap->file) > 15){ ?>
      <?php  echo "<a>Lampiran : ".substr($lap->file,0,15)." ...</a>"; ?>
      <?php }else{ ?>
        <a>Lampiran : <?php echo $lap->file ?></a>
      <?php } ?>
		</div>

		<div class='div313'>
			<a>Waktu : <?php echo $lap->waktu ?></a>
      <a><?php echo "<a href=".base_url('index.php/C_lapor/review/').$lap->id_lapor.">Lihat selengkapnya</a>"; ?></a>
		</div>
	</div>
  <hr/><br><br>

	<?php } ?>

	<div class='pagination'>
		<?php 
			echo $this->pagination->create_links();
		?>
	</div>

</div>

</body>
</html>