<!DOCTYPE html>
<html>
<head>
	<title>Lapor</title>
  <link rel="stylesheet" type="text/css" href="assets/css/nav.css">

</head>
<body>

  <!-- Navigasi -->
  <b:else/>
  <nav id='nav'>
  <a class='toggleMenu' href='#'><i class='fa fa-th-list'/> Menu</a>
 <!-- navigation menu start -->
 <ul class='nav nav-menu2'>
  <li><a class='active' href="<?php echo base_url('home'); ?>">Home</a></li>
  <li><a href='<?php echo base_url('login'); ?>'>Login</a>
   </ul>
  </li>
 </ul>
 <form action='/search' id='search-form' method='get' 
style='display: inline;'>
<table>
  <tbody>
    <tr>
      <td class='search-box'>
<input id='search-box' name='q' onblur='if
(this.value==&apos;&apos;)this.value=this.defaultValue;' onfocus='if
(this.value==this.defaultValue)this.value=&apos;&apos;;' type='text' 
value='Search...' vinput=''/>
</td> 
<td class='search-button'><input id='search-button' type='submit' 
value=''/></td>
</tr>
</tbody>
</table>
</form>
  </nav>
  </b:if>
  <div class='clear'/>
  <!-- navigation menu end -->

  <!-- Home --> 

  <div class="home"> 
    <img src="assets/images/index_itera.png"> 
    <br>

    <div class="home_container"> 
      <div class="container"> 
        <div class="row"> 
          <div class="col"> 
            <div class="home_content"> 
              <div class="home_title">Institut Teknologi Sumatera</div> 
              <div class="home_text">Lapor Simple</div> 
            </div> 
          </div> 
        </div> 
      </div> 
    </div> 
  <center><a href="<?php echo base_url('buat') ?>"><h3>Buat laporan/ komentar</h3></a></center>
<br>
<br>
  <legend>laporan/komentar terakhir</legend>
  <hr>
  
  <?php foreach ($berita as $berita) {?>
  <div class="Artikel">
    <p><?php echo $berita->isi ?></p>
    <br>

    <ul>
    <li>Lampiran: <?php echo $berita->file ?></a></li>
    <li>Waktu: <?php echo $berita->waktu ?></li>
    <li style="float: right;"><a href="<?php echo base_url('home/read/'.$berita->id_laporan) ?>">lihat selengkapnya></a></li>
    </ul>
    <br>
    <br>
    <hr>
    <?php } ?>
  </div>
<br>
<br>
      <div class="page">
        <?php if (isset($page) && $total > $limit) {
               $page;
        }?>
        </div>

<!-- footer -->
     <div id="footer">
        <div class="footer-text">
          LAMPOR SIMPLE ITERA
      </div>
        <div class="footer-content">
            Copyright &copy; Dewi Rahayu & Anggar Liliana
        </div>
      </div>
</div>

</body>
</html>
