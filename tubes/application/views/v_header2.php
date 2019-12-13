<div class='div2'>

		<center>
		<input placeholder="Cari laporan" type="text" name="cari">
		<button type="submit" value="cari" name="cari">Cari</button>
		</center>
		

		<div class='div21'>
			<button onclick="document.getElementById('id01').style.display='block'">Buat laporan/komentar</button>
		</div>

</div>

<!-- tampilan pop-up formulir -->
<div id="id01" class="divform">  
  <form class="form-isi transisi" action="<?php echo site_url('C_lapor/add') ?>" method="post" enctype="multipart/form-data">

    <!-- tombol close -->
    <div class="divclose">
      <a onclick="document.getElementById('id01').style.display='none'" class="close" title="Kembali">&times;</a>
    </div>

        <h1><center>Simple Lapor!</center></h1>

    <div class="container">
      <a>Buat laporan/komentar</a>
      <hr/><br>

        <div class="container2">
      		<input type="text" name="judul" placeholder="Judul laporan" required>
      		<br>
      	</div>

      	<div class="container2">
      		<textarea type="text" name="isi" placeholder="Laporan/Komentar" required minlength="20"></textarea>
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
      		<input type="file" name="nmfile">
      		<br>
      	</div>

        <div class="container3">
          <button type="submit" name="submit">Kirim</button>
        </div><br>
        <hr/>

    </div>


  </form>
</div>
