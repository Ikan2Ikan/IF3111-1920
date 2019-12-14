<!DOCTYPE html>
<html>
<head>
  <title>tampilan</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/tampilan.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/home.css'?>">
  <script type="text/javascript">
        function load(){
          var ajax = new XMLHttpRequest();
          ajax.onreadystatechange = function(){
            if (ajax.readyState == 4 && ajax.status == 200){
              var data = JSON.pasre(this.responseText);
              for(x in data){
               txt =+ <div class="box-post">
                  <div class="isi">
                  <p>data[x].laporan</p>
                </div>
              </div>
                }
                document.getElementsById('laporan').innerHTML = txt;
            }
          };
          ajax.open("GET", "<?php echo site_url('lapor/data_laporan')?>", true);
          ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          ajax.send();
        }
    </script>
</head>
<body>
<header>
<div class="container">
    <div id="bagiankiri">
      </div>
          <nav>
			<ul>
            <li class="active"><a href="<?php echo site_url('lapor/tentang')?>" > Tentang Lapor! </a></li>
          </ul>
      </nav>
     <div id="bagiankanan">
	      <nav>
            <ul>
             <li>
	        <li> <a href="<?php echo site_url('lapor/login')?>"> Masuk </a></li> 
		       <li> <a href="<?php echo site_url('lapor/daftar')?>"> Daftar </a></li>
              </li>
             </ul>
         </nav>
        </div>
     </div>
  </header>
 
<p class="judul">SIMPLE LAPOR!</p>
<div class="login">
 <div class="lapor">
    <form class="pencarian" onSubmit="return pencarian(this)" action="<?php echo base_url('cari')?>" method="post">
        <input class="search" type="text" name="keyword" placeholder="search" autocomplete="off" autofocus>	
       
        <input class="button" type="submit" name="submit"  placeholder="cari" value="Cari">	 

    </form>

   
    <a class="buat" href="<?php echo site_url('lapor/buat')?>">Buat Laporan / Komentar &nbsp<img src="<?php echo base_url().'assets/img/tambah.png'?>" height="13px"></a>
        <br><hr><br>
        <section class="hangat">
  <div class="hangat-box">
    <h1 class="notop" style="text-align: left; padding-top: 0em; ">Laporan Terhangat</h1>

    <div class="box" id="laporan">
    </div>
    </div>
  </section>
     </div></div>
 </div>
 <footer>
            <section id="spons">
                <div class="container">
                    <div class="box">
                        <p>Download Aplikasi Mobile LAPOR!</p>
                        <a href="https://play.google.com/store/apps/developer?id=affandiStudio">
                        <img src="<?php echo base_url().'assets/img/google.png'?>" width="150"></a>

                    </div>
                    <div class="box">
                            <p>Dikembangkan Oleh : </p>
                            <a href="http://itera.ac.id">
                            <img src="<?php echo base_url().'assets/img/logo itera oke.png'?>" width="90" ></a>


                     </div>
                    <div class="box">
                            <p>Lebih Dekat dengan Kami!</p>
                            <a href="https://www.instagram.com/iteraofficial/">
                            <img src="<?php echo base_url().'assets/img/Instagram_icon.png'?>" width="49" ></a>
                            <a href="https://www.facebook.com/itera.official/">
                            <img src="<?php echo base_url().'assets/img/facebook.png'?>" width="52"></a>

                        </div>

                </div>
            </section>
            <p id="copyright" > Copyright  @2019</p>

        </footer> 
  
</body>
</html>
