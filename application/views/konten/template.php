
    <div class="container">

        <div class="search">
            <input type="text" name="searchbox" id="search-box" placeholder="Telusuri laporan">
          
            <button type class="searchbutton">  <i class="fa fa-search"> Cari</i>
        </div>
        <div class="buat">
        <a href="<?php echo base_url().'index.php/buatlaporan'; ?>">
            Buat Laporan/Komentar
        </a>
        </div>
        <div class="laporanterakhir">
            Laporan/Komentar Terakhir<br>
            <hr>
            <?php foreach($laporan as $item_laporan):?>
                <?php if (strlen($item_laporan["isi_laporan"])<=300){?>
                        <p class="isi"><?php echo $item_laporan["isi_laporan"];?></p>
                <?php }else {?>          
                        <p class="isi"><?php echo substr ($item_laporan["isi_laporan"],0,300); ?>...</p>
                <?php }?>
                <div class="detail">
                <a href = "<?php echo base_url().'index.php/laporan/view/'.$item_laporan['id_laporan'];?>">Lihat selengkapnya</a>
              
                <div class="waktu"><?php echo $item_laporan["waktu_laporan"];?></div>
                </div>
               <hr>
            <?php endforeach;?>

        
        </div>
    </div>
    
</body>
</html>