<div class="searchbar">
    <input type="text" name="search" id="search-bar" placeholder="Kata kunci atau tracking ID...">
    <input type="button" value="Cari" id="search-button">
</div>
<div class="lapor">
    <a href="<?php echo base_url().'add'; ?>">Buat Laporan/Komentar</a>
</div>
<div class="laporan-terakhir">
    <p>Laporan/Komentar Terakhir</p>
    <hr>
    <?php foreach (array_reverse($posts) as $post) : ?>
        <?php if(strlen($post['isi']) <= 400){?>
            <p class="isi"><?php echo $post['isi']; ?></p>
        <?php } else {?>
            <p class="isi"><?php echo substr($post['isi'], 0, 400).'...'; ?></p>
        <?php }?>
        <p class="waktu">Waktu: <?php echo $post['waktu']; ?></p>
        <a href="<?php echo base_url().'laporan/view/'.$post['id'];?>">Lihat Selengkapnya ></a>
        <hr>
    <?php endforeach;?>
</div>