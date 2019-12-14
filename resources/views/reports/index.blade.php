<!DOCTYPE html>
<html>
<head>
	<link href="css/cssutama.css" media="screen" rel="stylesheet">

	<title></title>
</head>
<body>
	<div class="header">
	<h1>SIMPLE LAPOR!</h1>
	<div class="container">
		
		<div class="box">
	<form>
  <input class="search" type="text" placeholder="Cari..." required>	

  <input class="button" type="button" value="Cari">
  <div class ="buat">
  <input class="button
  " type="button"  value="Buat Laporan/Komentar" onclick="location.href='/reports/create';">
</div>

</form>


</div>

</div>
</div>
<div class="recently">
<p>Laporan/Komentar terakhir</p><br>
@foreach($laporan as $lpr )
<div class="garis">
</div>

	<div class="text">
		<p>{{ $lpr->Laporan }}</p>
</div>
</div>
<div class="kumpulanlapor">
	<div class="gambar">
		<img src="{{ asset ('img/imglaporan/' . $lpr->Gambar)}}" width="400" alt = "img">
		<p>{{ $lpr->created_at }} <a href="/reports/{{ $lpr->id }}">Lihat selengkapnya>></a></p>
	</div>
	@endforeach
	<div class="garislapor">
	
	
		
	<!-- </div>
	<div class="text">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
	</div>
	<div class="kumpulanlapor">
	<div class="gambar">
		<img src="views/bp.png" width="400">
		<p>Waktu:13-12-2019 03.19 <a href="">Lihat selengkapnya>></a></p>
	</div>
	<div class="garislapor">
		
	</div>
	<div class="text">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
	</div>
	<div class="kumpulanlapor">
	<div class="gambar">
		<img src="views/bp.png" width="400">
		<p>Waktu:13-12-2019 03.40 <a href="">Lihat selengkapnya>></a></p>
	</div>
	<div class="garislapor">
		
	</div> -->



</body>
</html>