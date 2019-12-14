<fieldset>     
    <h1 class="judul">LAPOR in AJA!</h1>
    
<ul class="isi">
<div style="width:1000px; margin-left: 1.5cm; height:700px;border:2px dashed white;">

    <h5>Detail laporan/Komentar</h5>
    <li class="isi"><h3><?= $keluhan['aspek'];?></h3>
    <li class="isi"><p><?= $keluhan['lapor'];?></p>
    <li class="isi"><p><?= $keluhan['waktu'];?></p>
    <li class="isi"><p>Lampiran :</p>
    <li class="isi"><img src="<?php echo base_url();?>asset/gambar/<?php echo $keluhan['gambar'];?>" widht="100" height="250">
        <br><br>
        
    <a title="ubah" href="<?=base_url();?>data/ubah/<?=$keluhan['id'];?>"><i class="fas fa-edit" style="font-size:40px; margin-right:50px; height: 20px; width: 20px;"></i></a>
    <a title="hapus" href="<?=base_url();?>data/hapus/<?=$keluhan['id'];?>" onclick="return confirm('yakin?');"><i class="fas fa-trash-alt" style="font-size:40px; height: 20px; width: 20px;"></i></a>
    <a title="back" href="<?=base_url()?>"><i class="far fa-hand-point-left" style="font-size:40px; margin-left:50px; height: 20px; width: 20px;"></i></a>
    </div>
</ul>
</fieldset>    
