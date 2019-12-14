
    <div class="container">

        <div class="search">
            <input type="text" name="searchbox" id="search-box" placeholder="Telusuri laporan">
            <input type="button"name="searchbutton" id = "search-button" value="Cari">
        </div>
        <div class="buat">
        <a href="index.php/buatlaporan">
            Buat Laporan/Komentar
        </a>
        </div>
        <div class="laporanterakhir">
            Laporan/Komentar Terakhir<br>
            <hr>
            <?php foreach($laporan as $item_laporan):?>
                <p class="isi"><?php echo substr ($item_laporan["isi_laporan"],0,300); ?>...</p>
                <p class="waktu"><?php echo $item_laporan["waktu_laporan"];?></p>
                <a href = "<?php echo base_url().'index.php/laporan/view/'.$item_laporan['id_laporan'];?>">Lihat selengkapnya</a>
            <?php endforeach;?>

        
        </div>
    </div>
    
</body>
</html>