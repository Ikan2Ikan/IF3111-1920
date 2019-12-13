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

      <!--section search-->
      <section class="boxcari">
        <input type="text" name="cari" class="form-control" placeholder="Klik untuk pencarian">
        <div>
          <input type="submit" value="Cari">
        </div>
      </section>
      <!--end section search-->

      <!--section buat laporan/komentar-->
      <section>
        <a style="color:black;" href="<?php echo base_url();?>lapor">Buat Laporan/Komentar</a>
        <button type="button" name="button" href="<?php echo base_url();?>lapor" class="add-komentar">+</button>
      </section>
      <!--end section buat laporan/komentar-->


      <!--section buat laporan/komentar terakhir-->
      <section class="laporan">
        Laporan/Komentar Terakhir
      </section>
      <!--end section buat laporan/komentar terakhir-->


      <!-- start footer section-->
    <?php $this->load->view('_footer');?>
  <!--End footer-->

    </center>
  </body>
</html>
