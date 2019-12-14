
<fieldset>
	<div class="wrapper">
<h1>Login</h1>
</div>
<br><br>

<div class="tambah">
<?= validation_errors();?>
<form method="post" action="<?=base_url('auth')?>" >
<label for="username">Username</label>
<input type="text" name="username" id="username" placeholder="Masukkan username disini...">
<!-- <?= form_error('username');?> --> 
<br><br>
<label for="password">Password</label>
<input type="password" name="password" id="password" placeholder="Masukkan password disini...">
<!-- <?= form_error('password');?> -->
<br><br>
<button type="submit" value="Login">Login</button>
</form>
</div>
</fieldset>