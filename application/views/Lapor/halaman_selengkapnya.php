

<br><br>
<center>
<div class="content2">
	<div id="waktu">
	<b><?php echo $lapor['nama'] ?></b><br>
	<b><?php echo $lapor['waktu'] ?></b>
	</div> <!-- end waktu -->

    <!-- agar yang bukan png atau gambar tidak tampil -->
    <div id="view">
    <?php if($data = substr($lapor['lampiran'],-3) == 'png' || $data = substr($lapor['lampiran'],-3) == 'jpg' ) : ?><br><br>
    <li><img src="<?php echo base_url().'lampiran/'.$lapor['lampiran'] ?>" height="300px" widht="300px"></li>
	<?php elseif($data = substr($lapor['lampiran'],-3) == 'pdf'): ?>
		<a href="<?php echo base_url().'lampiran/'.$lapor['lampiran'] ?>" target="blank"> view</a> 
	<?php elseif($data = substr($lapor['lampiran'],-4) == 'docx') : ?>
		<a download="" href="<?php echo base_url().'lampiran/'.$lapor['lampiran'] ?>" target="blank"> download</a> 
	<?php endif; ?>
	</div>
<br><br><br><br>
<?php echo  $lapor['komentar'] ?><br><br>

	
</div>

</center>

