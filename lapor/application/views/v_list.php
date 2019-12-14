<!DOCTYPE html>
<html lang="en">
    <body>
        <div class= "box">
            <h4>Laporan/Komentar Terakhir</h4>
            <hr width="100%">
            <table style="margin:20px auto;" border="1">
                <?php $no = 1;
                    foreach($lapor as $a) : ?>
                    <h3><?php echo $a['isi'] ?></h3>
                    <h4>Waktu: <?php echo $a['waktu'] ?></h4>
                    <h4>Aspek: <?php echo $a['aspek'] ?></h4>
                    <h4>Lampiran: <?php echo $a['lampiran'] ?></h4>
                    <hr width="100%">
                    <?php endforeach; ?>
                    </table>
        </div>
    </body>
</html>