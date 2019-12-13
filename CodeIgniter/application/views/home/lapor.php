
    <h3>Laporan</h3>
    <hr><br>

    <form method="POST" action="upload_laporan" name="myForm" onsubmit="return validateForm()">
        <textarea class="area" id="card" name="laporan" placeholder=" Laporan/Komentar"></textarea> <span></span>
        <br><br>
        <select style="height: 40px;" name="aspek">
            <option>Pilih Aspek Pelaporan/Komentar:</option>
            <option>Dosen</option>
            <option>Staff</option>
            <option>Mahasiswa</option>
            <option>Infrastruktur</option>
            <option>Pengajaran</option>
        </select>
        <br><br>
        Pilih file: <input type="file" name="file" placeholder="File"  name="kirim" accept=".img, .png, .jpeg, .jpg, .doc, .docx, .xls, .xlsx, .ppt, .pptx, .pdf">
        <?php
            date_default_timezone_set('Asia/Jakarta');
        ?>
        <input type="text" name="date" value="<?php echo date('d-m-Y H:i:s')?>" hidden>
        <br><br>
        <input type="submit" class="but" value="Buat LAPOR!"><br><br>

        <hr>
    </form>

</body>
</html>