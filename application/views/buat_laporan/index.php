<script language='javascript'>
    function validasi(form){
        var inputFile = document.getElementById('myFile');
        var pathFile = inputFile.value;
        var ekstensiOk = /(.doc|.docx|.xls|.xlsx|.ppt|.pptx|.pdf)$/i;

     
        // validasi field laporan/komentar

        if (form.laporan.value == ''){
            alert("Laporan / komentar harus diisi!");
            form.laporan.focus();
            return (false);
        }
        var mincar = 20;
        if (form.laporan.value.length < mincar){
            alert("Minimal jumlah kata dalam laporan / komentar adalah 20 kata.");
            form.laporan.focus();
            return (false);
        }
        
        // validasi field aspek pelaporan
        if (form.aspek.value =="pilih"){
            alert("Aspek pelaporan harus dipilih!");
            return (false);
        }
        // validasi field file
        if (form.myFile.value == ''){    
            alert ("File tidak boleh kosong!");
            form.myFile.focus();
            return (false);
        }
        if(!ekstensiOk.exec(pathFile)){
            alert('Silakan upload file yang memiliki ekstensi .doc/.docx/.xls/.xlsx/.ppt/.pptx/.pdf');
            inputFile.value = '';
            return (false);
        }

        return (true);
    }
    
</script>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $judul; ?></title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=1.1">
</head>
<body>
<p class="judul">SIMPLE LAPOR!</p>
    <div class="lapor">
    <p class="subjudul">Buat Laporan / Komentar</p>
    <hr>


    
        <form action="" method="post" onSubmit="return validasi(this)" enctype="multipart/form-data">
            <br>
                <textarea name="laporan" ></textarea><br>
            <br>
                <select id="aspek" name="aspek">
                    <option value="pilih" selected>Pilih Aspek Pelaporan/Komentar</option>
                    <option value="Dosen">Dosen</option>
                    <option value="Staff">Staff</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Infrastruktur">Infrastruktur</option>
                    <option value="Pengajaran">Pengajaran</option>
                </select><br>
            
            <br>
                <input class="file" id="myFile" type="file" name="myFile"><br>

               
            <br>
                <input class="submit submit1" name="uploadFile" type="submit" value="Buat LAPOR!">
              
            <br>
            <hr >
        </form>
    </div>
    
</body>
</html>
