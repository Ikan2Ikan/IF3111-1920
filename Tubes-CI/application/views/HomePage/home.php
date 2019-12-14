    <form>
            <input class="search" type="text" placeholder="">   
            <input class="button" type="button" value="Cari">       
        
        <div class=kata>
          <a href="<?= base_url(); ?>Buatform">Buat Laporan/Komentar <button class="button2">'</button> </a>
        </div>
    </form>

    <p> Laporan/Komentar Terakhir </p>
    <hr width="100%" color="gray" />

    <div class="jarak">
            <?php foreach($laporan as $lap):?>
                <?php if (strlen($lap["isi_laporan"])<=450){?>
                        <p class="isi"><?php echo $lap["isi_laporan"];?></p>
                <?php }else {?>          
                        <p class="isi"><?php echo substr ($lap["isi_laporan"],0,450); ?>...</p>
                <?php }?>
                <div class="baca">
                    <p class="tgl"><?php echo $lap["tgl_laporan"];?>

                    <a href = "<?php echo base_url().'index.php/crud/view/'.$lap['id_laporan'];?>">Lihat selengkapnya</a>
                    </p>
                </div>
                <hr width="100%" color="gray" />
            <?php endforeach;?>
    </div>
        
    

    </body>
</html>