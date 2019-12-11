<?php if($this->session->flashdata('flas')){
	echo "
		<script>
		alert('anda berhasil datar');
		</script>
	";
}else if($this->session->flashdata('input_laporan')){
	echo "
		<script>
		alert('laporan anda telah terkirim');
		</script>
	";
}


 ?>
<br><br><br><br>

<?php if(!$this->session->userdata('email')==null) {
	echo $this->session->userdata('email');
}else{
	echo "<center>";
	echo "anda belum login";
	echo "</center>";
}

?>
<center>
<div id="cari">
<input type="text" name="keyword" size = "15" autofocus placeholder="masukan keyword pencarian" autocomplete="off" >
 <button type="submit" name="cari">cari</button><br><br>
 <!-- controler yaitu Mahasiswa dan fungsi InputDataLapor -->
</div><!--  end cari -->
<!-- end  -->

 <div id="tambah_laporan">
	<a href="<?php echo base_url() ?>Halaman_utama/InputDataLapor"> <b>+</b> tambah laporan</a>
</div><!-- tambah_laporan -->
</center>
</script>
<br><br>

<center>
<div class="content">
	<?php foreach ($lapor as $mhs): ?>

	<?php if(!$this->session->userdata('email')==null && $this->session->userdata('email')== $mhs['email']) :  ?>
       <a href="<?php base_url(); ?>Halaman_utama/HapusData/<?php echo $mhs['komentar_id'] ?>" onclick="return confirm('Anda yakin');">Hapus Laporan</a> |

      	<a href="<?php base_url(); ?>Halaman_utama/UbahDataLaporan/<?php echo $mhs['komentar_id'] ?>">Ubah</a>  
		<?php endif; ?>

    <ul>
    <div id="nama">
    	<b><p>
    	Kiriman Oleh :
    	 <?php echo $mhs['nama'] ?>
     	</p></b>
    </div> <!-- end nama -->

    <div id="waktu">
    	 <b><p>
    	 	<?php echo $mhs['waktu'] ?>
    	 </p></b>
    </div> <!-- end waktu -->
   
    <br><br>

    <div id="lampiran">

      <!-- agar yang bukan png atau gambar tidak tampil -->
    <?php if($data = substr($mhs['lampiran'],-3) == 'png' || $data = substr($mhs['lampiran'],-3) == 'jpg' ) : ?><br><br>
     	 <img src="<?php echo base_url().'lampiran/'.$mhs['lampiran'] ?>" height="80px" widht="80px">
	<?php elseif($data = substr($mhs['lampiran'],-3) == 'pdf'): ?>
		Lihat File PDF :
		<a href="<?php echo base_url().'lampiran/'.$mhs['lampiran'] ?>" target="blank"> view</a>
	<?php elseif($data = substr($mhs['lampiran'],-4) == 'docx'): ?>
		File Docx :
		<a download="#" href="<?php echo base_url().'lampiran/'.$mhs['lampiran'] ?>" target="blank"> Download</a>
	<?php elseif($mhs['lampiran'] == ''): ?>
		Tidak Ada File Terlampir!
	<?php endif; ?>
		

    </div> <!-- end lampiran -->
    <br>
 	<div id="komentar">  
 	<p>  
      <?php  echo "<p>".substr($mhs["komentar"],0,400)."</p>"; ?>
    </p>
      <a href="<?php echo base_url() ?>Halaman_utama/halaman_selengkapnya/<?php echo $mhs["komentar_id"]; ?>">selengkapnya......</a>
    </div> <!-- end komentar -->

    </ul>
  <br>

<hr width="800">
	<?php endforeach; ?>
    
</div>
</center>
