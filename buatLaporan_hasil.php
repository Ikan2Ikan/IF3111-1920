<html>
    <head>
        <title>SIMPLE LAPOR</title>
    </head>
    <body>
    <h1>SIMPLE LAPOR!</h1>

    <?php

        function uploadFile($file){
            // $currentDir = getcwd();
            $uploadPath = basename($file['name']);
            $up = move_uploaded_file($file['tmp_name'], $uploadPath);
            return basename($uploadPath);
        }
        $file= uploadFile($_FILES['fileLapor']);

        $aspek = $_POST ['aspek'];

        echo "Laporan berhasil dibuat";
    ?>

    <!-- <?php
    //FUNGSI UPLOAD FOTO
    

    $ID_Jur = $_POST["idJurusan"];
    $conn=mysqli_connect ("localhost","root","") or die ("koneksi gagal");
    mysqli_select_db($conn,"lapor_db");

    $query = "INSERT INTO `mahasiswa`(`NRP`, `Nama`, `Alamat`, `ID_Jur`) VALUES ('$nrp','$nama','$alamat','$ID_Jur')";
    $hasil = mysqli_query($conn,$query);
    ?> -->
        
    </body>
</html>