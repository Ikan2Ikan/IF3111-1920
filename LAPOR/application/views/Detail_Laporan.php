<?php/* include 'koneksi.php'; */?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="styledl.css">
  </head>
<body>
      <p><center><h2>SIMPLE LAPOR!</h2></center></p>
        <div class="judul">
            <p><class="subjudul">Detail Laporan / Komentar</p>
              <hr>
      <br>
      <br>
          <?php echo $laporan['kolom_komentar'];?>
          <br>
    <div class="arsip">
      <span>Lampiran:</span>
    <img src="" width="200  " height="200">
    <br>
    <br>
    <br>
    <span>Aspek : <?php echo $laporan['aspek_pelaporan'];?></span><br>
    <span>Waktu : <?php echo $laporan['waktu']; ?></span>
    <?php $id= $laporan['id_laporan']; ?>
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
