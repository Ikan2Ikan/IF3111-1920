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
            
            <?php
                if($lpr['tipe']=="image/png" || $lpr['tipe']=="image/jpg" || $lpr['tipe']=="image/jpeg" ){
                    echo "<img src'" .base_url("asset/filess/".$lpr['lampiran'])."'width='400' height='400'>";
                }else{
                    echo "<img src'" .base_url("asset/filess/".$lpr['lampiran'])."'width='400' height='400'>";
                }
            ?>
            
            <div class="box">
                <p>Lampiran : <?= $lpr['lampiran']; ?> </p>
            </div>

            <div class="box">
                <p>Waktu : <?= $lpr['waktu']; ?> <?= $lpr['tanggal']; ?>    Aspek : <?= $lpr['aspek']; ?></p>
            </div>

            <div class="box">
                <p><a href ="<?=$linkubah;?>">Ubah</a>
                <a href ="#" onclick="confirmDelete('<?=$linkhapus;?>')">Hapus</a>
                </p>
            </div>
            
        </div>
        <hr>
    <?php endforeach; ?>
</section>
    </section>