<p>Laporan / Komentar</p>
<hr>

<?php foreach ($search_result as $post) : ?>

    <?php if(strlen($post['komentar']) <= 400){ ?>
        <?php echo $post['komentar'] ; ?>

 <?php   }else{ ?>
        <?php echo substr ($post['komentar'], 0, 400). '..'; ?>
        <?php  }?>

    Waktu : <?php echo $post['tanggal'] ;?>

    <a href=""></a>