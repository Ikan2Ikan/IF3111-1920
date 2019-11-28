<?php
var_dump($this->session->userdata());
if (!isset($this->session->userdata['logged_in'])) {
  echo "<script>
        alert('you have not access to this page!')
        </script>
  ";
  redirect(base_url('auth'));
}
?>
<h1>SIMPLE LAPOR!</h1>
<h4>Selamat Datang, <?= $this->session->userdata('fullname'); ?></h4>
<a href="<?= base_url('home/logOut') ?>">Logout</a>
<form action="" method="get">
  <label for=""></label>
  <input type="text" name="search" id="search" aria-describedby="helpId" placeholder="Masukkan keyword . . .">
  <button type="submit" name="cari">cari</button>
</form>
<a href="<?= base_url('comment') ?>">Buat Laporan/Komentar &plus;</a>

<div class="container">
  <h4>Laporan/Komentar Terkini</h4>
  <hr>
  <div class="laporan">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, nostrum est. Natus odit aspernatur quisquam facere. Soluta corporis itaque ipsum enim perferendis, nostrum quos nam dolorem cum! Soluta, necessitatibus cumque.</p>
    <span><span id="lampiran">Lampiran: </span> <span id="timestamp">21 Nov 2019 | 20:37 WIB</span></span>
    <hr>
  </div>
  <?php foreach ($result as $d) :
    ?>
    <div class="laporan">
      <b>
        <p><?= $d['fullname'] ?></p>
      </b>
      <p><?= $d['comm'] ?></p>
      <span><span id="lampiran"><?= $d['lampiran'] ?> </span> <span id="timestamp"><?= $d['timestamp'] ?> WIB</span></span>
      <hr>
    </div>
  <?php endforeach;
  ?>
</div>