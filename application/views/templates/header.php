<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/style.css')?>">
    <title><?php echo $judul; ?> | Lapor</title>
    <script type="text/javascript" src="<?php echo base_url('asset/js/script.js')?>"></script>
</head>

<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">Simple </span>Lapor!</h1>
            </div>

            <nav>
                <ul>
                    <li class="current"><a href="<?php echo base_url()?>">Home</a></li>
                    <li class="current"><a href="<?php echo base_url('home/loadlapor')?>">Create</a></li>
                </ul>
            </nav>
        </div>
    </header>
