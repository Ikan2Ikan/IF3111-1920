
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
                <p class="isi"><?php echo $item_laporan["isi_laporan"]; ?></p>
                <p class="waktu"><?php echo $item_laporan["waktu_laporan"];?></p>
                <a href>Lihat selengkapnya</a>
            <?php endforeach;?>

            <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Id aut quasi voluptatibus magnam beatae nisi ea, nulla autem ut ipsa odit tempora saepe error culpa ratione asperiores, accusamus harum eum.<br><br>
            Lampiran: Gambar.jpg  <div class="more">Waktu :20-11-2019 20:00 <a href>Lihat selengkapnya</a></div> 
            <hr><br>
            lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat. Lorem felis nec erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat<br><br>
            Lampiran: Gambar.jpg  <div class="more">Waktu :20-11-2019 20:00 <a href>Lihat selengkapnya</a></div> 
            <hr><br>
            lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat. Lorem felis nec erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat<br><br>
            Lampiran: Gambar.jpg  <div class="more">Waktu :20-11-2019 20:00 <a href>Lihat selengkapnya</a></div> 
            <hr><br> -->
        </div>
    </div>
    
</body>
</html>