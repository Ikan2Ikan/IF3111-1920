<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE HTML>
<HTML lang="en-US">
    <body>
    <?php echo form_open_multipart('crud/aksi'); ?>
    <form action="<?php echo base_url(). 'crud/aksi'; ?>"method="post">
        <tr>
            <td>
                <p> Buat Laporan/Komentar </p>
                <hr width="100%" color="gray" />
            </td>
        </tr>

        <tr>
            <td>
                <p>
                <textarea name="isi_laporan" class="komentar" placeholder="Laporan/Komentar"></textarea>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>
                <select class="opsi" name="kategori">
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
                <input class="lampiran" type="file" name="lampiran" />
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