<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/buat.css'?>">
<title>Buat Laporan</title>
</head>
<body>
<header>
<div class="container">
    <div id="bagiankiri">
      </div>
          <nav>
			<ul>
            <li class="active"><a href="#" > Tentang Lapor! </a></li   
                     
<!-ini yos yg gua hapus->
           
           <div class="box">
		</div>
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
 

<center><h1>SIMPLE LAPOR!</h1></center>
<div class="kotak_laporan">
    <nav id="komen">
    		<p>Buat Laporan/Komentar</p>
		<hr>
		<form action="buat.php" method="POST">
	<!–buat laporan–>
	<textarea name="komen" cols="70" rows="10" ></textarea>
<br><br>
	<!-AspekLaporan-> 
		<select name="My Lab">
			<option value="Indo" >Pilih Aspek Pelaporan/Komentar </option>
		</select>

<br /> <br />
	<!-input File->
		<input type="file" name="upload" />

<br /><br />
	<!-submit laporan->
		<input type="submit" class="submit" value="BUAT LAPOR!" />
</form>
</div class="login">
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
