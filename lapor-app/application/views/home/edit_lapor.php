<?php $aspek = array('Dosen', 'Staff', 'Mahasiswa', 'Infrastruktur', 'Pengajaran'); ?>
<?php var_dump($result) ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit Lapor</title>
</head>
<div class="head">
  Buat Laporan/Komentar
</div>

<hr>

<form method="post" action="#" enctype="multipart/form-data">


  <div class="main">
    <input type="text" placeholder="Judul Laporan/Komentar" name="comm_title" value="<?= $result['comm_title'] ?>">
    <br>
    <textarea name="comment" placeholder="Laporan/Komentar"><?= $result['comm'] ?></textarea>
  </div>

  <br>

  <div class=" aspect">
    <select name="aspect">
      <option default>Pilih Aspek Pelaporan/Komentar</option>
      <?php foreach ($aspek as $a) : ?>
        <?php if ($result['aspek'] == $a) : ?>
          <option value="<?= $a ?>" selected><?= $a ?></option>

        <?php else : ?>
          <option value="<?= $a ?>"><?= $a ?></option>
        <?php endif; ?>
      <?php endforeach; ?>
    </select>
  </div>

  <br>

  <div class="file">
    <input class="file_in" type="file" name="lampiran" value="C:/xampp/htdocs/PABW/IF3111-1920/lapor-app/assets/doc/ <?= $result['lampiran'] ?>">
  </div>

  <br>

  <div class="btn_submit">
    <button type="submit" name="edit">edit LAPOR!</button>
  </div>
</form>

<body>

</body>

</html>