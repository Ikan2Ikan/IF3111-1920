<fieldset>
<h1>LAPOR ITERA!</h1>

<?= validation_errors();?>
<div class="tambah">
	<form action="" method="post" enctype="multipart/form-data">
				    
		<label for="lapor">Buat Laporan/Komentar
		<hr />
			<br>
		</label>
		<textarea name="lapor" id="lapor" placeholder="Masukkan keluhan anda disini..." rows="4" cols="50"></textarea>
		
			<br><br>

			<br>
		<select id="aspek" name="aspek">
			<option>Dosen</option>
			<option>Staff</option>
			<option>Mahasiswa</option>
			<option>Infrastruktur</option>
			<option>Pengajar</option>
		</select>

			<br><br>
			<input type="file" name="gambar" id="gambar">
			
			<br><br>
		<button type="submit" name="tambah">Tambah data</button>
</form>	
</div>
</fieldset>
