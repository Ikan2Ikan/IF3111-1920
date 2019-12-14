<?php 

	if($this->session->flashdata('email-ada')) {
	echo "
		<script>
		alert('email sudah terdaftar');
		</script>
	";

	}

 ?>

<h3>Daftar Akun Laporan</h3>

<form method="POST" onSubmit="return validasi()" action="">


			  	<?php if(validation_errors()) : ?><!--  cek apakah ada eror -->

			  	
			  	<?php echo validation_errors(); ?>
			  	<?php echo "erors"; ?>

			    <?php endif; ?>


<ul>
	<li>
		<label>Email  </label>
		<input type="text" name="email" placeholder="masukan email" id="email">
	</li>

	<li>
		<label>Nama  </label>
		<input type="text" name="nama" placeholder="masukan nama" id="nama">
	</li>

	<li>
		<label>Password  </label>
		<input type="password" name="password" placeholder="masukan password" id="password">
	</li>
	<button type="submit" name="tambah">Daftar</button>
</ul>
	
</form>

<script>
   function validasi() {
    var email = document.getElementById("email").value;
    var nama = document.getElementById("nama").value;
    var password = document.getElementById("password").value;
   
    if (email != "" && nama != "" && password != ""){
      return true;
    } 
    else{
      alert('Semua Kolom Harus diisi!');
      return false;
    }
  }

</script>