<html>
    <head>
        <title>SIMPLE LAPOR</title>
    </head>
    <body>
    <h1>SIMPLE LAPOR!</h1>
    
    <form action="<?php echo base_url('index.php/laporan/create')?>" method="POST" enctype="multipart/form-data">
        <textarea id="laporan" name="laporan" rows="20" cols="80">Laporan/Komentar</textarea>
        
        <br>
        <select name="aspek" style="width: 150px">
        <?php
            foreach($aspek as $value){?>
                <option value="<?php echo $value->id?>"><?php echo $value->nama ?></option>
            <?php }
        ?>
        </select>
        <br>
        <br>

        <input type="file" name="fileLapor" id="fileLapor">
        <br>
        <br>
        <button type="submit" name="buatLapor" class="btn btn-primary">Buat LAPOR!</button>

    </form>
    
    </body>
</html>