    <p> Detail Laporan/Komentar </p>
    <hr width="100%" color="gray"/>
    
        <p><?php echo $laporan['isi_laporan']; ?></p>
        <div>
            <span>lampiran</span>
            <img src = "<?php echo base_url().'lampiran/'.$laporan['lampiran'];?>" alt="lampiran">
        </div>

    <span>Aspek : <?php echo $laporan['kategori'];?></span><br>
    <span>Dibuat pada : <?php echo $laporan ['tgl_laporan']; ?></span>
    <?php $id = $laporan['id_laporan'];?>

</body>
</html>