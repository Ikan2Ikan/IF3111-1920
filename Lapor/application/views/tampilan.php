<!DOCTYPE html>
<html>
<head>
	<title>tampilan</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/tampilan.css'?>">
</head>
<body>
<header>
<div class="container">
    <div id="bagiankiri">
      </div>
          <nav>
			<ul>
            <li class="active"><a href="#" > Tentang Lapor! </a></li>
             
          </ul>
      </nav>
     <div id="bagiankanan">
	      <nav>
            <ul>
             <li>
	        <li> <a href="#"> Masuk </a></li> 
		       <li> <a href="#"> Daftar </a></li>
              </li>
             </ul>
         </nav>
        </div>
     </div>
  </header>
  
  <p class="subjudul">Laporan/Komentar Terakhir</p>
    <hr>
    <br><br>     
         	<?php foreach ($home as $hm )  :
             $id = $hm['id_lapor']; 
             $now = date("Y-m-d H:i"); ?>
          <div class="arsip"> 
          	<p><?php echo substr($hm['laporan'], 0, 450); ?></p>
       </div><br>
        <tr>
        	<a class='more' href='detail?detail_id=$id'>Lihat Selengkapnya  &nbsp<img src="more.png" height=13px></a>		
          </tr>
          <div class="waktu">
       <?php 
          $date = new DateTime($hm['waktu']);
          	echo 'Waktu : ';
            echo $date->format('d-m-Y H:i'); // 21-01-2017 05:13:03
          	?>
        </div> 
  <div class="lampir">
      <?php
            echo 'Lampiran:'; 
            echo  $hm['lampiran']; 
            ?>
 </div>
       
<br><br><br><br><br><br><br>

 <footer>
            <section id="spons">
                <div class="container">
                    <div class="box">
                        <p>Download Aplikasi Mobile LAPOR!</p>
                        <a href="https://play.google.com/store/apps/developer?id=affandiStudio">
                        <img src="google.png" width="150"></a>

                    </div>
                    <div class="box">
                            <p>Dikembangkan Oleh : </p>
                            <a href="http://itera.ac.id">
                            <img src="logo itera oke.png" width="90" ></a>


                     </div>
                    <div class="box">
                            <p>Lebih Dekat dengan Kami!</p>
                            <a href="https://www.instagram.com/iteraofficial/">
                            <img src="Instagram_icon.png" width="49" ></a>
                            <a href="https://www.facebook.com/itera.official/">
                            <img src="facebook.png" width="52"></a>

                        </div>

                </div>
            </section>
            <p id="copyright" > Copyright  @2019</p>

        </footer> 
  
</body>
</html>
