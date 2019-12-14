
    <div class="container">

        <!-- <div class="search">
            <input type="text" name="searchbox" id="search-box" placeholder="Telusuri laporan">
           -->
            <!-- <button type class="searchbutton">  <i class="fa fa-search"> Cari</i> -->
            <form action="<?php echo base_url().'index.php/search'?>" method="GET">
                <input type="text" name ="keyword" placeholder="Cari...">
                <input type="submit"value="Cari"><br>
            </form>
        </div>
        <div class="buat">
        <a href="<?php echo base_url().'index.php/buatlaporan'; ?>">
            Buat Laporan/Komentar <i class="fa fa-plus-square"></i>
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
                <div class="waktu">waktu: <?php echo $item_laporan["waktu_laporan"];?>  
                
               
                <div class="detail">
                <a href = "<?php echo base_url().'index.php/laporan/view/'.$item_laporan['id_laporan'];?>">Lihat Selengkapnya ></a>
                
            </div>
                </div>  
                <hr>
            <?php endforeach;?>

                    
        </div>
    </div>
    
</body>
</html>