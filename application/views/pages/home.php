<div class="searchbar">
    <form action="<?php echo base_url('laporan/search'); ?>" method="get">
        <input type="text" name="keyword" id="search-bar" placeholder="Kata kunci atau tracking ID...">
        <input type="submit" value="Cari" id="search-button">
    </form>
</div>
<div class="lapor">
    <a href="<?php echo base_url().'add'; ?>">Buat Laporan/Komentar</a>
</div>
<div class="laporan-terakhir">
    <p>Laporan/Komentar Terakhir</p>
    <hr>
    <?php $post_list = array_reverse((array)$posts) ?>
    <?php foreach ($post_list as $post) : ?>
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