<div class="container">
    <div class="content">
        <div class="heading-icon">
            <img src=<?= base_url('') ?> alt="">
            <h1>ITERA LAPOR !</h1>
        </div>

        <div class="header">
            Buat Laporan/Komentar
        </div>

        <hr>

        <form method="post" action="" enctype="multipart/form-data">


            <div class="keterangan">
                <input type="text" placeholder="Judul Laporan/Komentar" name="comm_title">
                <br>
                <textarea name="comment" placeholder="Laporan/Komentar Terakhir"></textarea>
            </div>

            <br>

            <div class="aspek">
                <select name="aspek">
                    <option default>Pilih Aspek Pelaporan/Komentar</option>
                    <option value="Dosen">Dosen</option>
                    <option value="Staff">Staff</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Infrastruktur">Infrastruktur</option>
                </select>
            </div>

            <br>

            <div class="file">
                <input class="file_in" type="file" name="lampiran">
            </div>

            <br>

            <div class="lapor">
                <button type="submit" name="submit">Buat LAPOR!</button>
            </div>
        </form>

        <br>

        <br>

        <hr>
    </div>
</div>