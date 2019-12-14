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

    <section class="laporan kiri space">
      Buat Laporan/Komentar
    </section>

    <section>
      <form class="" action="<?php echo base_url();?>lapor/simpan" method="post">
        <textarea name="message" style="width: 100%; height: 250px; border:2px solid black;" minlength="20"; placeholder="Laporan/Komentar"></textarea>
        </center>

        <section>
          <select class="button" style="font-size: 16px;" name="aspek">
              <option value="" disabled selected>Pilih Aspek Pelaporan/Komentar</option>
              <option value="Teknologi">Teknologi</option>
              <option value="Infrastuktur">Infrastuktur</option>
              <option value="Lingkungan">Lingkungan</option>
              <option value="Kesehatan">Kesehatan</option>
          </select>
        </section>

        <section>
          <input type="file" name="myFile">
        </section>

      <section class="laporan kanan">
        <input type="submit" class="button" name="button" value="Buat LAPOR!"></input>
      </section>
      </form>
    </section>



    <center>
      <!-- start footer section-->
    <?php $this->load->view('_footer');?>
    <!--End footer-->

  </center>
  </body>
</html>
