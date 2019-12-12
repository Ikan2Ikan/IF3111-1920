<div class= "isi">
    <h1>LAPOR ITERA!</h1>
    <div class="head">
        Buat Laporan/Komentar
    </div>
    <hr>

    <form method="post" action="#">
        <div class="main">
            <input type="text" placeholder="Title" name="judul_komentar">
            <textarea name="komentar" placeholder="Laporan/Komentar"></textarea>
        </div><br>

        <div class="kategori">
            <select name="kategori">
                <option default>Pilih Kategori Pelaporan/Komentar</option>
                <option value="Keuangan">Keuangan</option>
                <option value="Infrastruktur">Infastruktur</option>
                <option value="Tenaga Pendidik">Tenaga Pendidik</option>
                <option value="Kurikulum">Kurikulum</option>
                <option value="Tahap Persiapan Bersama">Tahap Persiapan Bersama</option>
            </select>
        </div><br>

        <div class="file">
            <input class="input_file" type="file" name="lampiran">
        </div><br>
        
        <div class="tombol_submit">
            <button type="submit" name="submit">Buat LAPOR!</button>
        </div>
    </form>

    <br><br><br>
    <hr>
</div>