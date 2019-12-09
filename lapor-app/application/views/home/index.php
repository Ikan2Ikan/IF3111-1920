<div class="container">

  <div class="log-reg">
    <a href="<?= base_url('auth') ?>">Login</a>
    <a href="<?= base_url('auth/register') ?>">Register</a>
  </div>

  <div class="heading-icon">
    <img src=<?= base_url('assets/img/logoitera.png') ?> alt="ini foto.png">
    <h1>LAPOR ITERA!</h1>
  </div>

  <input type="text" name="search" id="search" aria-describedby="helpId" placeholder="Masukkan Keyword">
  <button type="submit" name="cari">Cari</button>
  <br>

  <div class="com_link">
    <a href="<?= base_url('comment') ?>">Buat Laporan/Komentar </a>
    <i class="fa fa-plus-circle" aria-hidden="true"></i>
  </div>

  <h3>Laporan/Komentar Terkini</h3>
  <hr>

  <?php foreach ($result as $d) :
    ?>
    <div class="laporan">
      <a>
        <h4><?= $d['comm_title'] ?></h4>
        <small><?= $d['fullname'] ?></small>
      </a>

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

<script>
  var search = document.getElementById('search');
  //jalankan fungsi ketika keyword diketik
  search.addEventListener('keyup', function() {
    //buat objek ajax
    var xhr = new XMLHttpRequest();

    //cek apakah ajax siap dieksekusi
    xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
        console.log('ajax ashiyap!');
        // container.innerHTML = "Ajax Ashiyaap!";
      }
    }
    //eksekusi ajax
    xhr.open('GET', '<?= base_url('home'); ?>', true);
    xhr.send();
  })
</script>