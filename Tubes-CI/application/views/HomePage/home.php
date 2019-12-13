<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Halaman utama</title>
        <link rel="stylesheet" href="HomeDesign.php">
    </head>

    <body>
        <form>
            <input class="search" type="text" placeholder="">   
            <input class="button" type="button" value="Cari">       
        
        <p>
          <a href="<?= base_url(); ?>Buatform">Buat Laporan/Komentar <button class="button2">'</button> </a>
         </p>
     </form>
     <div class="tampil">
      Laporan/Komentar Terakhir

     </div>
    </body>
</html>