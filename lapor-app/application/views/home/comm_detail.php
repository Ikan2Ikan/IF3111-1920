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
        <?php
        $context = stream_context_create(
          array(
            "http" => array(
              "header" => "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36"
            )
          )
        );

        // echo file_get_contents("www.google.com", false, $context);
        echo file_get_contents(base_url('assets/doc/$result["lampiran"]'), false, $context); ?>
      </div>
    </div>
  </div>
</body>

</html>