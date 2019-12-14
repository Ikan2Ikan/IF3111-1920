<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SIMPLE LAPOR</title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">

  </head>
  <body>
    <center>
      <section style="background-color:white" id="ininavbar">

      <!--header section-->
    <?php $this->load->view('_header');?>
  <!--END HEADER-->

    <div class="home">
      <form action="">
      <input type="text"style="width:89.5%; height: 44px;" name="search">
      <input type="submit" class="cari" value="Cari"></input>
      </form>
    </div>


      <!--section buat laporan/komentar-->
      <section class="space">
        <a style="color:black;" href="<?php echo base_url();?>lapor">Buat Laporan/Komentar</a>
        <a type="button" name="button" class="add-komentar" href="<?php echo base_url();?>lapor">+</a>
      </section>
      <!--end section buat laporan/komentar-->
    </section>

      <div>
        <div>
          <h3 class="laporan kiri">Laporan/Komentar Terakhir</h3>
            <?php foreach ( $laporan as $key) : ?>
              <section class="list-laporan">
                <section class="list-komentar" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
                  <?= $key['komentar']; ?>
                </section>
                <section class="laporan kiri atas no-padding">
                  Lampiran :
                  <br><?='<img style="border: 1px solid black; width:120px; height:100px" src="data:image/jpeg;base64,'.base64_encode( $key['file'] ).'"/>'; ?>
                  <section class="kanan">
                    Waktu : <?= $key['tanggal']; ?>
                    <br> <a style="color:black" href="#">Lihat Selengkapnya ></a>
                  </section>
                </section>
              </section>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- start footer section-->
    <?php $this->load->view('_footer');?>
  <!--End footer-->

    </center>
    <script src="<?php echo base_url('assets/js/coriza.js');?>"></script>
  </body>
</html>
