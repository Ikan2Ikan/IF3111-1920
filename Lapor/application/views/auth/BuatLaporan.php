<html>
<head>
    <title>Buat Laporan!</title>
</head>
<body>

<center>
    <h1> BUAT LAPORAN <br> </h1>
</center>

<div>Buat Laporan atau Komentar<br> </div>
<hr>
<center>

<form method="POST" action="">
        <textarea type="text" name="komentar" placeholder="Laporan/Komentar" ></textarea>
</center>
<br>
<div >
    <select name="kategori">
        <option value="none">Pilih Aspek Pelaporan/Komentar</option>
        <option value="Akademik">Akademik</option>
    </select>
    
    <br><br>
    
    <input type="file" name="file">
    <br>

<div>
    <button type="submit" name="submit">Buat Laporan !</button>
</div>
</form>

</body>
</html>