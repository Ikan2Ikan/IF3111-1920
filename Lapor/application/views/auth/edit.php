<html>
<head>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/kode.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
    <title>Buat Laporan!</title>
</head>
<body>
<div class="border">
<center>
    <h1> BUAT LAPORAN <br> </h1>
</center>

<div>Buat Laporan atau Komentar<br> </div>
<hr>
<center>
<?php foreach($komentar as $komen) {
?>
<form method="POST" action="<?php echo base_url('auth/update/').$komen->id ?>" onSubmit="return valid(this)">

        <textarea type="text" name="komentar"><?php echo $komen->isi; ?></textarea>

</center>
<br>
<div class="poskiri">
    <select name="kategori">
        <option value="none">Pilih Aspek Laporan/Komentar</option>
        <option value="Akademik">Akademik</option>
        <option value="nonakademik">NonAkademik</option>
        <option value="fasilitas">Fasilitas</option>
        <option value="lainlain">Lain-Laink</option>
    </select>
    
    <br><br>
    
    <input type="file" name="file" accept=".img, .png, .jpeg, .jpg, .doc, .docx, .xls, .xlsx, .ppt, .pptx, .pdf">
    
    </div>
    <br>

<div id="tombol">
    <button type="submit" name="submit">UPDATE KOMENTAR !</button>
</div>
</form>

<?php
}
?>
</body>
</html>