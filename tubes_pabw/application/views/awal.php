<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="assets/css/awal.css"></link>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
	<div class="head">
		<h1>SAMPLE LAPORAN</h1>

		<form action="search.php">
	      <input type="text" name="search">
	      <button type="submit"><i class="fa fa-search"> CARI</i></button>
	    </form>
	    <br>
	    <a href="<? echo site_url('controllers/Lapor') ?>">Buat Laporan/Komentar
	    	<i class="fa fa-plus"></i>
	    </a>
	</div>
</body>
