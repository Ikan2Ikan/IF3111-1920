<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <title>ITERA LAPOR!</title>
</head>

<body>
    <div class="container">
        <div>
            <h1 class="judul">ITERA LAPOR!</h1>
            <h3 class="judul">Layanan Aspirasi dan Pengaduan Online Rakyat</h3>
        </div>

        <div>
            <form>
                <input class="search" type="text" placeholder="" required>
                <input class="button" type="button" value="Cari">
            </form>
        </div>

        <div>
            <p class="lapor"><a href="<?= base_url('home/buat') ?>">Buat Laporan/Komentar</a></p>
        </div>

        <div>
            <p class="laporan">Laporan/Komentar Terakhir</p>
        </div>
        <!-- ahsjskslslsjsjjs -->
        <hr>
        <?php foreach ($result as $data) : ?>
            <div class="itm-title">
           <p> <a href="<?= base_url(); ?>home/delete/<?= $data['id_comm']?>">Hapus Komentar</a></p>
           <p> <a href="<?= base_url(); ?>home/ubah/<?= $data['id_comm']?>">Ubah Komentar</a></p>
                <p><?= $data['nama'] ?></p>
                <p><?= $data['isi_comm']; ?></p>
            </div>
            <div>
                <tr class="jarak">
                    <td class="lamp">Lampiran : <?= $data['lampiran']; ?></td>
                    <td class="time">Waktu :<?= $data['timestamp']; ?></td>
                    <td class="lihat">
                        <a href="<?= base_url('home/detail/') . $data['id_comm'] ?>">Lihat selengkapnya &raquo;</a>
                    </td>
                </tr>
                <hr>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>