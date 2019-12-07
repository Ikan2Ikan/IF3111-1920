<html>
    <head>
        <title>SIMPLE LAPOR</title>
    </head>
    <body>
    <h1>SIMPLE LAPOR!</h1>
    
    <form action="buatLaporan_hasil.php" method="POST" enctype="multipart/form-data">
        <textarea rows="20" cols="80">Laporan/Komentar</textarea>

        <br>
        <select name="aspek" style="width: 150px">
            Pilih Aspek Pelaporan/Komentar
            <option value="1">A</option>
            <option value="2">B</option>
            <option value="3">C</option>
            <option value="4">D</option>
        </select>
        <br>

        
        <input type="file" name="fileLapor" id="fileLapor">
        <br>
        <br>

        <button type="submit" name="buatLapor" class="btn btn-primary">Buat LAPOR!</button>
    </form>
        
    </body>
</html>