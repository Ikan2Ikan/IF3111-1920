<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/daftar.css'?>">
</head>
<body>
<header>
<div class="container">
    <div id="bagiankiri">
      </div>
          <nav>
			<ul>
            <li class="active"><a href="#" > Tentang Lapor! </a></li>
             <li> <a href="#"> Laporan </a></li>
             <li> <a href="#"> Cari Aduan </a></li>
             <div class="box">
  		<div class="container-1">
      		<span class="icon"><i class="fa fa-search"></i></span>
      			<input type="search" id="search" placeholder="Search..." />
  			</div>
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
 
<h1>Silahkan Daftar Terlebih dahulu Untuk Bisa Melakukan Laporan<br/></h1>

<div class="daftar">
	<nav id="komen">
    <form class="form-daftar" method="POST">
    <input class="inputdaftar" type="nama" placeholder="Nama lengkap"> </input>
	<input class="inputdaftar" type="email" placeholder="Email"> </input>
	<input class="inputdaftar" type="password" placeholder="Password"> </input>
	<label>Gender :</label>
        <label><input type="radio" name="jenis_kelamin" value="Man" /> Man</label>
        <label><input type="radio" name="jenis_kelamin" value="Woman" /> Woman</label>
<br><br>        
		<input type="submit" class="tombol_daftar" value="DAFTAR"><br/><br/>
		</form>
    </nav>
    </div class="daftar">
        	
	</div>
    
<footer>
            <section id="spons">
                <div class="container">
                    <div class="box">
                        <p>Download Aplikasi Mobile LAPOR!</p>
                        <img src="<?php echo base_url().'assets/img/google.png'?>" width="150">

                    </div>
                    <div class="box">
                            <p>Dikembangkan Oleh : </p>
                            <img src="<?php echo base_url().'assets/img/logo itera oke.png'?>" width="90" >


                     </div>
                    <div class="box">
                            <p>Lebih Dekat dengan Kami!</p>
                            <img src="<?php echo base_url().'assets/img/Instagram_icon.png'?>" width="49" >
                            <img src="<?php echo base_url().'assets/img/facebook.png'?>" width="52">

                        </div>

                </div>
            </section>
            <p id="copyright" > Copyright  @2019</p>

        </footer> 
</body>
</html>
