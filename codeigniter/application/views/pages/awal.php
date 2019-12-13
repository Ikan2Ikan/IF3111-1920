<div class="container">
    <form action="" method='POST' class="">

        <input class="search_text" type="text" name='cariLaporan'>
        <input  class="search_button" type="button" name="cari" id="cari" value= "cari">
        <br>
      

        <a class="buat_laporan" href="<?= site_url('tambah'); ?>"> Buat Laporan/Komentar</a>
        <br/>
        <h4> Laporan/Komentar Terakhir </h4>
        <hr>

        <div>
        <?php foreach ($laporan as $laporan_item ) {?>
                <?= $laporan_item['laporan']; ?> <br>
                Lampiran :<?= $laporan_item['lampiran']; ?>

                <div  class="kepinggir">
                   <?=  $laporan_item['tanggal']; ?>
                    <a href="<?= site_url('detail/'.$laporan_item['id']); ?>"> Lihat Selengkapnya ></a>
                </div>
                <hr>
        <?php } ?>
        </div>
        
    </form>
</div>
