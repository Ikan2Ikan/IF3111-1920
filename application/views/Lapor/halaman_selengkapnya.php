

<br><br><br><br>
<center>
<div class="content2">
	<div id="waktu">
	<b><?php if($this->session->userdata('email') == $lapor['email']) :?>
    	Anda
    	<?php else : ?>
    	<?php echo $lapor['nama'] ?>
    	<?php endif; ?><hr>
    	Aspek : <?php echo $lapor['kategori'] ?>
    </b>
	<b><?php echo $lapor['waktu'] ?></b>
	</div> <!-- end waktu -->

    <!-- agar yang bukan png atau gambar tidak tampil -->
    <div id="view">
    <?php if($data = substr($lapor['lampiran'],-3) == 'png' || $data = substr($lapor['lampiran'],-3) == 'jpg' ) : ?><br><br>
    <li><img src="<?php echo base_url().'lampiran/'.$lapor['lampiran'] ?>" height="300px" widht="300px"></li>
	<?php elseif($data = substr($lapor['lampiran'],-3) == 'pdf'): ?>
		<a href="<?php echo base_url().'lampiran/'.$lapor['lampiran'] ?>" target="blank"> View Lampiran</a> 
	<?php elseif($data = substr($lapor['lampiran'],-4) == 'docx' || $data = substr($lapor['lampiran'],-3) == 'doc' ): ?>
		<a download="" href="<?php echo base_url().'lampiran/'.$lapor['lampiran'] ?>" target="blank"> Download</a>	
	<?php elseif($data = substr($lapor['lampiran'],-3) == 'ppt' || $data = substr($lapor['lampiran'],-4) == 'pptx' ): ?>
		<a download="" href="<?php echo base_url().'lampiran/'.$lapor['lampiran'] ?>" target="blank"> Download</a>	
	<?php elseif($data = substr($lapor['lampiran'],-3) == 'xls' || $data = substr($lapor['lampiran'],-4) == 'xlsx' ): ?>
		<a download="" href="<?php echo base_url().'lampiran/'.$lapor['lampiran'] ?>" target="blank"> Download</a>	
	<?php elseif($lapor['lampiran'] == ''): ?>
		Tidak Ada File Terlampir!
	<?php endif; ?>

	</div>
<br><br><br><br>
<?php echo  $lapor['komentar'] ?><br><br>

	
</div>

</center>

