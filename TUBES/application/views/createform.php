<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE HTML>
<HTML lang="en-US">
    <body>
        <input class="inputjudul" [type="text" ]:focus placeholder="Buat Laporan/Komentar" />
        <hr width="76.5%" color="gray" />

        <!-- <div class="loadkomentar">
            <tr>
                <td><label for="textfield"></label>
                    <label for="textarea"></label>
                    <textarea name="Pesan"></textarea>
                </td>
            </tr>
        </div>
        -->

        <p>
            <textarea class="komentar" placeholder="Laporan/Komentar"></textarea>
        </p>

        <p>
            <select class="opsi">
                <option> Pilih Aspek Pelaporan/Komentar </option>
                <option> Laporan </option>
                <option> Komentar </option>
            </select>
        </p>

        <p>
            <input class="lampiran" type="file" name="upload" />
        </p>

        <p>
            <input class="submit" type="submit" value="Buat LAPOR!" />
        </p>
        
        <hr width="76.5%" color="gray" />
    </body>
</HTML>