<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ghome.css" media="screen"> -->
    <title>Document</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;

        }

        #judul {
            color: black;
            text-align: center;
        }

        .containerAtas {
            margin: auto;
            width: 80%;
            /* border: 3px solid green; */
            padding: 10px;
            text-align: center;
        }

        input[type=text] {
            width: 70%;
            height: 30px;
        }

        #button1 {
            background-color: white;
            color: black;
            border: 2px solid #555555;
            width: 10%;
            height: 35px;
        }

        .buatLaporan {
            margin: auto;
            width: 80%;
            /* border: 3px solid green; */
            padding: 10px;
            text-align: center;
        }

        #button2 {
            background-color: white;
            color: black;
            border: 2px solid #555555;
            width: 10%;
            height: 35px;
        }

        .cKomentar {
            margin: auto;
            width: 94%;
            /* border: 3px solid green; */
            padding: 10px;
            text-align: left;
        }

        .notFound {
            font-weight: bold;
        }
    </style>
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

        <div class="nf">
            <p class="notFound">! DATA NOT FOUND !</p>
            <hr>
        </div>

    </div>

</body>


</html>