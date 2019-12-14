<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets/style_detail.css') ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <title>ITERA LAPOR!</title>
</head>

<body>

    <body>
        <div class="container">
            <div>
                <h1 class="judul">ITERA LAPOR!</h1>
            </div>
            <div>
                <p class="laporan">Detail Laporan/Komentar</p>
            </div>
            <hr>
            <p>Nama Pelapor : <?= $result['nama'] ?></p>
            <p><?= $result['isi_comm'] ?></p>
            <p>Lampiran :  </p>
            <a href="<?= base_url('assets/file/') . $result['lampiran']?>"><?=$result['lampiran']?></a>
            <?= base_url('assets/file/') . $result['lampiran']?>
            <br><br>
            <div>
                <tr class="jarak">
                    <td class="time">Waktu : <?= $result['timestamp']; ?></td>
                    <td class="aspek">Aspek : <?= $result['aspek']; ?></td>
                   
                </tr>
                <hr>
            </div>

        </div>
    </body>

</html>