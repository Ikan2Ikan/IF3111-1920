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
    <?php foreach ($komentar as $komen){?>
    <form action="<?php echo base_url('index.php/laporan/update/').$komen->id_laporan; ?>" method="post" enctype="multipart/form-data">
        <div class="buatlaporan">
        <textarea name="kolomlaporan" id="kolom-laporan" cols="133" rows="20" placeholder="Laporan/Komentar"><?php echo $komen->isi_laporan;?></textarea>
        </div>

        <div class="dropdownbuatlaporan">
            <select name="dropdownbuat" id="dropdown-buat">
            <option value="Laporan" selected>Laporan</option>
            <option value="Komentar">Komentar</option>
            
            </select>
        </div>

        <div class="lampiran">
        <input type="file" src="file"name="namalampiran" id="id-lampiran">
        </div>

        <div class="buttonlapor">
        <button type="submit" name="namabuttonlapor" value="nilaibuttonlapor" id="button-lapor">Buat LAPOR!</button>
        </div>

    </form>
    <?php
    }
    ?>
</div>
</body>
</html>