<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
    <body>
        <div class= "box">
            <div class= "search">
                <br>
                <form method="post" action="">
                    <input id="Search" type="text" name="search"> <button type='submit' class='tcari'>SEARCH</button>
                </form>
                <div class="posting">
                <a href="<?= base_url(); ?>C_buat_lapor">Buat Laporan/Komentar(+)</a>
            </div>
            </div>
            <br>
        </div>
    </body>
</html>