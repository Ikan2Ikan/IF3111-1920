    <p> Detail Laporan/Komentar </p>
    <hr width="100%" color="gray" />
    
        <p><?php echo $laporan['isi_laporan']; ?></p>
        <div class="lampiran">
            <span>lampiran</span>
            <img src = "<?php echo base_url().'lampiran/'.$laporan['lampiran'];?>" alt="lampiran">
        </div>

    <span>Aspek : <?php echo $laporan['aspek'];?></span><br>
    <span>Dibuat pada : <?php echo $laporan ['waktu_laporan']; ?></span>
    <?php $id = $laporan['id_laporan'];?>
    <a href = "<?php echo base_url().'index.php/laporan/delete/'.$id;?>">Hapus</a>
</body>
</html>