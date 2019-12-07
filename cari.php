<html>
    <head>
        <title>SIMPLE LAPOR</title>
    </head>
    <body>
        <h1>SIMPLE LAPOR!</h1>
    
        <form action="cari.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="cari" maxlength="30">
            <button type="submit" name="tombol_cari" class="btn btn-primary">Cari</button>
        </form>
        <?php
            $cari = $_POST["cari"];
            echo $cari;
        ?>
    
    </body>
</html>