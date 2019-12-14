<script>
function confirmDialog() {
 return confirm('Apakah anda yakin ingin menghapus laporan?')
}
</script>

<div class='divrev'>
	<div class='kusus'>
	<a onclick="window.history.go(-1);"> < Kembali </a><br><br><br>
	</div>
	<a>Detail laporan/komentar</a>
    <hr/><br>

	<?php 
	foreach ($lapor->result() as $lap){
	?>

		<div class='divrev1'>
			<label>Judul : <?php echo $lap->judul ?></label><br><br>
			<a> <?php echo $lap->isi ?> </a>
		</div>



		<div class='divrev2'>
			<a>Lampiran : </a>
			<br><br>
			<?php $cek = substr($lap->file,-3);
			if ($cek == "-" || $cek ==""){ ?>
			<img src="<?php echo base_url(); ?>assets/nofile.png" height="100px" width="100px">
			<?php }elseif($cek=="png"||$cek=="jpg"||$cek=="peg"||$cek=="gif"){ ?>
			<img src="<?php echo base_url('upload/'.$lap->file.'');?>" height="300px" width="250px">
			<?php }else{ ?>
			<img src="<?php echo base_url(); ?>assets/files.png" height="130px" width="100px">
			<?php }?>
			<br>
			<a><?php echo $lap->file ?></a>
			<br>
		</div>



		<div class='divrev3'>
			<a>Waktu : <?php echo $lap->waktu ?></a><br>
			<a>Aspek  : <?php echo $lap->kategori ?></a>
			<br><hr/>
		</div>
    	

	<?php } ?>
	<br><hr/><br>

	<div class='divact'>
		<a onclick="document.getElementById('id03').style.display='block'">Edit</a>
		<?php echo anchor('C_lapor/hapus/'.$lap->id_lapor, 'Hapus', array('class'=>'delete', 'onclick'=>"return confirmDialog();")); ?>
	</div>




<div id="id03" class="divform">  
  <form class="form-isi transisi" action="<?php echo site_url('C_lapor/edit') ?>" method="post" enctype="multipart/form-data">
    
    <!-- tombol close -->
    <div class="divclose">
      <a onclick="document.getElementById('id03').style.display='none'" class="close" title="Kembali">&times;</a>
    </div>

    <h1><center>Simple Lapor!</center></h1>

    <div class="container">
    	<a>Ubah laporan/komentar</a>
      	<hr/><br>

    	<input type="hidden" name="id" value="<?php echo $lap->id_lapor ?>">

    	<div class="container2">
    		<label>Judul : </label>
      		<input type="text" name="judul" value="<?php echo $lap->judul ?>" required>
      		<br>
      	</div>

      	<div class="container2">
      		<textarea type="text" name="isi" value="<?php echo $lap->isi ?>" placeholder="komentar/laporkan sesuatu" required minlength="20"></textarea>
      		<br>
      	</div>

        <div class="container2">
          <label>Aspek : </label>
          <select name="cat">
            <option selected="selected">Dosen</option>
            <option>Staff</option>
            <option>Mahasiswa</option>
            <option>Infrastruktur</option>
            <option>Pengajaran</option>
          </select>
        </div>

    	  <div class="container2">
      		<label>Lampiran : </label>
      		<input type="file" name="nmfile" value="<?php echo $lap->file ?>">
      		<br>
      	</div>
        
        <div class="container3">
      		<button type="submit" name="submit">Simpan</button>
      	</div>
      <br>
      <hr/>

    </div>

  </form>
</div>

</div>

</body>
<html>