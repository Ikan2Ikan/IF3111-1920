<html>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
    <script src="assets/js/kode.js"></script>
    <title>REGISTRATION PAGE</title>
</head>

<body>
    </br></br></br>
    <div class="postengah">
        <h1>Registration Page</h1>
        <form method="post" action="<?php echo base_url(''); ?>auth/registration">
            <input type="text" id="name" placeholder="Full Name" name="name" value="<?= set_value('name'); ?>">
            </br></br>
            <input type="text" id="email" placeholder="Email Address" name="email" value="<?= set_value('email'); ?>">
            </br></br>
            <input type="password" id="password1" placeholder="Password" name="password1">
            </br></br>
            <input type="password" id="password2" placeholder="Repeat Password" name="password2">
            </br></br>
            <button type="submit" name="submit">Register Account</button>
        </form></br>
        <a href="<?php echo base_url(''); ?>auth">Sudah Punya Akun? Login! </a>
    </div>
</body>

</html>