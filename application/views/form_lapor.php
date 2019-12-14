<!DOCTYPE html>
<html>
<head>
	<title>LAPOR!</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/formstyle.css'); ?>" />
</head>
<body>
	<div class="contain">
		<div class="title"><h2>SIMPLE LAPOR!</h2></div>
		<label>Buat Laporan/Komentar</label>
		<hr> <br>
		<form name="F_lapor" action="<?php echo base_url('index.php/form_lapor/addForm'); ?>" method="POST" enctype="multipart/form-data" onsubmit="return validasi()" onclick="">
			
			<table>
				<tr>
					<td><textarea name="teks_laporan" id="teks_laporan" rows="20" cols="100" placeholder="Laporan/Komentar"></textarea>
					</td>
				</tr>	
				<tr>
					<td>
						<select name="aspek_laporan" id="aspek_laporan">
							<option value="">Pilih Aspek Laporan/Komentar</option>
							<option value="Pemerintahan">Pemerintahan</option>
							<option value="Administrasi">Administrasi</option>
							<option value="Harga dan Mutu Barang">Harga dan Mutu Barang</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
	 						<input type="file" name="lampiran" id="lampiran"> 
					</td>
				</tr>
				<tr>
					<td><div class="submit_button"><button type="submit">Buat Lapor!</button></div></td>
				</tr>
			</table> 			
		</form>
	</div>
	<script type="text/javascript">
		function validasi(){
		var x = document.forms["F_lapor"]["teks_laporan"].value;
		var mincar=20;
		var y = document.forms["F_lapor"]["aspek_laporan"].value;
		var z = document.forms["F_lapor"]["lampiran"].value;
  			if (x == "" || x.length<mincar) {
    		alert("Teks Laporan Harus diIsi Minimal 20 Kata");	
 		    document.getElementById('teks_laporan').focus();
    		return false;
  		}
  			if (y == "") {
    		alert("Aspek Laporan Harus diIsi");	
 		    document.getElementById('aspek_laporan').focus();
    		return false;
  		}
  			if (z == "") {
    		alert("Lampiran Harus diIsi");	
 		    document.getElementById('lampiran').focus();
    		return false;
  		}  
		}
	</script>
</body>
</html>