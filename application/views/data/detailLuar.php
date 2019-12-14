<fieldset>
    <br><br>
<div class="wrapper">
<h1>LAPOR ITERA!</h1>
</div>
<h2 align="center">Detail laporan/Komentar</h2>
    <h3>Pelapor : <?=$keluhan['username']?></h3>
    <h3>Aspek  <?= $keluhan['aspek'];?></h3>
    <h3>Pada : <?= $keluhan['waktu'];?></h3>
    <h3>Isi Laporan</h3>
<div class="hei">
    <p><?= $keluhan['lapor'];?></p>
    <p><b>Lampiran :</b></p>
<div style="text-align: center;">
    <img src="<?php echo base_url();?>asset/gambar/<?php echo $keluhan['gambar'];?>" widht="400" height="550">

    <br>
    <br>
    <a href="<?=base_url()?>">BACK</a>
</div>
<br>
<br>
</div>
</fieldset>