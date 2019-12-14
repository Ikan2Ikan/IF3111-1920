<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Lapor!</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/v_home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  
</head>

<body>
    <a href="<?php echo site_url('home')?>">
    <h1>SIMPLE LAPOR!</h1></a>

    <form action="<?php echo site_url('home/search')?>" method="POST">
        <input type="text" name="cari" placeholder=" Cari berdasarkan: Nama/ Judul / Aspek">
        <button type="submit"><i class="fa fa-search"> CARI</i></button>
      </form>
      <br>
      <a style="text-align: center;" href="<?php echo site_url('home/lapor') ?>">Buat Laporan/Komentar
        <i class="fa fa-plus-square"></i>
      </a><br><br><br>
      <label class="lampiran">Lampiran/Komentar Terakhir</label>
  <hr>
      
         <?php foreach ($lapor as $hm )  :?>
            <?php $id = $hm['id']; ?>
          <p align="left"> <i class="fa fa-user-circle"></i> Nama: <?= $hm['nama'] ?> &nbsp &nbsp
          <i class="fa fa-pencil"></i> Judul: <?= $hm['judul'] ?></p>
            
          
          <p align="justify">
            <?php echo substr($hm['laporan'], 0, 450); ?></p>
          
          <p align="left">
            <i class="fa fa-folder"></i>
              <?php
                echo 'Lampiran:'; 
                echo  $hm['file']; 
                ?>

              
              <span>
                <i class="fa fa-calendar"></i>
                Waktu:
                <?= 
                $hm['waktu'];
                ?>

                ||
                
                <?php
                echo "<tr>
                <a href='detail?detail_id=$id'>Lihat Selengkapnya  &nbsp</a>
                </tr>";?>
                <i class="fa fa-caret-square-o-right"></i></span>
              </p>

        
        <hr>
        
        <?php endforeach; ?>  
</body>
</html>






