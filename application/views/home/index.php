<fieldset>
<div class="judul">
<h1 class="judul">LAPOR in AJA!</h1>
</div>
<form action="" method="post">
<form>
    <input class="search" type="text" name="keyword" id="keyword"  placeholder="search" required>
    <a href="<?=base_url()?>"><i class="fas fa-search" style=" padding:0px; height: 20px; font-size:30px; width: 50px;"></i></a>	
</form>
</form>
<?php if($this->session->flashdata('flash')):?>
<div>Data <strong>berhasil</strong> ditambahkan!<?= $this->session->flashdata('flash');?>
</div>
<?php endif;?>
<br>
<div class="buat">
<a href="<?=base_url()?>data/tambah">Buat Laporan/Komentar<i class="fas fa-plus"  style=" height: 20px; width: 25px;"></i></a>
</div>

<div class="tulisan">
<p>Laporan/Komentar Terakhir</p>
</div>
<hr />
<div class="tulisan2">
<div class="newshead">
<ul class="detail">
<?php foreach($lapor as $dt):?>
<?= $dt['lapor'].' ';?>
<br>
<?= $dt['aspek'].' ';?>
<?= $dt['gambar'].' ';?>
<?= $dt['waktu'].' ';?>
<li class="detail">
	
	<a href="<?=base_url()?>data/detail/<?=$dt['id']; ?>">Lihat Selengkapnya...</a>

</li>
<br>
<?php endforeach?>
</ul>
</div>
</div>
</fieldset>