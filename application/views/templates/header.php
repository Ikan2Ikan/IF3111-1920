<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo $judul1; ?></title><!-- variabel judul berasal dari key yang otomatis menjadi variabel yg  berada di controller/home.php -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style_header.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style_detail.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style_header_daftar_login.css">


       
  </head>
  <body>

    
<div id="id01" class="modal">
  <form class="modal-content animate" action="">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
     <!--  <img src="img_avatar2.png" alt="Avatar" class="avatar"> -->
    </div>
    <div class="container">
      Pengelolaan pengaduan pelayanan publik di setiap organisasi penyelenggara di Indonesia belum terkelola secara efektif dan terintegrasi. Masing-masing organisasi penyelenggara mengelola pengaduan secara parsial dan tidak terkoordinir dengan baik. Akibatnya terjadi duplikasi penanganan pengaduan, atau bahkan bisa terjadi suatu pengaduan tidak ditangani oleh satupun organisasi penyelenggara, dengan alasan pengaduan bukan kewenangannya. Oleh karena itu, untuk mencapai visi dalam good governance maka perlu untuk mengintegrasikan sistem pengelolaan pengaduan pelayanan publik dalam satu pintu. Tujuannya, masyarakat memiliki satu saluran pengaduan secara Nasional.

    </div>
    <div class="container" style="background-color:#f1f1f1">
     
     
    </div>
  </form>
</div>


    <div class="header">
        <ul>
          <li> LAPOR-DAN  </li>
        </ul>
       

        <ul>
        <li><a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">TENTANG LAPORAN</a></li>
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
<!--           untuk menghiLangkan tombol logut saat user telah log out -->
        <?php if(!$this->session->userdata('email')==null):  ?>
        <a href="<?php echo base_url() ?>Halaman_utama/logout" onclick="return confirm('Anda Yakin Akan keluar');">Logout</a>
        <?php endif; ?>
          </li>
        </ul>
    </div> <!-- end login -->

</div> <!-- end header -->
<!-- 
alasan knp dibuat seperti itu
agar menghemat resoucer tidak memangil
halaman terlalu banyak -->

<script>
// Get the modal
var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


