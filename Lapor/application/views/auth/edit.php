<html>
<head>
    <script src="assets/js/kode.js"></script>
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
<form method="POST" action="<?php echo base_url('auth/update/').$komen->id ?>" onSubmit="valid()">

        <textarea type="text" name="komentar"><?php echo $komen->isi; ?></textarea>

</center>
<br>
<div class="poskiri">
    <select name="kategori">
        <option value="none">Pilih Aspek Pelaporan/Komentar</option>
        <option value="Akademik">Akademik</option>
        <option value="nonakademik">Non-Akademik</option>
        <option value="fasilitas">fasilitas</option>
        <option value="lainlain">Lain-Laink</option>
    </select>
    
    <br><br>
    
    <input type="file" name="file" accept=".img, .png, .jpeg, .jpg, .doc, .docx, .xls, .xlsx, .ppt, .pptx, .pdf">
    
    </div>
    <br>

<div id="tombol">
    <button type="submit" name="submit">UPDATE !</button>
</div>
</form>

<?php
}
?>

</body>
</html>