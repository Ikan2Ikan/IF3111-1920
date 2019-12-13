<!DOCTYPE html>
<html>
<head>
  <title>Buat | Lapor.Itera</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/style.css') ?>">
</head>

<body>
  <h1>Simple Laporan </h1>

  <legend>Buat Laporan/Komentar</legend>
  <hr>

  <form action="<?php echo base_url('ubah/update/'.$berita->id_laporan) ?>" method="POST" enctype="multipart/form-data">
    <div class="row">
      <textarea name="isi" placeholder="Laporan/komentar" required><?php echo $berita->isi ?></textarea>
    </div>

    <div class="row">
      <select name="aspek" required>
        <?php if($berita->aspek=='Infrastruktur'):?>
        <option value="Infrastruktur" selected>Infrastuktur</option>
        <option value="Administrasi">Administrasi</option>
      <?php else: ?>
        <option value="Infrastruktur">Infrastuktur</option>
        <option value="Administrasi"selected>Administrasi</option>
      <?php endif; ?>
      </select>
    </div>

    <div class="row">
      <input type="file" name="file">
    </div>

    <div class="row">
      <input type="submit" value="Ubah Lapor!" name="submit">
    </div>

  </form>
  <br>
  <hr>
</body>
</html>
