<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/home.css" media="screen">
    <title>Document</title>
</head>

<body>

    <h1 id="judul">SIMPLE LAPOR!</h1>
    <div class="containerAtas">
        <form action="search.php" method="GET">
            <input type="text" name="query" placeholder=" search ....." />
            <button id="button1" type="submit">Cari</button>
        </form>
    </div>
    <div class="buatLaporan">
        <button id="button2" onclick="location.href='<?php echo base_url(); ?>buatLaporan'">Buat</button>
    </div>

    <div class="cKomentar">
        <h4>Laporan/Komentar Terakhir</h4>
        <hr>

        <?php
        foreach ($dataLaporan as $data) :
            $IdKomentar = $data['id_laporan'];
            $namaUser = $data['nama'];
            $pesan = $data['komentar'];
            $waktu = $data['waktu'];
            $lampiran = $data['lampiran'];

            ?>
            <div class="komentar">
                <!-- <h3>Angelo</h3> -->
                <h3 id="empty"><?php echo $namaUser ?></h3>
                <p><?php echo $pesan ?></p>
                <div class="rightFloat">
                    <tr>
                        <td>Lampiran: <?php echo $lampiran ?></td>
                    </tr>
                    <div style="float: right;">
                        Waktu : <?php echo $waktu ?> &nbsp;
                        <a href="<?php echo site_url('Laporan/detail/') . $IdKomentar ?>">Lihat Selengkapnya ></a>
                    </div>
                </div>
                <hr>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>