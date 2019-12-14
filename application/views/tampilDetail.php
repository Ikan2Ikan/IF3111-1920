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
    <a href="<?php echo base_url('index.php/laporan/edit/'.$laporan->id) ?>"><button type="" name="update" class="btn btn-primary">update</button></a>
    <a href="<?php echo base_url('index.php/laporan/delete') ?>"><button type="" name="delete" class="btn btn-primary">delete</button></a>
    </body>
</html>