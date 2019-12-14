<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SIMPLE LAPOR</title>
  </head>
  <body>
    <div>
      <?= $key['komentar']; ?>
      <br><br><br>
      <?='<img style="border: 1px solid black; width:120px; height:100px" src="data:image/jpeg;base64,'.base64_encode( $key['file'] ).'"/>'; ?>
      <br>
      <?= $key['tanggal']; ?>
    </div>
  </body>
</html>
