<?php 

include "koneksi.php";

$kom = $_POST['komentar'];
$jenis = $_POST['aspek_komentar'];

date_default_timezone_set('Asia/Jakarta');
$tgl= date ("Y-m-d H:i:s");
$berkas = $_FILES['file']['name'];
$ekstensi_diperbolehkan = array('png','jpg');
$x = explode('.', $berkas);
$ekstensi = strtolower(end($x));
$ukuran_file = $_FILES['file']['size'];
$tipe_file = $_FILES['file']['type'];
$tmp_file = $_FILES['file']['tmp_name'];
$path = "img/".$berkas;

if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    if($ukuran_file < 1044070){  
move_uploaded_file($tmp_file, $path);
$sql = "INSERT INTO laporan (isi_lapor,jenis_lapor,tgl_lapor,file) VALUES('$kom','$jenis','$tgl','$berkas')";
$query = mysqli_query($koneksi, $sql) or die (mysqli_error($koneksi));

if($query){
 echo "Data berhasil ditambahkan";

}else {
 echo "Error: ".$sql."<br>".mysqli_error($koneksi);
} 
}else{
   echo 'UKURAN FILE TERLALU BESAR';
}}else{
 echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
}

 ?>
 <meta http-equiv="refresh" content="0;URL=index.php" />