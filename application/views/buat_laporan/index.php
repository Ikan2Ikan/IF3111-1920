<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $judul; ?></title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=1.1">
</head>
<body>
<p class="judul">SIMPLE LAPOR!</p>
    <div class="lapor">
    <p class="subjudul">Buat Laporan / Komentar</p>
    <hr>
      <?= validation_errors();  ?>
        <form action="" method="post" enctype="multipart/form-data">
            <br>
                <textarea name="laporan" ></textarea><br>
            <br>
                <select id="aspek" name="aspek">
                    <option value="Dosen">Dosen</option>
                    <option value="Staff">Staff</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Infrastruktur">Infrastruktur</option>
                    <option value="Pengajaran">Pengajaran</option>
                </select><br>
            
            <br>
                <input class="file" type="file" name="myFile"><br>
            <br>
                <input class="submit submit1" type="submit" value="Buat LAPOR!">
            <br>
            <hr >
        </form>
    </div>
    
</body>
</html>
