<div class="container">

  <h1>SIMPLE LAPOR!</h1>

  <form action="" method="get">
    <input type="text" name="search" id="search" aria-describedby="helpId" placeholder="Masukkan Keyword">
    <button type="submit" name="cari">Cari</button>
  </form>
  <br>
  <a href="<?= base_url('comment') ?>">Buat Laporan/Komentar &plus;</a>

  <h3>Laporan/Komentar Terkini</h3>
  <hr>

  <?php foreach ($result as $d) :
    ?>
    <div class="laporan">

      <a href="#"><?= $d['fullname'] ?></a>

      <p><?= $d['comm'] ?></p>

      <div class="details">
        <span>
          <span id="lampiran"><?= $d['lampiran'] ?> </span>
          <span id="timestamp"><?= $d['timestamp'] ?> WIB</span>
        </span>

        <span>
          <a href="#">Selengkapnya</a>
        </span>
      </div>

      <hr>
    </div>
  <?php endforeach;
  ?>

</div>