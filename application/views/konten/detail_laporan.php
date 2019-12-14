<div class="container">
    Detail Laporan/Komentar
        <hr>
        <p><?php echo $laporan['isi_laporan']; ?></p>
        <p>Lampiran :</p>
        <div class="lampiran">
            
            <img src = "<?php echo base_url().'lampiran/'.$laporan['lampiran'];?>" alt="">
        </div>

        <br><br><br>   
    
    <div class = "momen">
    <span>waktu : <?php echo $laporan ['waktu_laporan']; ?></span>
    
    <div class ="aspek">
    <span>Aspek : <?php echo $laporan['aspek'];?></span>
    
    <div class = "hapus">
    <?php $id = $laporan['id_laporan'];?>
    <a href = "<?php echo base_url().'index.php/laporan/edit/'.$id;?>">Edit Laporan/Komentar <i class="fa fa-times"></i></a>
    <a href = "<?php echo base_url().'index.php/laporan/delete/'.$id;?>">Hapus Laporan/Komentar <i class="fa fa-times"></i></a>
    </div>      
    </div>
    </div>
    <div class="footer">
    <hr> 
   </div>
       
    
</div>


