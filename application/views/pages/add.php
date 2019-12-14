<section class="about" id="buat-lapor">
	<div class="container">
		<div class="alas">
			<div class="buat-laporan">
				<!-- <p>Buat Laporan/Komentar</p>
				<hr> -->
				<?php echo form_open_multipart('laporan/input'); ?>
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

					<input class="btn px-5" type="submit" name="send" id="send-button" value="LAPOR!">
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</section>

<script src="<?php echo base_url(); ?>js/script2.js"></script>