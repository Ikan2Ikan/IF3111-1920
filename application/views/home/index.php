
<!doctype html> 
 
 <html lang="en">
    <head> 
       <meta charset="utf-8">
       <title><?php echo $judul; ?> </title>
       
     <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=1.1">
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
 <body> 
<p class="judul">SIMPLE LAPOR!</p>
 <div class="lapor">
    <form class="pencarian">
      <input class="search" type="text"  required>	
      
      <!-- <input class="button" type="button" value="Cari">	 -->
      <button class="button" type="button"><i class="material-icons">search</i>Cari</button>	
    </form>
    <a class="buat" href="<?php base_url(); ?>buat">Buat Laporan / Komentar </a>
    
    <p class="subjudul">Laporan/Komentar Terakhir</p>
    <hr>
    <br>
    <br>
      <div class="arsip"> 
        <?php foreach ($home as $hm )  :?>
         <?php $id = $hm['id_lapor']; ?>
          <p><?= $hm['id_lapor']; ?> </p>
          <!-- <p><?= $hm['laporan']; ?> </p> -->
          <p><?php echo substr($hm['laporan'], 0, 30); ?></p>
	        <!-- <p><a href="<?php echo site_url('news/'.$hm['laporan']); ?>">Read More</a></p> -->
          <p><?= $hm['waktu']; ?> </p>
          <!-- <a class="detail" href="<?php base_url();?>detail" >Lihat Selengkapnya </a> <br> -->
          <!-- <a class="detail" href='detail?detail_id=<$id '>Lihat Selengkapnya</a><br> -->
          <?php
          echo "<tr>

          <a class='detail' href='detail?detail_id=$id' class='btn btn-warning'>Lihat Selengkapnya</a>		

          </tr>";
        ?>
        <?php endforeach; ?>
      </div>
  </div>
</body>
</html>






