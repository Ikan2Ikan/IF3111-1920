<div class="container">
    <h1>Laporan #<?php echo $post_item['id']; ?></h1>
    <p><?php echo $post_item['isi']; ?></p>
    <div class="lampiran">
        <img src="<?php echo base_url().'lampiran/'.$post_item['lampiran']; ?>" alt="Lampiran">
    </div>

    <span>Aspek : <?php echo $post_item['aspek']; ?></span><br>
    <span>Dibuat pada : <?php echo $post_item['waktu']; ?> </span>
</div>