<html>
    <head>
        <title>SIMPLE LAPOR</title>
    </head>
    <body>
    <h1>SIMPLE LAPOR!</h1>
    
    <form action="<?php echo base_url('index.php/laporan/cari')?>" method="POST" enctype="multipart/form-data">
        <input type="text" name="cari">

        <button type="submit" name="cari laporan" class="btn btn-primary">Cari</button>

    </form>
    
    <?php
    foreach($laporan as $data){
        echo "anonim<br>";
        echo $data->laporan."<br>";
        
        foreach($aspek as $dataAspek)
        if($data->id_aspek == $dataAspek->id){
            echo $dataAspek->nama."<br><br>";
        }
        ?><a href="https://www.w3schools.com">Lihat Selengkapnya</a>
        <br>
        <br>
    <?php
    }
    
    ?>

    </body>
</html>