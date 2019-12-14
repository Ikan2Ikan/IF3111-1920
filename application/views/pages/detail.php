<section id="boxes">
        <center>
            <h2>DETAIL LAPORAN</h2>
        </center>
        <section id="boxes">
    <?php foreach ($lapor as $lpr) : ?>

        <?php $linkhapus = base_url('home/hapus/' .$lpr['id']);?>
        <?php $linkubah = base_url('home/ubah/' .$lpr['id']);?>

        <div class="container">
            <p><?= $lpr['laporan']; ?></p>
            <div class="box">
                <p>Lampiran : <?= $lpr['lampiran']; ?> </p>
            </div>

            <div class="box">
                <p>Waktu : <?= $lpr['waktu']; ?> <?= $lpr['tanggal']; ?>    Aspek : <?= $lpr['aspek']; ?></p>
            </div>

            <div class="box">
                <p><a href ="<?=$linkubah;?>">Ubah</a>
                <a href ="<?=$linkhapus;?>">Hapus</a>
                </p>
            </div>
            
        </div>
        <hr>
    <?php endforeach; ?>
</section>
    </section>
