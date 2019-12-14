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
<div id="pilih">Detail Laporan atau Komentar<br> </div>
<hr>

<?php
    foreach($komentar as $datanya) {
        echo $datanya->isi;
        echo "<br>";
        echo $datanya->tanggal;
        echo "<br>";
}
?>

</body>
</html>