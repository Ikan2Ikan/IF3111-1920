<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title><?php echo $judul1; ?></title><!-- variabel judul berasal dari key yang otomatis menjadi variabel yg  berada di controller/home.php -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style_header_daftar_login.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style_detail.css">
  
  </head>
  <body>

<div id="id01" class="modal">
  <form class="modal-content animate" action="">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>
    <div class="container">
      Aplikasi ini merupakan salah satu apliakasi
      buatan kami,kami ingins sekalai berkontribusi
      untuk negri

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

    </ul> 
</div>
<br><br><br>