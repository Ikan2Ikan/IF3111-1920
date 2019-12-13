<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data</title>
</head>
<body>
	<h1> tampil semua data</h1>
	<table border="1">
		<tr>
			<td>nama</td>
			<td>tanggal</td>
			<td>judul</td>
			<td>Laporan</td>
			<td>file</td>
		</tr>
		<?php foreach ($content->result() as $key): ?>
			<tr>
				<td><?php echo $key->nama; ?></td>
				<td><?php echo date($key->tanggal); ?></td>
				<td><?php echo $key->judul; ?></td>
				<td><?php echo $key->Laporan; ?></td>
				<td><?php echo $key->file; ?></td>
			</tr>
		<?php endforeach ?>

	</table>

</body>
</html>