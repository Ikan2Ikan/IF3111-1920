<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?= base_url('assets/css/comm_detail_style.css') ?>">
  <title>Comment details</title>
</head>

<body>
  <div class="container">
    <div class="laporan">
      <a>
        <a href="#"><?= $result['comm_title'] ?></a>
        <small>Pelapor : <?= $result['fullname'] ?></small>
      </a>

      <p><?= $result['comm'] ?></p>

      <div class="details">
        <span>
          <span id="lampiran"><?= $result['lampiran'] ?> </span>
          <span id="timestamp"><?= $result['timestamp'] ?> WIB</span>
        </span>
      </div>
    </div>
  </div>
</body>

</html>