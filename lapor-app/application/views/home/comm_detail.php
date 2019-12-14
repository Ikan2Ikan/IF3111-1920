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
  <?php //var_dump($result); 
  ?>
  <div class="container">
    <div class="container1">
      <h1>Detail Komentar</h1>
    </div>

    <div class="container2">
      <div class="laporan">
        <a>
          <a href="#"><?= $result['comm_title'] ?></a>
          <br>
          <small>Pelapor : <?= $result['fullname'] ?></small>
        </a>

        <p><?= $result['comm'] ?></p>

        <div class="details">
          <span>
            <span id="lampiran"><?= $result['lampiran'] ?> </span>
            <span id="timestamp"><?= $result['timestamp'] ?> WIB</span>
          </span>
          <?php
          if ($result['user_id'] == $this->session->userdata['id']) : ?>
            <a onclick="return confirm('are you sure for deleting this lapor message?')" href="<?= base_url('home/deleteComm/') . $result['comm_id'] ?>">Delete Comment</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</body>

</html>