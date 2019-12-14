<fieldset>
	<div class="judul">
		<br><br>
	<div class="wrapper">
	<h1>LAPOR ITERA!</h1>
	</div>
	</div>
	<br>
</div>

<form name="formHome"action="" method="post">
<div class="search">
	<br>
	<br>
<input type="text" name="keyword" id="keyword" placeholder="Cari data lapor atau aspek disini..." >
<button type="submit" value="Cari" >Cari</button>
</form>
</div>

<?php if($this->session->flashdata('flash')):?>
	<div>Data <strong>berhasil</strong> ditambahkan!<?= $this->session->flashdata('flash');?>
	</div>
<?php endif;?>
<br>

<div class="buat">
	<a href="<?=base_url('auth')?>">Ingin membuat Laporan?</a>
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
	<?php 
	$limitedKata=$this->Data_model->limitKata($dt['lapor'], 5);
	?>
<?= $limitedKata.' ';?>
<br>
	<?= $dt['aspek'].' ';?> <br>
	<?= $dt['gambar'].' ';?>
	<div class="tulisanWaktu">
	<?= $dt['waktu'].' ';?>
	</div>
<li class="detail">
	<a href="<?=base_url()?>data/detail/<?=$dt['id']; ?>">Detail...</a>
</li>
<br>

<?php endforeach?>
</ul>
	</div>
</div>
</fieldset>