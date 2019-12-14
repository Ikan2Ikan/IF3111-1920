<br><br><br><br><br><br><br>
<center >
<form method="post" onSubmit="return validasi()">
<input type="hidden" name="id" value="<?php echo $lapor['komentar_id'] ?>">
<textarea type="text" name="komentar" size = "100px" autofocus autocomplete="off" cols="30" rows="7" id="texts"  ><?php echo $lapor['komentar'] ?></textarea>
</center>

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
<input type="file" name="file">
</div>

<div id="tombol">
<button type="submit" name="submit">Ubah Laporan</button>
</div>
</form>
</center>


<script>
   function validasi() {
    var text = document.getElementById("texts").value;
    if (text != ""){
      return true;
    }
    else{
      alert('Kolom Text Harus diisi!');
      return false;
    }
  }

</script>
