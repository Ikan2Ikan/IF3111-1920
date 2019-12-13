<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Lapor</title>
</head>

<body>
  <h1>My Lapor</h1>
  <?php foreach ($result as $d) :
    ?>
    <div class="laporan">
      <a>
        <a href="<?= base_url('home/commentDetail/') . $d['comm_id'] ?>"><?= $d['comm_title'] ?></a>
        <small>Pelapor : <?= $d['fullname'] ?></small>
      </a>

      <p><?= $d['comm'] ?></p>

      <div class="details">
        <span>
          <span id="lampiran"><?= $d['lampiran'] ?> </span>
          <span id="timestamp"><?= $d['timestamp'] ?> WIB</span>
        </span>

        <span>
          <a href="<?= base_url('home/commentDetail/') . $d['comm_id'] ?>">Selengkapnya</a>
        </span>
      </div>
      <hr>
    </div>
  <?php endforeach;
  ?>
</body>

</html>