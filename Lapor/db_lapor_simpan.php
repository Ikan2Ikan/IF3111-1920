<?php
    $teks   = $_POST['teks'];
    $email   = $_POST['email'];
    $kategori   = $_POST['kategori'];
    $file   = $_POST['file'];
    $tanggal   = $_POST['tanggal'];
        

    include "db_lapor_koneksi.php";
    mysql_query("insert into lapor(teks, email, kategori, file, tanggal) values (
        '$teks',
        '$email',
        '$kategori',
        '$file',
        '$tanggal')") or die("<meta http-equv=refresh content=3;url=buatlapor.php>")
        echo "Berhasil <meta http-equiv=refresh content=3;url=buatlapor.php>";
?>