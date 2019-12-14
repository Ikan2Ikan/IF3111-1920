-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2019 pada 15.37
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laporan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aspek_laporan`
--

CREATE TABLE `aspek_laporan` (
  `id_aspek` int(11) NOT NULL,
  `aspek` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aspek_laporan`
--

INSERT INTO `aspek_laporan` (`id_aspek`, `aspek`) VALUES
(1, 'Infrastruktur'),
(2, 'Administrasi'),
(3, 'Jam Operasional');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `isi` text NOT NULL,
  `aspek` varchar(200) NOT NULL,
  `file` varchar(250) NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `isi`, `aspek`, `file`, `waktu`) VALUES
(15, 'jhmjgjgj,k', 'nbbn,kh', 'jhkkl', '0000-00-00'),
(16, 'ghghjgh', 'aspek pelaporan/komentar', 'baju.jpg', '2019-12-13'),
(17, 'dera', 'Infrastuktur', 'Desert.jpg', '2019-12-13'),
(18, 'apaaa', 'Infrastuktur', 'ECC-(2019).pdf', '2019-12-13'),
(20, 'jdsklaJDlsald', 'Administrasi', 'images.jpg', '2019-12-13'),
(21, 'jfvklsjdlkz', 'Fasilitas', 'baju1.jpg', '2019-12-13'),
(22, 'hjkk', 'Fasilitas', 'baju3.jpg', '2019-12-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `Nama` varchar(50) NOT NULL,
  `NIM` int(15) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `No_telepon` varchar(15) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`Nama`, `NIM`, `Password`, `Alamat`, `No_telepon`, `Email`, `foto`) VALUES
('Dewi', 14116056, 'e10adc3949ba59abbe56e057f20f883e', 'pemda way huwi', '085269142011', 'dewi.14116056@student.itera.ac.id', NULL),
('Imam Ramadhani', 14116065, 'e10adc3949ba59abbe56e057f20f883e', 'way huwi', '089677888558', 'imam.14116065@student.itera.ac.id', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aspek_laporan`
--
ALTER TABLE `aspek_laporan`
  ADD PRIMARY KEY (`id_aspek`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aspek_laporan`
--
ALTER TABLE `aspek_laporan`
  MODIFY `id_aspek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
