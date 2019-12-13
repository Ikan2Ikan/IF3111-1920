<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ghome.css" media="screen">
    <title>Document</title>
</head>

<body>
    <h1 id="judul">SIMPLE LAPOR!</h1>
    <div class="containerAtas">
        <form action="search.php" method="GET">
            <input type="text" name="query" />
            <button id="button1" type="submit">Cari</button>
        </form>
    </div>
    <div class="buatLaporan">
        <button id="button2" onclick="location.href='<?php echo base_url(); ?>buatLaporan'">Buat</button>
    </div>
    <div class="cKomentar">
        <h4>Laporan terakhir</h4>
        <hr>
        <div class="isiKomentar">
            <div class="komentar">
                <h3>Angelo</h3>
                <p>Assalamualaikum bapak / ibuk di kemenpanrb
                    Saya adalah lulusan profesi ners tahun 2012. Dan mewakili rekan rekan saya dan calon pelamar cpns 2019 yang saat ini merasa senasib dengan saya..
                    Kami mohon permenpan 23 mengenai akreditasi pt dan / prodi "pada saat kelulusan" dipertimbangkan lagi.
                    Kami mohon supaya "tidak saat kelulusan atau akreditasi yang masih berlaku saat ini"..
                    Supaya sila ke 5 pacasila terwujud keadilan.. Dan dalam prinsip pengadaan cpns 2019 tentang keadilan juga terwujud pak... Mohon berikan keadilan bagi kami pak...
                    Atas perhatiannya kami ucapkan terimakasih pak...</p>
                <div class="clearfix">
                    <div class="leftFloat">
                        <p>Lampiran: <a href="#">image</a></p>
                    </div>
                    <div class="rightFloat">
                        <p><a href="#">Lihat selengkapnya ></a></p>
                        <p>Waktu: 2222&nbsp;&nbsp;</p>
                    </div>
                </div>
            </div>

        </div>
        <hr>
    </div>

</body>
</html>