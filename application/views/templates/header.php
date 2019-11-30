<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo $judul1; ?></title><!-- variabel judul berasal dari key yang otomatis menjadi variabel yg  berada di controller/home.php -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style_header.css">
    
  </head>
  <body>

    <div class="header">
        <ul>
          <li> LAPOR-DAN  </li>
        </ul>
       

        <ul>
        <li><a href="<?php echo base_url() ?>Halaman_utama/tentang_laporan">TENTANG LAPOR</a></li>
        <!-- controler Mahasiswa dan fungsi detail_laporan -->
        <li><a href="<?php echo base_url() ?>Halaman_utama">HOME</a> </li>
       </ul>  
     
     <div id="login">
        <ul>
          <li>
        
<!--       untuk menghiLangkan tombol daftar saat user telah login -->
          <?php if($this->session->userdata('email')==null):  ?>
         <a href="<?php echo base_url() ?>Halaman_utama/DaftarAkunLaporan">Daftar</a>
          <?php endif; ?>
         </li>


         <li>
<!--           untuk menghiLangkan tombol login saat user telah login -->
          <?php if($this->session->userdata('email')==null):  ?>
         <a href="<?php echo base_url() ?>Halaman_utama/login">Login</a>
          <?php endif; ?>
                  
          </li>

          <li>
<!--           untuk menghiLangkan tombol logut saat user telah login -->
        <?php if(!$this->session->userdata('email')==null):  ?>
        <a href="<?php echo base_url() ?>Halaman_utama/logout">Logout</a>
        <?php endif; ?>
          </li>
        </ul>
    </div>
<!-- 
alasan knp dibuat seperti itu
agar menghemat resoucer tidak memangil
halaman terlalu banyak -->


