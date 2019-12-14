<?php
    include "koneksi.php";
    

    if(isset($_GET['hapus'])){
        $id = $_GET['hapus'];
        $sql = "DELETE FROM laporan WHERE id_lapor = $id";
        $query = mysqli_query($koneksi, $sql) or die (mysqli_error($koneksi));
    }



        header('Location: halaman1.php');
?>