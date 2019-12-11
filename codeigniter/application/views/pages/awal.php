<div>
    <form action="" method='POST'>
        <input type="text" name='cariLaporan'>
        <input type="button" name="cari" id="" value= "cari"><br>
        Buat Laporan/Komentar<br>
        Laporan/Komentar Terakhir <hr>
        <?php foreach ($laporan as $laporan_item ) {?>
                <?= $laporan_item['laporan']; ?> <br>
                Lampiran :<?= $laporan_item['lampiran']; ?>
                <?=  $laporan_item['tanggal']; ?>
                <hr>
        <?php } ?>
        
    </form>
</div>
