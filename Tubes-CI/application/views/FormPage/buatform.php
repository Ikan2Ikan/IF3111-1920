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
                <a href="<?= base_url(); ?>Home"><button class="button3"><</button>Back </a>
            </td>
        </tr>
    </body>
</HTML>