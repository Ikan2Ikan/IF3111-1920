<p>Laporan / Komentar</p>
<hr>

<?php foreach ($result as $post) : ?>

    <?php if(strlen($post['komentar']) <= 400){ ?>
        <?php echo $post['komentar'] ; ?>

 <?php   }else{ ?>
        <?php echo substr ($post['komentar'], 0, 400). '..'; ?>
        <?php  }?>

    Waktu : <?php echo $post['tanggal'] ;?>
    <a href="<?php echo base_url().'detail/'.$post['no']; ?>"> Lihat Selengkapnya ></a>></p>

 <?php endforeach; ?>