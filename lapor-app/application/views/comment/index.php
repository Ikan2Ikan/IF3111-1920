<div class="content">
    <h1>SIMPLE LAPOR!</h1>
    <!-- Contoh pake fontawesome -->
    <i class="fa fa-plus-circle" aria-hidden="true"></i>

    <div class="head">
        Buat Laporan/Komentar
    </div>

    <hr>

    <form method="post" action="#">

        <div class="main">
            <textarea name="comment" placeholder="Laporan/Komentar"></textarea>
        </div>

        <br>

        <div class="aspect">
            <select name="aspect">
                <option default>Pilih Aspek Pelaporan/Komentar</option>
                <option value="Dosen">Dosen</option>
                <option value="Staff">Staff</option>
                <option value="Mahasiswa">Mahasiswa</option>
                <option value="Infrastruktur">Infrastruktur</option>
                <option value="Pengajaran">Pengajaran</option>
            </select>
        </div>

        <br>

        <div class="file">
            <input class="file_in" type="file" name="lampiran">
        </div>

        <br>

        <div class="btn_submit">
            <button type="submit" name="submit">Buat LAPOR!</button>
        </div>
    </form>

    <br>

    <br>

    <hr>
</div>