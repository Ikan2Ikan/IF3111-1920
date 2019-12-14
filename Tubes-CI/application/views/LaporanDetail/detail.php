<div class="komentar">
    <p> Detail Laporan/Komentar </p>
    <hr width="100%" color="grey"/>
    
        <p><?php echo $laporan['isi_laporan']; ?></p>
        <div>
            <span>lampiran</span>
            <img src = "<?php echo base_url().'lampiran/'.$laporan['lampiran'];?>" alt="lampiran">
        </div>

    <br>
    <div class="baca1">
    <span class="tgl">Waktu: <?php echo $laporan ['tgl_laporan']; ?></span>
    <span class="tgl">Aspek: <?php echo $laporan['kategori'];?></span>
    </div>
    <?php $id = $laporan['id_laporan'];?>
    <a class="baca" href = "<?php echo base_url().'crud/delete/'.$id;?>">Hapus Laporan/Komentar<button class="button3">x</button></a></a>
    
    <hr width="100%" color="grey"/>
    <a href="<?= base_url(); ?>Home"><button class="button3"><</button>Back </a>
</div>
</body>
</html>