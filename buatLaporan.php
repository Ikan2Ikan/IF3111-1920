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
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
        </select>
        <br>

        
        <input type="file" name="fileLapor" id="fileLapor">
        <br>
        <br>

        <button type="submit" name="buatLapor" class="btn btn-primary">Buat LAPOR!</button>
    </form>
        
    </body>
</html>