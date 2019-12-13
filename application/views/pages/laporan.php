<div class="content-wrapper">
    <h3>Detail Laporan/Komentar</h3>
    <hr>
    <p><?php echo $post_item['isi']; ?></p>
    <div class="lampiran">
        <span>Lampiran:</span>
        <img src="<?php echo base_url().'lampiran/'.$post_item['lampiran']; ?>" alt="Lampiran">
    </div>

    <span>Aspek : <?php echo $post_item['aspek']; ?></span><br>
    <span>Dibuat pada : <?php echo $post_item['waktu']; ?> </span>
    <?php $id = $post_item['id'];?>
    <a href="<?php echo base_url('laporan/delete/').$id; ?>">Hapus</a>
    <a href="<?php echo base_url('laporan/edit/').$id; ?>">Edit</a>
</div>