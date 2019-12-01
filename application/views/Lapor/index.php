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



<div id="cari">
<center>
<input type="text" name="keyword" size = "15" autofocus placeholder="masukan keyword pencarian" autocomplete="off" >
 <button type="submit" name="cari">cari</button><br><br>
 <!-- controler yaitu Mahasiswa dan fungsi InputDataLapor -->
<a href="<?php echo base_url() ?>Halaman_utama/InputDataLapor"> tambah laporan</a>
 </center>

</script>
<br><br>

<center>
<div class="content">
	<?php foreach ($lapor as $mhs): ?>

	<?php if(!$this->session->userdata('email')==null):  ?>
       <a href="<?php base_url(); ?>Halaman_utama/HapusData/<?php echo $mhs['komentar_id'] ?>" onclick="return confirm('Anda yakin');">Hapus Laporan</a> |

      	 <a href="<?php base_url(); ?>Halaman_utama/HapusData/<?php echo $mhs['komentar_id'] ?>" onclick="return confirm('Anda yakin');">Ubah</a>  
	<?php endif; ?>

    <ul>
      <li><?php echo $mhs['nama'] ?></li>
      <li><?php  echo "<p>".substr($mhs["komentar"],0,400)."</p>"; ?></li>
      <li><?php echo $mhs['lampiran'] ?></li>
      <li><?php echo $mhs['waktu'] ?></li>
      <li>

      	<a href="<?php echo base_url() ?>Halaman_utama/halaman_selengkapnya/<?php echo $mhs["komentar_id"]; ?>">selengkapnya</a>

      	      


      </li>

    </ul>
  <br>
------------------------------------------------------------------
------------------------------------------------------------------
	<?php endforeach; ?>
    
</div>
</center>
