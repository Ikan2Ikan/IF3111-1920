<div class="container">
	<div class="buat-laporan">
		<!-- <p>Buat Laporan/Komentar</p>
		<hr> -->
		<?php echo form_open('add'); ?>
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

			<button type="button" id="send-button">LAPOR!</button>
		<?php echo form_close(); ?>
	</div>
</div>
