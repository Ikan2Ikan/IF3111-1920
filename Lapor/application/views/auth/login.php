<html>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
    <title>LOGIN PAGE</title>
</head>

<body>
    <?= $this->session->flashdata('message'); ?>
    <div class="postengah">
    <div class="judul">
        <h1><br><br>Login Page</h1>
        <form action=<?php echo base_url('auth/aksi_login'); ?> method="POST">
            <input type="text" id="ip1" placeholder="Enter Email Address" name="email">
            </br></br>
            <input type="password" id="ip1" placeholder="Password" name="password">
            </br></br>
            <button type="submit" name="submit">Login</button>
        </form>
        <a href="">Lupa Password?</a>
        </br>
        <a href="<?php echo base_url(''); ?>auth/registration">Belum Punya Akun?</a>
    </div>
    </div>
</body>

</html>