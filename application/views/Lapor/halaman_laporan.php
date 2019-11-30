<?php if($this->session->flashdata('login_berhasil')){
	echo "
		<script>
		alert('anda berhasil login');
		</script>
	";
}
?>

<br><br><br><br>
<?php if(!$this->session->userdata('email')==null) {
	echo $this->session->userdata('email');
}else{
	echo "<center >";
	echo "anda belum login";
	echo "</center >";
}

?>

<center >
<form method="post" action="">
<textarea type="text" name="komentar" size = "100px" autofocus autocomplete="off" cols="30" rows="7" id="texts"  placeholder="ketik laporan anda......."  required ></textarea>
</center>

<div id="pilih">

<select name="kategori">
    <option value="pemerintah">Pilih Kategori</option>
    <option value="administrasi">Amdinistrasi</option>
    <option value="iuran">Iuran</option>
</select>
<br><br>
<input type="file" name="file">
</div>

<div id="tombol">
<button type="submit" name="submit">Buat Laporan</button>
</div>
</form>
</center>

