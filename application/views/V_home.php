
	<div class="container">
		<div class="content">
			<div class="heading">
				<h1>ITERA  LAPOR!</h1>
			</div>
			<!-- <h3>Sampaikan laporan Anda langsung kepada instansi kampus berwenang</h3> -->

			<div class="heading">
				<p>Buat Laporan/Komentar</p>
				<hr>
			</div>
			<form action="post">
				<div class="nama">
					<input class="type" name="nama" placeholder="Nama Pelapor">
				</div>
				<br>
				<div class="keterangan">
					<textarea type="text" name="laporan" rows="13" cols="97" placeholder="Ketik laporan Anda..."></textarea>
				</div>
				<br>
				<div class="aspek">
                <select name="aspek">
                    <option default>Pilih Aspek Pelaporan/Komentar</option>
                    <option value="Dosen">Dosen</option>
                    <option value="Staff">Staff</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Infrastruktur">Infrastruktur</option>
                </select>
           		</div>
			<br>
			<div class="file">
                <input class="file_in" type="file" name="lampiran">
            </div>
			<br>
			<div class="lapor">
				<input class="button" type="submit" value="Buat LAPOR!">
			</div>
			</form>
		</div>
	</div>
