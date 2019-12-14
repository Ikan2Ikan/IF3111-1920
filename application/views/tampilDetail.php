<html>
    <head>
        <title>SIMPLE LAPOR</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    </head>
    <body>
    
    <h1 ><a href = "<?php echo base_url()?>">SIMPLE LAPOR!</a></h1>
    
    <?php

    echo $aspek."<br><br>";
    echo $laporan->laporan ;
    // echo $laporan->id ;

    ?>

    <img src="<?php echo base_url('uploads/').$laporan->file ?>" alt="">

    <br>
    <br>

    <?php $new_datetime = DateTime::createFromFormat ( "Y-m-d H:i:s", $laporan->updated_at );?>
    Waktu: <?php echo $new_datetime->format('d-m-Y H:i'); ?> 
    <br>
    <br>

    <a href="<?php echo base_url('index.php/laporan/edit/'.$laporan->id) ?>"><button type="" name="update" class="btn btn-primary">update</button></a>
    <a href="<?php echo base_url('index.php/laporan/delete') ?>"><button onclick="myFunction()" >delete</button></a>
    
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