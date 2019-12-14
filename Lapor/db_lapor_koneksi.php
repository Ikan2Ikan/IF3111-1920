<?php
$servername = "localhost";
$database = "db_lapor";
$username = "root";
$password = "";

mysqli_connect($servername, $username, $password);
mysqli_select_db($database) or die("Koneksi ke database GAGAL");
?>