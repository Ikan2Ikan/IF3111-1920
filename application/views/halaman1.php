<!DOCTYPE html>
<html lang="en">
<head>
    <title>Layanan Aspirasi Mahasiswa Teknik Informatika ITERA</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>fitur/css/cssH1.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  
  <div id="header">
    <h1 align="center">Layanan Aspirasi Mahasiswa Teknik Informatika ITERA</h1> 
      <form action="" method="POST">
        <input type="text" name="text" placeholder="Cari.." class="cari">
        <button class="button"><img src="<?php echo base_url() ?>fitur/img/search.png" width="12px">Cari</button>
		  <p>Buat Laporan/Komentar <a href="<?php base_url('tubes/halaman2');?>"><img src="<?php echo base_url() ?>fitur/img/plus.png" width="10px"></img></a></p>
      </form>
    <div class="konten1">
      
      <h4>Laporan/Komentar Terakhir</h4>
      <hr>
      <p>
        <?php 
          foreach ($lapor as $data) { ?>
           <?php echo $data->isi_lapor; ?>
            <br><br>
            <h4>Lampiran : //kodeuntukgambar</h4>
            <span> <?php echo $data->tgl_lapor; ?>
            &emsp;&emsp; a href="">Lihat Selengkapnya></a>
            </span>
            <hr>
        <?php  }
        ?>
      </p><br>
  </div>
  
</body>
</html>
