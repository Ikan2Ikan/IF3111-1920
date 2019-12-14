-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Des 2019 pada 17.50
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapor_if`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_lapor` int(3) NOT NULL,
  `isi_lapor` varchar(5000) NOT NULL,
  `jenis_lapor` varchar(15) NOT NULL,
  `tgl_lapor` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id_lapor`, `isi_lapor`, `jenis_lapor`, `tgl_lapor`, `file`) VALUES
(22, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacinia ante augue, vel fermentum odio lacinia non. Vivamus ornare suscipit turpis quis viverra. Aenean et neque sem. Duis ut erat et orci ultricies scelerisque sit amet quis ante. Curabitur fringilla, enim eget volutpat malesuada, lorem nunc rhoncus odio, eu porta diam massa sit amet urna. Integer pellentesque, neque sed vestibulum pellentesque, neque ex feugiat metus, id viverra quam diam in lectus. Curabitur convallis, mauris eleifend vestibulum tincidunt, ex leo auctor neque, blandit faucibus magna ex eget nisl. Vestibulum ut ante risus. In fringilla malesuada est, eget tempor nibh varius vel. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur vitae scelerisque augue. Etiam luctus tincidunt tempor. Aenean tincidunt ultricies orci, sed feugiat eros iaculis ac. ', 'Matakuliah', '2019-12-13 20:55:37', 'x.png'),
(23, 'Kelar cuy alhamdulillah wkwkwk', 'Matakuliah', '2019-12-13 20:56:09', 'plus.png'),
(28, 'Ini untuk mencoba fitur hapus laporan', 'Dosen', '2019-12-14 04:38:49', '1427472_1.jpg'),
(30, 'tes tambah data', 'Matakuliah', '2019-12-14 04:53:53', 'left and right.jpg'),
(31, 'saffafa', 'Nilai', '2019-12-14 04:55:35', 'allen.png'),
(32, 'fsafa', 'Matakuliah', '2019-12-14 05:01:54', 'aza.png'),
(33, 'tes update ', 'Matakuliah', '2019-12-14 05:02:21', 'Closers-2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_lapor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_lapor` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
