<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Halaman utama</title>
        <link rel="stylesheet" href="aset/style.css">
    </head>

    <body>
        <h1>SIMPLE LAPOR</h1>
        
        <form>
            <input class="search" type="text" placeholder="">   
            <input class="button" type="button" value="Cari">       
        
        <p>
          <a href="<?= base_url(); ?>Buatform">Buat Laporan/Komentar <button class="button2">'</button> </a>
         </p>
     </form>

    </body>
</html>