<!DOCTYPE html>
<html lang="en">

  <head>
      <title>Layanan Aspirasi Mahasiswa Teknik Informatika ITERA</title>
      <link rel="stylesheet" type="text/css" href="css/cssH1.css">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
    <?php  
    include "koneksi.php";
    $sql = "SELECT * FROM laporan ORDER BY id_lapor DESC";
    $query = mysqli_query($koneksi, $sql) or die (mysqli_error());
?>

    <div id="header">
        <h1 align="center">Layanan Aspirasi Mahasiswa Teknik Informatika ITERA</h1> 
      
        <!-- Cari Laporan -->
        <form action="" method="POST">
            <input type="text" name="text" placeholder="Cari.." class="cari">
                <button class="button">
                    <img src="img/search.png" width="12px">Cari
                </button>
      
        <!-- Buat Laporan/Komentar -->
            <p hr>
                <a href="halaman2.php">Buat Laporan/Komentar</a> 
                <a href="halaman2.php">
                <img src="img/plus.png" width="10px"></a>
            </p>
        </form>

    <!-- Laporan/Komentar Terakhir -->
        <h4>Laporan/Komentar Terakhir</h4>
        <hr>
        <?php while($data = mysqli_fetch_array($query)){
            $id = $data['id_lapor'];
            $isi = $data['isi_lapor'];
            $jenis = $data['jenis_lapor'];
            $tgl = $data['tgl_lapor'];
            $file = $data['file']; 
        ?><div class="konten">
            <p><?php echo $isi; ?></p>
            <h4>Lampiran: <?php echo $file ?><span><?php echo $tgl?> &emsp; <a href="halaman3.php?detail=<?php echo $id; ?>">Lihat Selengkapnya></a></span></h4>
            <hr>

        </div>
        <?php } ?>
        </div>

  </body>
</html>
