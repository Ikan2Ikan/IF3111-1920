<?php

include "koneksi.php";

if(isset($_GET['ubah'])){
        $id = $_GET['ubah'];
        $update = true;
        $sql = "SELECT * FROM laporan WHERE id_lapor = $id";
        $query = mysqli_query($koneksi, $sql) or die (mysqli_error($koneksi));

        $data = mysqli_fetch_array($query);
        $id = $data['id_lapor'];
        $isi = $data['isi_lapor'];
        $jenis = $data['jenis_lapor'];
        $tgl = $data['tgl_lapor'];
        $file = $data['file'];
    }

    if(isset($_POST['update'])){
        $id = $_POST['id_lapor'];
        $isi = $_POST['isi_lapor'];
        $jenis = $_POST['jenis_lapor'];
        $tgl = $_POST['tgl_lapor'];
        $file = $_FILES['file']['name'];

        // $nim = $_POST['nim'];
        // $nama = $_POST['nama'];
        // $jk = $_POST['jk'];
        // $hp = $_POST['hp'];
        // $alamat = $_POST['alamat'];
        // $foto = $_FILES['foto']['name'];

        $sql = "UPDATE laporan SET isi_lapor='$isi', jenis_lapor='$jenis', tgl_lapor='$tgl',file='$file' WHERE id_lapor=$id";
        mysqli_query($mysqli, $sql);


        $_SESSION['message'] = "Data Berhasil di ubah";
        $_SESSION['msg_type'] = "success";

        header('Location: halaman1.php');
    }
?>