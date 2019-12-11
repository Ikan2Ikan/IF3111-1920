<html>
    <head>
        <title>SIMPLE LAPOR</title>
    </head>
    <body>
    <h1>SIMPLE LAPOR!</h1>

    <?php
        $conn=mysqli_connect ("localhost","root","") or die ("koneksi gagal");
        mysqli_select_db($conn,"lapordb");

        $aspek= $_POST['aspek'];
        $laporan = $_POST['laporan'];

        //FUNGSI UPLOAD FOTO
        function uploadFile($file){
            // $currentDir = getcwd();
            $uploadPath = basename($file['name']);
            $up = move_uploaded_file($file['tmp_name'], $uploadPath);
            return basename($uploadPath);
        }
        $file= uploadFile($_FILES['fileLapor']);
        

        $query = "INSERT INTO `laporan`(`laporan`, `id_aspek`, `file`) VALUES ('$laporan','$aspek','$file')";
        $hasil = mysqli_query($conn,$query);
 
        echo "Laporan berhasil dibuat";
    ?>
    </body>
</html>