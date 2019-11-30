<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE HTML>
<HTML lang="en-US">
    <body>
        <tr>
            <td>
                <p> Buat Laporan/Komentar </p>
                <hr width="100%" color="gray" />
            </td>
        </tr>

        <!-- <div class="loadkomentar">
            <tr>
                <td><label for="textfield"></label>
                    <label for="textarea"></label>
                    <textarea name="Pesan"></textarea>
                </td>
            </tr>
        </div>
        -->
        <tr>
            <td>
                <p>
                <textarea class="komentar" placeholder="Laporan/Komentar"></textarea>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                <select class="opsi">
                    <option> Pilih Aspek Pelaporan/Komentar </option>
                    <option> Laporan </option>
                    <option> Komentar </option>
                </select>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                <input class="lampiran" type="file" name="upload" />
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                <input class="submit" type="submit" value="Buat LAPOR!" />
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <hr width="100%" color="gray" />
            </td>
        </tr>
    </body>
</HTML>