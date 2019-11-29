<html lang="en">

<div class="container">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Buat Laporan</title>
    </head>
    <body>
    <div class="judulbuatlaporan">
        <p>Buat Laporan/Komentar</p>
    <hr>
    </div>

    
    <div class="buatlaporan">
       <textarea name="kolomlaporan" id="kolom-laporan" cols="121" rows="10" placeholder="Laporan/Komentar"></textarea>
    </div>

    <div class="dropdownbuatlaporan">
        <select name="dropdownbuat" id="dropdown-buat">
        <option value="pilihaspek"selected>Pilih Aspek Laporan/Komentar</option>
        <option value="laporan">Laporan</option>
        <option value="komentar">Komentar</option>
        </select>
    </div>

    <div class="lampiran">
    <input type="file" src="file"name="namalampiran">
    </div>

    <div class="buttonlapor">
    <button type="submit" name="namabuttonlapor" value="nilaibuttonlapor">Buat Lapor!</button>
    </div>

</div>
</body>
</html>