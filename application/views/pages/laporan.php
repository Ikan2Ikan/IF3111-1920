<div class="container">
    <h1>Laporan #<?php echo $post_item['id']; ?></h1>
    <p><?php echo $post_item['isi']; ?></p>
    <div class="lampiran">
        <img src="<?php echo base_url().'tampilan/'.$post_item['lampiran']; ?>" alt="Lampiran">
    </div>

    <p>Aspek : <?php echo $post_item['aspek']; ?></p>
    <p>Dibuat pada : <?php echo $post_item['waktu']; ?> </p>
</div>