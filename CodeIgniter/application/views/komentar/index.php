<div class= "container">
    <div class="header">
        <h1 class="judulapp">LAPOR ITERA!</h1>
    </div>
    <div class="content">
        <div class="head">
            Buat Laporan/Komentar
        </div>
        <hr>

        <form method="post" action="" encytpe="multipart/form-data">
            <?php if(validation_errors()) : ?>    
                <?=validation_errors()?>
            <?php endif ;?>
        
            <div class="main">
                <input type="text" name="judul_komentar" placeholder="Masukkan Judul Laporan/Komentar" >
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