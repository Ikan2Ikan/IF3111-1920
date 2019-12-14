<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/pLaporan.css" media="screen">

    <title>Document</title>
</head>

<body>
    <div class="page">
        <h1 id="judulPage">SIMPLE LAPOR!</h1>
        <div class="container">
            <p>Detail Laporan/Komentar</p>
            <hr>
            <?php
            foreach ($dataLaporan as $data) :
                $IdKomentar = $data['id_laporan'];
                $namaUser = $data['nama'];
                $pesan = $data['komentar'];
                $waktu = $data['waktu'];
                $lampiran = $data['lampiran'];
                $kategori = $data['kategori'];

                ?>
                <div class="isiKomentar">
                    <p><?php echo $pesan ?></p>
                    <p>Lampiran : <?php echo $lampiran ?></p>&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="clearfix">
                        <div class="leftFloat">
                            <p>Waktu: <?php echo $waktu ?>&nbsp;&nbsp;&nbsp;&nbsp;</p>
                            <p>Aspek: <?php echo $kategori ?>&nbsp;&nbsp;&nbsp;&nbsp;</p>
                        </div>
                        <div class="rightFloat">
                            <p><a href="<?php echo site_url('Laporan/edit/') . $IdKomentar ?>">Edit </a>| <a href="<?php echo site_url('Laporan/hapus/') . $IdKomentar ?>">Hapus Laporan/Komentar</a></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <hr>
        </div>
    </div>
</body>

</html>