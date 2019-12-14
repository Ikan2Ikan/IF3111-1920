<!DOCTYPE html>
<html>
<head>
  <base href="<?php echo $this->config->base_url(); ?>" />
  <title>Lapor Simple</title>
  <link rel="stylesheet" type="text/css" href="assets/css/nav.css">
</head>
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
<body>
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

  <legend>Buat Laporan/Komentar</legend>
  <hr>

  <form action="<?php echo base_url('buat/simpan') ?>" method="POST" enctype="multipart/form-data">
    <div class="row">
      <textarea name="isi" placeholder="Laporan/komentar" required></textarea>
    </div>
    <div class="row">
      <select name="aspek" required>
        <option>Kategori</option>
        <option value="Fasilitas">Fasilitas</option>
        <option value="Dosen">Dosen</option>
        <option value="Penilaian Dosen">Dosen</option>
        <option value="Administrasi">Administrasi</option>
      </select>
    </div>
    <div class="row">
      <input type="file" name="file" required>
    </div>
    <div class="row">
      <input type="submit" value="Buat Lapor!" name="submit">
    </div>
  </form>
  <br>
  <br>
  <hr>
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
