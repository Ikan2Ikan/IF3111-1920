
<!doctype html> 
 
 <html lang="en">
    <head> 
       <meta charset="utf-8">
       <title><?php echo $judul; ?> </title>
       
     <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=1.1">
     
    </head>
 <body> 
<p class="judul">SIMPLE LAPOR!</p>
 <div class="lapor">


    <form class="pencarian">
     <?php echo form_open('home/search') ?>
        <input class="search" type="text" name="keyword">	
        <button class="button cari" type="submit"> Cari </button>	 
      <?php echo form_close() ?>  
    </form>

 

    <a class="buat" href="<?php base_url(); ?>buat">Buat Laporan / Komentar </a>
    <p class="subjudul">Laporan/Komentar Terakhir</p>
    <hr>
    <br>
    <br>
      
         <?php foreach ($home as $hm )  :?>
            <?php $id = $hm['id_lapor']; ?>
            <?php $now = date("Y-m-d H:i"); ?>
            
          <div class="arsip"> 
          <p><?php echo substr($hm['laporan'], 0, 450); ?></p>
          </div><br>
              <?php
                echo "<tr>
                
                <a class='more' href='detail?detail_id=$id'>Lihat Selengkapnya</a>		
              
                
                </tr>";
              
              ?>

              <div class="waktu">
                <?php 
                $date = new DateTime($hm['waktu']);
                echo 'Waktu : ';
                echo $date->format('d-m-Y H:i'); // 21-01-2017 05:13:03
                ?>
              </div> 

              <div class="lampir">
                <?php
                echo 'Lampiran:'; 
                echo  $hm['lampiran']; 
                ?>
              </div>

        <br>
        <hr>
        <br>
        <?php endforeach; ?>
        <img class="gambar" src="<?php echo base_url(); ?>assets/icon/menu.png">
        <img class="gambar" src="<?php echo base_url(); ?>assets/icon/menu.png">
        <br>
     
  </div>
  
</body>
</html>






