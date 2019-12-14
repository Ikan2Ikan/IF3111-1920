
    <p>Laporan</p>
    <hr><br>

    <form method="POST" action="<?= base_url(). 'home/update_laporan'; ?>" name="form">
        <input type="text" name="id" value="<?= $laporan['id']?>" hidden>
        <textarea name="laporan" placeholder=" Laporan/Komentar"><?= $laporan['laporan'] ?></textarea> <span></span>
        <br><br>
        <select style="height: 40px;" name="aspek">
            <?php foreach($aspek as $tampil) : ?>
                <?php if( $tampil == $laporan['aspek']) : ?>
                    <option value="<?= $tampil; ?>"selected><?= $tampil; ?></option>
                <?php else : ?>
                    <option value="<?= $tampil; ?>"><?= $tampil; ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
        <br><br>
        Pilih file: <input type="file" name="file" placeholder="File"  name="kirim" accept=".img, .png, .jpeg, .jpg, .doc, .docx, .xls, .xlsx, .ppt, .pptx, .pdf">
        <?php
            date_default_timezone_set('Asia/Jakarta');
        ?>
        <input type="text" name="date" value="<?php echo date('d-m-Y H:i:s')?>" hidden>
        <br><br>
        <input type="submit" class="but" value="Edit LAPOR!"><br><br>

        <hr>
    </form>

</body>
</html>