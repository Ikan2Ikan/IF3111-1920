<div class="searchbar">
    <input type="text" name="search" id="search-bar" placeholder="Kata kunci atau tracking ID...">
    <input type="button" value="Cari" id="search-button">
</div>
<div class="lapor">
    <a href="<?php echo site_url('add'); ?>">Buat Laporan/Komentar</a>
</div>
<div class="laporan-terakhir">
    <p>Laporan/Komentar Terakhir</p>
    <hr>
    <?php foreach ($posts as $post) : ?>
        <p class="isi"><?php echo $post['isi']; ?></p>
        <br>
        <p class="waktu">Waktu: <?php echo $post['waktu']; ?></p>
        <a href="<?php echo base_url().'index.php/laporan/'.$post['id'];?>">Lihat Selengkapnya ></a>
        <hr>
    <?php endforeach;?>
</div>