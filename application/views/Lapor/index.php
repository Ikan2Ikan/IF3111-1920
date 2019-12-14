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
<br><br><br><br><br><br>




<center>
<div id="cari">
<input type="text" name="keyword" size = "15" autofocus placeholder="masukan keyword pencarian" autocomplete="off" >
 <button type="submit" name="cari">cari</button><br><br>
 <!-- controler yaitu Mahasiswa dan fungsi InputDataLapor -->
</div><!--  end cari -->
<!-- end  -->

 <div id="tambah_laporan">
	<a href="<?php echo base_url() ?>Halaman_utama/InputDataLapor"><img src="<?php echo base_url(); ?>assets/tombol/upload.png"></a>
</div><!-- tambah_laporan -->
</center>
<br>

<?php if(!$this->session->userdata('email')==null) {
	echo "<center>";
	echo " <h3> Anda Telah Login Dengan Akun</h3>";
	echo "<h3>".$this->session->userdata('email')."</h3>";
	echo "</center>";
}else{
	echo "<center>";
	echo "<h2>anda belum login</h2>";
	echo "</center>";
}
?>

<center>
<div class="content">
	<div id="laporan">
	<h4>Laporan/Komentar Terakhir</h4>
	</div>
	<br><br><br><br>
	<?php foreach ($lapor as $mhs): ?>
	<?php if(!$this->session->userdata('email')==null && $this->session->userdata('email')== $mhs['email']) :  ?>
       <a href="<?php base_url(); ?>Halaman_utama/HapusData/<?php echo $mhs['komentar_id'] ?>" onclick="return confirm('Anda yakin');">Hapus Laporan</a> |

      	<a href="<?php base_url(); ?>Halaman_utama/UbahDataLaporan/<?php echo $mhs['komentar_id'] ?>">Ubah</a>  
		<?php endif; ?>

    <ul>
    <div id="nama">
    	<b><p>
    	Kiriman Oleh :
    	<?php if($this->session->userdata('email') == $mhs['email']) :?>
    		Anda
    	<?php else : ?>
    		<?php echo $mhs['nama'] ?>
    	<?php endif; ?>
     	</p></b>
    </div> <!-- end nama -->

    <div id="waktu">
    	 <b><p>
    	 	<?php echo $mhs['waktu'] ?>
    	 </p></b>
    </div> <!-- end waktu -->
   
    <br><br>

    <div id="lampiran1">

      <!-- agar yang bukan png atau gambar tidak tampil -->
    <?php if($data = substr($mhs['lampiran'],-3) == 'png' || $data = substr($mhs['lampiran'],-3) == 'jpg' ) : ?><br><br>
     	 <img src="<?php echo base_url().'lampiran/'.$mhs['lampiran'] ?>" height="80px" widht="80px">
	<?php elseif($data = substr($mhs['lampiran'],-3) == 'pdf'): ?>
		Lihat File PDF :
		<a href="<?php echo base_url().'lampiran/'.$mhs['lampiran'] ?>" target="blank"> view</a>
	<?php elseif($data = substr($mhs['lampiran'],-4) == 'docx'): ?>
		File Docx :
		<a download="" href="<?php echo base_url().'lampiran/'.$mhs['lampiran'] ?>" target="blank"> Download</a>
	<?php elseif($mhs['lampiran'] == ''): ?>
		Tidak Ada File Terlampir!
	<?php endif; ?>
		

    </div> <!-- end lampiran -->
    <br><br>
 	<div id="komentar">  
 	<p>  
      <?php  echo "<p>".substr($mhs["komentar"],0,300)."</p>"; ?>
    <a href="<?php echo base_url() ?>Halaman_utama/halaman_selengkapnya/<?php echo $mhs["komentar_id"]; ?>">selengkapnya......</a>
    </p>
    </div> <!-- end komentar -->

    </ul>
  <br>

<hr width="800">
	<?php endforeach; ?>
    
</div> <!-- end contend -->
</center>
