<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <title>Buat Laporan</title>
</head>

<body>
    <div class="judul">
        <h2>SIMPLE LAPOR!</h2>
    </div>
    <div class="subjudul">
        <p>Buat laporan/komentar</p>
        <hr>
    </div>

    <div class="formulir">
        <form method="POST" action="" enctype="multipart/form-data">
            <textarea name="laporan" rows="16" cols="130"></textarea><br>
            <select class="" name="aspek_pelapor">
                <option value="1"> Dosen </option>
                <option value="2"> Mahasiswa </option>
                <option value="3"> Staff </option>
                <option value="4"> Infrastruktur </option>
                <option value="5"> Pengajaran </option>
            </select><br>
            <input type="file" name="upload" value=""><br>
            <div class="tombol_lapor">
                <button type="submit" name="buat_laporan"> Buat LAPOR! </button>
            </div>
        </form>
    </div>

</body>