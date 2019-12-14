<div class="container">
    <h3> Detail Laporan/Komentar</h3>
        <hr>
        <p><?php echo $laporan['isi_laporan']; ?></p>
        <div class="lampiran">
            <span>Lampiran :</span>
            <img src = "<?php echo base_url().'upload/'.$laporan['lampiran'];?>" alt="">
        </div>

    
    
    <div class = "momen">
    <span>waktu : <?php echo $laporan ['waktu_laporan']; ?></span>
    
    <div class ="aspek">
    <span>Aspek : <?php echo $laporan['aspek'];?></span>
    
    <div class = "hapus">
    <?php $id = $laporan['id_laporan'];?>
    
    <a href = "<?php echo base_url().'index.php/laporan/delete/'.$id;?>">Hapus Laporan/KomentarX</a>
    </div>      
    </div>
    </div>
    <hr>    
    
</div>


