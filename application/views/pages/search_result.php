<div class="laporan-terakhir">
    <p>Laporan/Komentar Terakhir</p>
    <hr>
    <?php $search_result = array_reverse((array)$result) ?>
    <?php foreach ($search_result as $post) : ?>
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