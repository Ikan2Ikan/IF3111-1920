<!doctype html> 
 
 <html lang="en">
    <head> 
       <meta charset="utf-8">
       <title><?php echo $judul; ?> </title>
       
     
    </head>
 <body> 
<p class="judul">SIMPLE LAPOR!</p>
 <div class="lapor">


    <form class="pencarian" onSubmit="return pencarian(this)" action="<?php echo base_url('cari')?>" method="post">

        <input class="search" type="text" name="keyword" placeholder="search" autocomplete="off" autofocus>	
       
        <input class="button" type="submit" name="submit"  placeholder="cari" value="Cari">	 
       
    </form>

    <a class="buat" href="<?php base_url(); ?>buat">Buat Laporan / Komentar &nbsp<img src="assets/icon/tambah.png" height="13px"></a>
    <p class="subjudul">Laporan/Komentar Terakhir</p>
    <hr>
    <br>
    <br>
          
          

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


     
  </div>
  
</body>
</html>






