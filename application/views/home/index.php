<fieldset>
<div class="judul">
	<h1>LAPOR ITERA!</h1>
</div>

<form action="" method="post">
<div class="search">
<input type="text" name="keyword" id="keyword" placeholder="Cari..." >
<button type="submit" value="Cari" >Cari</button>
</form>
</div>

<?php if($this->session->flashdata('flash')):?>
	<div>Data <strong>berhasil</strong> ditambahkan!<?= $this->session->flashdata('flash');?>
	</div>
<?php endif;?>
<br>

<div class="buat">
	<a href="<?=base_url()?>data/tambah">Buat Laporan</a>
	<hr />
</div>

<div class="tulisan">
	<p>Laporan/Komentar</p>
	<hr />
</div>

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