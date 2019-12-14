
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/buat.css">
	<title></title>
</head>
<body>
	<div class="header">
	<h1>SIMPLE LAPOR!</h1>
	<p>Buat Laporan/Komentar</p>
	<div class="garish"></div>
	</div>
	<div class="kotak">
		
		<form method="post" action="/reports">
    @csrf
<textarea name="Laporan" rows="20" cols="140" placeholder="Laporan/Komentar"></textarea>
	</div>
	<div class="pilihan">
		<p><select name="Tipe">
			<option value='administrative'>Administrative</option>
			<option value='infrastruktur'>Infrastruktur</option>
		</select></p>
	</div>


<input type="submit" name="buat" value="Buat laporan!">

</body>
</html>

<!-- div>
  <form method="post" form action="/reports">
    @csrf
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="Laporan" placeholder="Lapor..">

  
    <input type="submit" value="Submit">
  </form>
</div> -->