<html>
    <head>
        <title>SIMPLE LAPOR</title>
    </head>
    <body>
    <h1>SIMPLE LAPOR!</h1>

    <?php
        $conn=mysqli_connect ("localhost","root","") or die ("koneksi gagal");
        mysqli_select_db($conn,"lapor_db");

        $user_id = 1;
        $aspek=$_POST ['aspek'];

        //FUNGSI UPLOAD FOTO
        function uploadFile($file){
            // $currentDir = getcwd();
            $uploadPath = basename($file['name']);
            $up = move_uploaded_file($file['tmp_name'], $uploadPath);
            return basename($uploadPath);
        }
        $file= uploadFile($_FILES['fileLapor']);

        $query = "INSERT INTO `laporan`(`id_laporan`, `id_user`, `laporan`, `id_aspek`, `file`) VALUES ('','$user_id',''laporan','$aspek','$file')";
        $hasil = mysqli_query($conn,$query);

        echo "Laporan berhasil dibuat";
    ?>  
    </body>
</html>