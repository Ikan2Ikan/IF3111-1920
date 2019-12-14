<fieldset>
<html>
    <head>
        <title>SIMPLE LAPOR</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    </head>
    <body>
        <div class = "wrap">
            <div class = "header">
                <br>
                <h1> SIMPLE LAPOR!</h1>
                <form action="<?php echo base_url('index.php/laporan/cari')?>" method="POST" enctype="multipart/form-data">
                    <input type="text" name="cari">

                    <button type="submit" name="cari laporan" class="btn btn-primary">Cari</button>
                </form>

                <a href="<?php echo base_url('index.php/laporan/buatLaporan/') ?>"><button type="" name="create" class="btn btn-primary">Buat Laporan/Komentar</button></a>
                <br>
                <br>
            </div>
            <div class = "konten">
                <br>
                laporan/komentar terakhir<br>
                <hr>
                <?php
                
                foreach($laporan as $data){
                    echo "anonim<br>";
                    $data->laporan=substr($data->laporan,0,30);
                    echo $data->laporan."<br>";

                    foreach($aspek as $dataAspek)
                    if($data->id_aspek == $dataAspek->id){
                        echo $dataAspek->nama."<br><br>";
                    }
                    ?>

                    <?php $new_datetime = DateTime::createFromFormat ( "Y-m-d H:i:s", $data->updated_at );?>
                    
                    <p>Waktu: <?php echo $new_datetime->format('d-m-Y H:i'); ?>  <a  href="<?php echo base_url();?>index.php/laporan/detail/<?php echo $data->id;?>">Lihat Selengkapnya</a> </p>
                    
                    <hr>
                <?php
                } ?>
                <center><?php echo $this->pagination->create_links();?></center>
                <br>
            </div>
            <div class = "footer">
                &copy; 
                <br>
                Reza Octaviany . 14117062
                <br>
                Raras Franita . 14117063
            </div>
        </div>
    </body>
</html>

</fieldset>