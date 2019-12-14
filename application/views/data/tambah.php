<!doctype html>
<head>
    <title>Laporan</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/style.css">
</head>
<body>
<fieldset>    
        <h1 class="judul">LAPOR in AJA!</h1>
<?= validation_errors();?>
<div class="tambah">
<form action="" method="post" enctype="multipart/form-data"> 

    <p>Silahkan ketikkan laporan/komentar yang ingin anda ajukan</p>
    <p>Laporan/komentar dapat berupa pernyataan atau pertanyaan, dan hanya dapat dilakukan berdasarkan aspek-aspek dibawah ini</p>
    <hr/>
    <label for="lapor">Buat Laporan/Komentar</label></br>
    <hr />             
    <!--Laporan/Komentar-->
    <textarea name="lapor" id="lapor" placeholder="Laporan/Komentar" row="10" cols="100"></textarea>
    <br><br>
    <div class="aspek">
        <select id="aspek" name="aspek">
            <option>Pilih Aspek Pelaporan/Komentar</option>
            <option>Administrasi</option>
            <option>Biaya Iuran</option>
            <option>BUMN
            <option>BPJS</option>
            <option>Cara pengajuan kecelakaan kerja</option>
            <option>Data dan Informasi Umum</option>
            <option>Energi dan Sumber Daya Alam</option>
            <option>Fasilitas Umum</option>
            <option>Gangguan aplikasi online</option>
            <option>Harga Pasar</option>
            <option>Informasi Nomor kartu</option>
            <option>Infrastruktur</option>
            <option>investasi MIGAS</option>
            <option>Jam Operasional Kantor</option>
            <option>Keamanan dan ketertiban Masyarakat</option>
            <option>Keluhan Masyarakat</option>
            <option>Lembaga Ombudsman</option>
            <option>Pariwisata</option>
            <option>Pensiunan</option>
            <option>Reformasi Birokrasi</option>
            <option>Situasi Khusus</option>
            <option>Kebencanaan</option>
        </select>
        </select>
    </div>
        <div class="upload">
        <input type="file" name="gambar" id="gambar">
        </div>
        <br>
        <div class="tombol">
            <input type="submit" name="tambah" value="Buat LAPOR!">
        </div>
        <hr />
  
 </form>
 </div>
</fieldset>
</body>