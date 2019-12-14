<!DOCTYPE html>
<html>
    <title>BUAT LAPORAN</title>
    <head>
    <style  type="text/css" >


 	input[type=text], input[type=cari] {
        	margin: 10px auto;
        	width: 69%;  
        	padding:50px;
		}

    select{
		margin: 8px auto;
        width: 150px;
        padding: 20px;
        border: 1px solid#7F8C8D;
        background: white   ;
	}
    input[type=email]{
            margin: 3px auto;
        	width: 35%;  
        	padding:10px;
    }
    input[type=submit]{
            margin: 5px auto;
        	width: 30%;  
        	padding:5px;
            position: right;
    }

    #card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 500px;
        margin: 6rem auto 8.1rem auto;
        width: 329px;
    }

    #card-content {
      padding: 8px 44px;
    }
        #card-title {
        font-family: "Raleway Thin", sans-serif;
        letter-spacing: 4px;
        padding-bottom: 23px;
        padding-top: 13px;
        text-align: center;
    }

    .underline-title {
      background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
      height: 2px;
      margin: -1.1rem auto 0 auto;
      width: 89px;
}
       </style>
</head>
<body>
    <div id="card"> 
        <div id="card-content">
        <div id="card-title">
    <h2>BUAT LAPORAN</h2>
    <div class="underline-title"></div>
        </div>
        </div>
<form method="post" class="form"> 
    <input  type="text" type="cari" placeholder="Ketik Disini..." required>
    <br>
    <input type="email" placeholder="Masukkan Email.." required>
    <br> 
       <select name="kategori" form="card" placeholder="Pilih Kategori">
           <option selected="selected" disabled="disabled"> Pilih Kategori</option>
           <option value="Dosen">Dosen</option>
           <option value="Staff">Staff</option>
           <option value="Mahasiswa">Mahasiswa></option>
           <option value="Insfrastruktur">Infrastruktur</option>
           <option value="Pengajaran">Pengajaran></option>
        </select>
        <br>
    <input type="file" value="Choose File">
    <input type="submit" value="Submit">
</form>
        
    </div>
</body>
    
    
    </html>