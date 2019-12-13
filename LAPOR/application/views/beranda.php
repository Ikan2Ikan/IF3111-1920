<?php/* include 'koneksi.php'; */?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/master.css" type="text/css">
    <title>LAPOR!</title>
  </head>
  <body>
    <h1><center>Layanan Aspirasi dan Pengaduan Mahasiswa ITERA</center></h1>
    <div class="cari">
      <form action="Cari.php" method="get">
        <center><input type="text" name="cari">
        <input class="button" type="button" value="Cari"></center><br>
      </form>
    </div>
    <div class="ketiklapor">
        <a href="NAMA KETIK LAPOR"><center>Buat Laporan/Komentar</center></a>
    </div>
    <div class="recentlaporan">
    <h3>Laporan/Komentar Terakhir</h3>
    <hr>
      <ul>
        <?php foreach ($laporan as $recent): ?>
          <p><?php echo $recent['kolom_komentar']; ?></p>
          <br>
          <div align="left">Lampiran : <?php echo $recent['lampiran']; ?></div>
          <div align="right">Waktu : <?php echo $recent['waktu']; ?></div>
          <hr>
        <?php endforeach; ?>
      </ul>
    </div>
  </body>
</html>
