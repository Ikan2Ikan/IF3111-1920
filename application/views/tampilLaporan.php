<html>
    <head>
        <title>SIMPLE LAPOR</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    </head>
    <body>
    <h1>SIMPLE LAPOR!</h1>
    
    
    <form action="<?php echo base_url('index.php/laporan/cari')?>" method="POST" enctype="multipart/form-data">
        <input type="text" name="cari">

        <button type="submit" name="cari laporan" class="btn btn-primary">Cari</button>

    </form>
    
    <?php
    echo "laporan atau komentar terakhir<br>";

    foreach($laporan as $data){
        echo "anonim<br>";
        $data->laporan=substr($data->laporan,0,30);
        echo $data->laporan."<br>";

        foreach($aspek as $dataAspek)
        if($data->id_aspek == $dataAspek->id){
            echo $dataAspek->nama."<br><br>";
        }
        ?>

        <a  href="<?php echo base_url();?>index.php/laporan/detail/<?php echo $data->id;?>">Lihat Selengkapnya</a>
        <br>
        <br>
    <?php
    }
    ?>

    </body>
</html>