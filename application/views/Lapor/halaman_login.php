<div class></div>
<?php if($this->session->flashdata('login_gagal')) {
	echo "
		<script>
		alert('login gagal');
		</script>
	";

	}elseif($this->session->flashdata('email_tida_ada')) {
	echo "
		<script>
		alert('email atau password typo');
		</script>
	";
}else if($this->session->flashdata('anda belum login')){
	echo "
		<script>
		alert('di harap untuk login');
		</script>
	";
}else if($this->session->flashdata('daftar sukses')){
	echo "
		<script>
		alert('Daftar Berhasil');
		</script>
	";
}

?>
<div class="backgroundlogin">
<h3>Login Akun Laporan</h3>


<form method="post" action="">

	<ul>
	<li>
		<label>Email  </label>
		<input type="text" name="email" placeholder="masukan email" autocomplete="none">
	</li>


	<li>
		<label>Password  </label>
		<input type="password" name="password" placeholder="masukan password">
	</li>

	
	<button type="submit" name="submit">Masuk</button>
</ul>

</form>
</div>