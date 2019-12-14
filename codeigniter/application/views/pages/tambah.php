<div class="container">
    Buat Laporan 
    <hr>
    <form action="<?php echo base_url() . 'tambah/buat_tambah'; ?>" method= 'POST' >
        <textarea name="lapor" id="" cols="110" rows="30" placeholder='Tambah Laporan/Komentar' ></textarea> 
        <br>
        <br>
        <select name="aspek" class="aspek_pelapor">
            <option value=""> Pilih Aspek Pelaporan/Komentar</option>
            <option value="Dosen"> Dosen</option>
            <option value="Staff"> Staff</option>
            <option value="Mahasiswa"> Mahasiswa</option>
            <option value="Infrastruktur"> Infrastruktur</option>
            <option value="Pengajaran"> Pengajaran</option>
        </select>
        <br>
        <br>
        <input class="lampiran" type="file" name="lampiran" > 
        <br>
        <br>
        <button class="button_tambah" > Buat LAPOR!</button>
    </form>
</div>
