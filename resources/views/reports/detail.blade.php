<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/cssdetail.css">
</head>
<body>
	<h1>SIMPLE LAPOR !</h1>
	<div class="container">
		<div class="detaillap">
			<p>Detail Laporan/Komentar</p>
			<div class="gartil">
	</div>
	<div class="rincian">
		<p>{{ $report->Laporan }}</p>
	</div>
	<div class="foto">
		<p>Lampiran:</p>
		<div class="kotak"></div>
	</div>
	</div>
	<div class="kaki">
	<p>{{ $report->created_at }}  Aspek:{{ $report->Tipe }}</p>
	<form action="{{ $report->id }}" method="post" >
		@method('delete')
		@csrf
		  <button type="submit" value="Hapus">Hapus Laporan/Komentar</button>   
		 </form>
		<div class="garput">
	</div>
	</div>
</div>

</body>
</html>