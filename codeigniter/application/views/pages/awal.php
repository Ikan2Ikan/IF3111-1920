<div>
    <form action="" method='POST'>
        <input type="text" name='cariLaporan'>
        <input type="button" name="cari" id="" value= "cari"><br>
        <a href="<?= site_url('tambah'); ?>"> Buat Laporan/Komentar</a><br>
        Laporan/Komentar Terakhir <hr>
        <?php foreach ($laporan as $laporan_item ) {?>
                <?= $laporan_item['laporan']; ?> <br>
                Lampiran :<?= $laporan_item['lampiran']; ?>
                <?=  $laporan_item['tanggal']; ?>
                <a href="<?= site_url('detail/'.$laporan_item['id']); ?>"> Lihat Selengkapnya</a>
                <hr>
        <?php } ?>
        
    </form>
</div>
