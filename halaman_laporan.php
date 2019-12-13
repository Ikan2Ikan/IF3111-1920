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
<br><br><br>
<center >

<form method="POST" onSubmit="return validasi()" action="<?php echo base_url('Halaman_utama/ProsesDataLapor') ?>" enctype="multipart/form-data">
<textarea type="text" name="komentar" size = "100px" autofocus autocomplete="off" cols="30" rows="7" id="texts"  placeholder="ketik laporan anda......."  ></textarea>
</center>
<br>
<div id="pilih">

<select name="kategori">
    <option value="Kampus">Pilih Aspek Komentar</option>
    <option value="Dosen">Dosen</option>
    <option value="Infrastruktu">Infrastruktur</option>
    <option value="Mahasiswa">Mahasiswa</option>
    <option value="Staff">Staffr</option>
    <option value="Pengajaran">Pengajaranr</option>
</select>
<br><br>
<input type="file" name="file_file">
</div>

<div id="tombol">
<button type="submit" name="submit">Buat Laporan</button>
</div>
</center>
</form>

<script>
   function validasi() {
    var text = document.getElementById("texts").value;
    var banyak_kata = document.getElementById('texts').value
    banyak_kata = banyak_kata.split(" ")
   
    if (text != "" && banyak_kata.length>=20){
      return true;
    }
    else if(text == ""){
      alert('Kolom Text Harus diisi!');
      return false;
    }else if(banyak_kata.length<20){
      alert('Jumlah Text Harus lebih dari 20!');
      return false;
    }

  }

</script>