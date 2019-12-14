<section class="create-laporan">
        <center>
            <h2>BUAT LAPORAN</h2>
        </center>
        <form action="tambah" method="POST" enctype="multipart/form-data">
        
        <div class="container">
            <div class="styled-input wide">
                <textarea name='komentar' required></textarea>
                <label>Message</label>
                <span></span> </div>

            <div class="styled-input">
                <input type="file" name="lampiran" class="button_3">
                <span></span> </div>

            <div class="styled-input wide">
                <select name="aspek" id="" class="button_3">
                    <option disabled selected value>Pilih Aspek Pelaporan/Komentar</option>
                    <option value="Sosial">Dosen</option>
                    <option value="Politik">Staff</option>
                    <option value="Akademik">Mahasiswa</option>
                    <option value="Lainnya">Infrastruktur</option>
                    <option value="Lainnya">Pengajaran</option>
                </select>
            <span></span> </div>

            <div class="styled-input-button">
                <button type="submit" class="button_1" name="submit">Buat Laporan</button>
            <span></span> </div>

        </form>
        </div>
    </section>