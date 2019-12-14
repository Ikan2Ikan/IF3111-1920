<html>
    <head>
        <title>SIMPLE LAPOR</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    </head>
    <body>
    <div class=wrap>
        <div class=header>
            <br>
            <h1>SIMPLE LAPOR!</h1>
            <br>

            <p1> Layanan Aspirasi dan Pengaduan Online ITERA </p1>
            <br>
            <br>
        </div>
        <div class=konten>
            <br>
            Detail Laporan/Komentar
            <hr>
            <?php

            
            echo $laporan->laporan."<br><br>" ;
            // echo $laporan->id ;

            ?>
            Lampiran :
            <br>
            <br>
            <img src="<?php echo base_url('uploads/').$laporan->file ?>" alt="">

            <br>
            <br>
            <br>

            <?php $new_datetime = DateTime::createFromFormat ( "Y-m-d H:i:s", $laporan->updated_at );?>
            Waktu: <?php echo $new_datetime->format('d-m-Y H:i'); 

            echo "<br>Aspek  : ".$aspek."<br><br>";
            ?> 
            
            <br>
            <br>
            <br>

            <a href="<?php echo base_url('index.php/laporan/edit/'.$laporan->id) ?>"><button type="" name="update" class="btn btn-primary">update</button></a>
            <a href="<?php echo base_url('index.php/laporan/delete') ?>"><button onclick="myFunction()" >delete</button></a>
            <a href="<?php echo base_url() ?>"><button >back</button></a>
            <br>
            <br>
        </div>
        <div class=footer>
            &copy; 
            <br>
            Reza Octaviany . 14117062
            <br>
            Raras Franita . 14117063
        </div>
    </div>
    <script>
        function myFunction() {
            var alert = confirm("Apakah anda yakin ingin menghapus Laporan?\nMenekan tombol OK akan menghapus laporan");
            if (alert == true) {
                
            } else {
                
            }
            document.getElementById("demo").innerHTML = txt;
        }
    </script>
</body>
</html>