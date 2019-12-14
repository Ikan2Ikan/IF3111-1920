<h1>LAPOR!</h1>

<?= validation_errors();?>

<form action="" method="post" enctype="multipart/form-data">
				    
	<label for="lapor">Masukkan Keluhan/Komentar
		<br>
	<textarea name="lapor" id="lapor" placeholder="Laporan/Komentar"row="10" cols="100" value="<?= $keluhan['lapor'];?>"></textarea>
	</label>
	<br><br>

	<label for="aspek">Aspek</label>
	<br>
	<select id="aspek" name="aspek">
	<option>Pilih Aspek Pelaporan/Komentar</option>
            <option>Administrasi</option>
            <option>Biaya Iuran</option>
            <option>BUMN
            <option>BPJS</option>
            <option>Cara pengajuan kecelakaan kerja</option>
            <option>Data dan Informasi Umum</option>
            <option>Energi dan Sumber Daya Alam</option>
            <option>Fasilitas Umum</option>
            <option>Gangguan aplikasi online</option>
            <option>Harga Pasar</option>
            <option>Informasi Nomor kartu</option>
            <option>Infrastruktur</option>
            <option>investasi MIGAS</option>
            <option>Jam Operasional Kantor</option>
            <option>Keamanan dan ketertiban Masyarakat</option>
            <option>Keluhan Masyarakat</option>
            <option>Lembaga Ombudsman</option>
            <option>Pariwisata</option>
            <option>Pensiunan</option>
            <option>Reformasi Birokrasi</option>
            <option>Situasi Khusus</option>
            <option>Kebencanaan</option>
	</select>
	<br><br>

	<label for="gambar">Gambar</label>
	<input type="file" name="gambar" id="gambar">
	<br><br>
	<button type="submit" name="ubah">Mengubah Data</button>
</form>	