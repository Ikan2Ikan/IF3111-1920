<div class="container">
<p>Laporan / Komentar </p>
<br>

<?php foreach ($result as $post):?>
    <?php if(strlen($post['isi_laporan'])<=400){?>
        <p> <?php echo $post['isi_laporan'];?></p>
    <?php }else{ ?>
        <p><?php echo substr($post['isi_laporan'],0,400).'...';?></p> 
    <?php }?>

    Waktu : <?php echo $post['waktu_laporan'];?>
    <a href="<?php echo base_url().'index.php/laporan/view/'.$post['id_laporan'];?>"> Lihat Selengkapnya ></a>
    <?php endforeach;?>

</div>