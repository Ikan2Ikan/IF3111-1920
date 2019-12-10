
<center >
<form method="post" action="">
<input type="hidden" name="id" value="<?php echo $lapor['komentar_id'] ?>">
<textarea type="text" name="komentar" size = "100px" autofocus autocomplete="off" cols="30" rows="7" id="texts"  required ><?php echo $lapor['komentar'] ?></textarea>
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
<button type="submit" name="submit">Ubah Laporan</button>
</div>
</form>
</center>

