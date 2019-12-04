
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
  
        <input class="search" type="text" name="keyword">	
        <button class="button cari" type="submit" href='cari'> Cari </button>	 
       
    </form>
 

    <a class="buat" href="<?php base_url(); ?>buat">Buat Laporan / Komentar </a>
    <p class="subjudul">Laporan/Komentar Terakhir</p>
    <hr>
    <br>
    <br>
      
         <?php foreach ($cari as $hm )  :?>
          <tr>
				    <td><?php echo $hm['laporan']; ?></td>
				  </tr>
        <?php endforeach; ?>
        <img class="gambar" src="<?php echo base_url(); ?>assets/icon/menu.png">
        <img class="gambar" src="<?php echo base_url(); ?>assets/icon/menu.png">
        <br>
     
  </div>
  
</body>
</html>






