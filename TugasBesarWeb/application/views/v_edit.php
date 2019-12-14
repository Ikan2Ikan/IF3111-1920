<form name="form-data"  onsubmit="return saveForm(this)" action="<?php echo base_url(). 'home/ubah'; ?>" method="post" enctype="multipart/form-data">
	<p>Edit Laporan/Komentar</p>
	<hr>

<?php
foreach ($laporan as $key) {
	echo "
		<input type='hidden' name='id' value='$key->id'>
		<center><textarea name='laporan' rows='20' cols='115'> $key->isi </textarea></center><br>

		<div class='aspek'>
			<select name='aspek'>
				<option value='$key->aspek'>$key->aspek</option>";
				if($key->aspek == 'Dosen') {
					echo "<option value='Staff'>Staff</option>
					<option value='Mahasiswa'>Mahasiswa</option>
					<option value='Infrastruktur'>Infrastruktur</option>
					<option value='Pengajaran'>Pengajaran</option>";
				} else if($key->aspek == 'Staff') {
					echo "<option value='Dosen'>Dosen</option>
					<option value='Mahasiswa'>Mahasiswa</option>
					<option value='Infrastruktur'>Infrastruktur</option>
					<option value='Pengajaran'>Pengajaran</option>";
				} else if($key->aspek == 'Mahasiswa') {
					echo "<option value='Dosen'>Dosen</option>
					<option value='Staff'>Staff</option>
					<option value='Infrastruktur'>Infrastruktur</option>
					<option value='Pengajaran'>Pengajaran</option>";
				} else if($key->aspek == 'Infrastruktur') {
					echo "<option value='Dosen'>Dosen</option>
					<option value='Staff'>Staff</option>
					<option value='Mahasiswa'>Mahasiswa</option>
					<option value='Pengajaran'>Pengajaran</option>";
				} else {
					echo "<option value='Dosen'>Dosen</option>
					<option value='Staff'>Staff</option>
					<option value='Mahasiswa'>Mahasiswa</option>
					<option value='Infrastruktur'>Infrastruktur</option>";
				}
				
			echo "</select>
		</div><br><br>

		<div class='aspek'>
			<input type='file' name='foto'>
		</div><br><br>
	";	
}
?>

	<div class="tombol">
		<input type="submit" value="Buat LAPOR!">
	</div><br><br>

	<hr>
</form>

<script>
  function saveForm(){
  	var x = document.forms["form-data"]["laporan"].value;
	if (x == null || x == "") {
		alert("Isi Laporan Tidak Boleh Kosong");
		return false;
	}
	x = x.split(" ");
	if (x.length<20) {
		alert("Isi Laporan Tidak Boleh Kurang Dari 20 kata");
		return false;
	}
	var x = document.forms["form-data"]["aspek"].value;
	if (x == null || x == "") {
		alert("Aspek Laporan Tidak Boleh Kosong");
		return false;
	}
	var x = document.forms["form-data"]["foto"].value;
	if (x == null || x == "") {
		alert("File Lampiran Tidak Boleh Kosong");
		return false;
	}
	var ft = /(\.jpg|\.jpeg|\.png|\.doc|\.docx|\.xls|\.xlsx|\.ppt|\.pptx|\.pdf)$/i;
	if (!x.match(ft)) {
		alert("Ekstensi Lampiran Tidak Diijinkan");
		return false;
	}
  }
</script>