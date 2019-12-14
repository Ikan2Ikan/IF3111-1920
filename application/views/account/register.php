<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar-LAPOR!</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/account.css" type="text/css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
</head>

<body>
    <div class="row-flex">
        <div class="bag-kiri">
            <div id="card">
                <div id="card-content">
                    <div id="card-title">
                        <h2>DAFTAR</h2>
                        <div class="underline-title"></div>
                        <form method="post" class="form">
                            <label for="nama_lengkap" class="pass">Nama Lengkap</label>
                            <input id="nama_lengkap" class="form-content" type="text" name="nama_lengkap" autocomplete="on" required />
                            <div class="form-border"></div>
                            <label for="username" class="pass">Username</label>
                            <input id="username" class="form-content" type="text" name="username" autocomplete="on" required />
                            <div class="form-border"></div>
                            <label for="email" class="pass">Email</label>
                            <input id="email" class="form-content" type="email" name="email" autocomplete="on" required />
                            <div class="form-border"></div>
                            <label for="password" class="pass">Password</label>
                            <input id="password" class="form-content" type="password" name="password" required />
                            <div class="form-border"></div>
                            <label for="password2" class="pass">Verifikasi Password</label>
                            <input id="password2" class="form-content" type="password" name="password2" required />
                            <div class="form-border"></div>
                            <a href="#">
                                <legend id="forgot-pass">Forgot password?</legend>
                            </a>
                            <input id="submit-btn" type="submit" name="submit" value="DAFTAR" />
                            <a href="#" id="sign">Sudah Punya akun?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="bag-kanan block-akun-showcase">
            <img src="<?= base_url(); ?>assets/img/register-bg.png" alt="">
        </div>
    </div>
</body>

</html>