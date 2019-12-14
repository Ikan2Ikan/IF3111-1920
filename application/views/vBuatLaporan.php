<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/pageBuat.css" media="screen">

    <title>Document</title>
</head>

<body>
    <div>
        <h1 id="judulPage">SIMPLE LAPOR!</h1>
        <div class="container">
            <p>Buat laporan/komentar</p>
            <hr>
            <form action="<?= base_url('Laporan/input_laporan'); ?>" method="POST" enctype="multipart/form-data">
                <textarea name="comment" placeholder="Laporan/Komentar"></textarea>
                <select style="border: 1px solid black;color: black;" name="pilih">
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Dosen">Dosen</option>
                    <option value="Staff">Staff</option>
                    <option value="Satpam">Satpam</option>
                    <option value="OB">OB</option>
                    <option value="Asisten">Asisten</option>
                </select><br><br>
                <input type="file" name="myFile" class="input-file">
                <button type="submit" style=" border: 1px solid black;color: black;  height: 40px;width: 100px;">Buat LAPOR!</button>
            </form>
            <br><br><br>
            <hr>
        </div>
    </div>
</body>

</html>