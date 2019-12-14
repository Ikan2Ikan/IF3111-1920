<html>

<head>
    <script src="assets/js/kode.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
    <title>Buat Laporan!</title>

</head>

<body>
    <center>
        <h1> LAPORAN <br> </h1>
    </center>
    <div class="border">
        <div class="poskiri"">Detail Laporan atau Komentar<div> 
        </div>
<hr><br><br>

<?php
foreach ($komentar as $datanya) {
    echo $datanya->isi;
    echo "<br><br><br>";
    ?>
    <span class=" poskiri">Lampiran: <?= $datanya->file; ?>
            <br><br><br> Waktu : <?= $datanya->tanggal; ?>
            <span class="spasi">Aspek: <?= $datanya->type; ?></span>
            </span>
            <span class="poskanan"><a onclick=" hapus()" href="<?php echo base_url('auth/hapus/') . $datanya->id ?>">Hapus Komentar <strong>x</strong></a>
                <a class="spasi" href="<?php echo base_url('auth/edit/') . $datanya->id ?>">Edit Komentar</a></span>
        <?php
        }
        ?>
        <hr>
        </div>
</body>

</html>