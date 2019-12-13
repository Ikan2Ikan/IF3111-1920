<div class= "container">
    <div class="content">
        <h1>LAPOR ITERA!</h1>
        <div class="head">
            Buat Laporan/Komentar
        </div>
        <hr>

        <form method="post" action="#" encytpe="multipart/form-data">
            <div class="main">
                <input type="text" placeholder="Masukkan Judul Laporan/Komentar" name="judul_komentar">
                <textarea name="komentar" placeholder="Masukkan Laporan/Komentar"></textarea>
            </div><br>

            <div class="kategori">
                <select name="kategori">
                    <option default>Pilih Kategori Pelaporan/Komentar</option>
                    <option value="Dosen">Dosen</option>
                    <option value="Staff">Staff</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Infrastruktur">Infrastruktur</option>
                    <option value="Pengajaran">Pengajaran</option>
                </select>
            </div><br>

            <div class="file">
                <input class="input_file" type="file" name="lampiran">
            </div><br>
            
            <div class="tombol_submit">
                <button type="submit" name="submit">Buat LAPOR!</button>
            </div>
        </form><br><br>
        <hr>
    </div>
</div>