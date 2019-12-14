<fieldset>
<html>
    <head>
        <title>SIMPLE LAPOR</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    </head>
    <div id="container">
    <body>
        
        
       <div class="h1"><center> <h1>SIMPLE LAPOR!</h1> </center> </div> <br>
       <div class="p"> <center> Layanan Aspirasi dan Pengaduan Online Rakyat </center> </div>
       <div class="p1"><center> Sampaikan Laporan Langsung kepada instansi Pemerintah Berwenang </center></div>
    </div>
    
    <form action="<?php echo base_url('index.php/laporan/create')?>" method="POST" enctype="multipart/form-data">
        <textarea id="laporan" name="laporan" rows="20" cols="80" placeholder="Laporan/Komentar"></textarea>
        
        <br>
        <select name="id_aspek" style="width: 150px">
        <?php
            foreach($aspek as $value){?>
                <option value="<?php echo $value->id?>"><?php echo $value->nama ?></option>
            <?php }
        ?>
        </select>
        <br>
        <br>

        <input type="file" name="fileLapor" id="fileLapor">
        <br>
        <br>
        <button type="submit" name="buatLapor" class="btn btn-primary">Buat LAPOR!</button>

    </form>
    
</html>
            </fieldset>