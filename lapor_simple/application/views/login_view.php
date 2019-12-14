<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<?php
if ($this->session->userdata('masuk') == TRUE) {
	redirect('buat');
} ?>
<html lang="en">

<head>
	<title>LAPOR ITERA</title>
	<link rel="stylesheet" type="text/css" href="assets/css/login_style.css">
</head>
<body>
 
	<h1>LAPOR ITERA<br/>
	Layanan Mudah Pelaporan di Kampus</h1>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form class="class_login" action="<?php echo base_url().'index.php/login/login' ?>" method="post">
		<?php if ($this->session->flashdata('sukses')){ ?>
							<div class="alert alert-success" role="alert">
								<?php echo $this->session->flashdata('sukses'); ?>
							</div>
					<?php }elseif ($this->session->flashdata('error')){ ?>
							<div class="alert alert-warning" role="alert">
							<?php echo $this->session->flashdata('error') ?>
							</div>
					<?php }; ?>
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username atau email .." required>
 
			<label>Password</label>
			<input type="text" name="password" class="form_login" placeholder="Password .." required="">
 			
 			<button class="tombol_login">Login</button>
 			<div id="notifications_berhasil"><?php echo $this->session->flashdata('msg'); ?></div>
			<br/>
			<br/>
			
		</form>
		
	</div>
	
</div>
</body>
</html>