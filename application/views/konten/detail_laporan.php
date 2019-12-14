<html lang="en">

<div class="container">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Buat Laporan</title>
    </head>
    <body>
    <div class="detaillaporan">
        <p>Detail Laporan</p>
    <hr>
    </div>

    <!-- <form action="" method="post"> -->
    <div class="laporanterakhir">
            Laporan/Komentar Terakhir<br>
            <hr>
            <?php foreach($laporan as $item_laporan):?>
                <p class="isi"><?php echo $item_laporan["isi_laporan"]; ?></p>
                <p class="waktu"><?php echo $item_laporan["waktu_laporan"];?></p>
                
            <?php endforeach;?>

    <!-- </form> -->
    </div>
</div>

</html>