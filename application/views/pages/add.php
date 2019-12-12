<div class="container">
	<div class="buat-laporan">
		<!-- <p>Buat Laporan/Komentar</p>
		<hr> -->
		<form action="<?php echo base_url('laporan/input'); ?>" method="post">
			<textarea placeholder="Ketik Laporan Anda..." name="isi-laporan"></textarea>

			<div class="custom-select">
				<select name="aspek">
					<option hidden>Pilih Aspek Pelaporan/Komentar</option>
					<option value="Dosen">Dosen</option>
					<option value="Staff">Staff</option>
					<option value="Mahasiswa">Mahasiswa</option>
					<option value="Infrastruktur">Infrastruktur</option>
					<option value="Pengajaran">Pengajaran</option>
				</select>
			</div>

			<input type="file" name="lampiran" id="real-file" hidden="hidden" />
			<button type="button" id="custom-button">Choose File</button>
			<span id="custom-text">No file chosen, yet.</span>
			<br>

			<input type="submit" name="send" id="send-button" value="LAPOR">
		</form>
	</div>
</div>
