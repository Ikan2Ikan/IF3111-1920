<?php/* include 'koneksi.php'; */?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Detail Laporan</title>
    <link rel="stylesheet" type="text/css" href="styledl.css">
  </head>
<body>
      <p><center><h2>SIMPLE LAPOR!</h2></center></p>
        <div class="judul">
            <p><class="subjudul">Detail Laporan / Komentar</p>
              <hr>
    <p>Nama Pelapor : </p>
      <br>
      <br>
        <div class="isi">
          <?php foreach ($laporan as $detail):
          ?>
            <?php
              echo $detail['kolom_komentar']; ?>
              <br>
            <?php endforeach; ?>
        </div>
<br>
    <p class="arsip">Lampiran:</p>
    <img src="" width="200" height="200">
    <br>
    <br>
    <br>
<div class="waktu2">

    <?php
    echo "<div style=text-align:right;> Hapus Laporan / Komentar </div>";
    ?>

</div>
</div>

<hr>
<br>

</body>
</html>
