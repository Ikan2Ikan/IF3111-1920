<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $judul; ?></title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=1.1">
</head>
<body>
<p class="judul">SIMPLE LAPOR!</p>
    <div class="lapor">
    <p class="subjudul">Detail Laporan / Komentar</p>
    <hr>
<br>
<div class="arsip">
    <?php foreach ($detail as $hm )  :?>
        <p><?= $hm['laporan']; ?> </p>
    <?php endforeach; ?>
 </div>
<br>
    <p class="">Lampiran:</p>
<br>
    <img src="assets/file/'.$file.'" width="500" height="500">
<br>
<br>
<br>
<br>
<div class="waktu2">
    <?php 
    $date = new DateTime($hm['waktu']);
    echo 'Waktu : ';
    echo $date->format('d-m-Y H:i'); // 21-01-2017 05:13:03
    ?>
</div> 
<div class="aspek">
    <?php
    echo 'Aspek : '; 
    echo  $hm['aspek']; 
    ?>
</div>
<hr >
    </div>
    
</body>
</html>
