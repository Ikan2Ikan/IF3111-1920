<center>

<div class="content">
    <?php echo $lapor['nama'] ?><br><br>
    <?php echo  $lapor['komentar'] ?><br><br>

    <!-- agar yang bukan png atau gambar tidak tampil -->
    <?php if($data = substr($lapor['lampiran'],-3) == 'png' || $data = substr($lapor['lampiran'],-3) == 'jpg' ) : ?><br><br>
    <li><img src="<?php echo base_url().'lampiran/'.$lapor['lampiran'] ?>" height="60px" widht="60px"></li>
	<?php elseif($data = substr($lapor['lampiran'],-3) == 'pdf'): ?>
		<a href="<?php echo base_url().'lampiran/'.$lapor['lampiran'] ?>" target="blank"> view</a> 
	<?php elseif($data = substr($lapor['lampiran'],-4) == 'docx') : ?>
		<a download="" href="<?php echo base_url().'lampiran/'.$lapor['lampiran'] ?>" target="blank"> download</a> 
	<?php endif; ?>


	
</div>

</center>

