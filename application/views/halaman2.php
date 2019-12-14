<!DOCTYPE html>
<html lang="en">
<head>
<title>Layanan Aspirasi Mahasiswa Teknik Informatika ITERA</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>fitur/css/static-header.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<header>
  <form action="<?php echo base_url().'lapor/tambah_aksi' ?>" method="POST">
<div class="header">
  <h1>Layanan Aspirasi Mahasiswa Teknik Informatika ITERA</h1>
</div>
<br><br>
</header>
<div class="konten">
  <a > Buat Lapor/Komentar </a>
  <hr>
   <textarea  name="komentar" id="message" rows="20" cols="121"></textarea> 
   <br><br>
   <select   name="aspek_komentar">
                <option >Pilih Aspek Komentar</option>
                <option value="Ruangan">Ruangan</option>
                <option value="Matakuliah">Matakuliah</option>
                <option value="Nilai">Nilai</option>
                <option value="Dosen">Dosen</option>
                
            </select>
            <br>
    <input type="file" name="file"  class="konten">
  </div>
  <footer>
    <input type="submit" value="BUAT LAPOR!">
  </footer>
  </form>

</body>
</html>
