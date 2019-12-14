<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SIMPLE LAPOR</title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">

  </head>
  <body>
    <center>
        <!--header section-->
      <?php $this->load->view('_header');?>
    <!--END HEADER-->
  </center>

    <div>
      <div>
        <h3 class="laporan kiri">Detail Laporan/Komentar</h3>
            <section class="list-laporan">
              <section class="list-komentar">
                <?= $komentar; ?>
                <br><br><br>
                  Lampiran :
                  <br><?='<img style="border: 1px solid black" src="data:image/jpeg;base64,'.base64_encode($file).'"/>'; ?>
                  <br><br><br>
                  <section class="laporan">
                  <text>  Waktu : <?=$tanggal ?></text>
                  <text>  Aspek : <?= $aspek ?></text>
                  <text><a style="color:black" href="<?php echo base_url();?>lapor/hapus">Hapus Laporan/Komentar</a></text>
                </section>
              </section>
            </section>
      </div>
    </div>

      <center>
      <!-- start footer section-->
    <?php $this->load->view('_footer');?>
    <!--End footer-->
  </center>

  </body>
</html>
