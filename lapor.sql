-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Des 2019 pada 03.47
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `ID` int(20) NOT NULL,
  `author` varchar(35) NOT NULL,
  `isi` varchar(500) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `waktu` datetime NOT NULL,
  `lampiran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`ID`, `author`, `isi`, `judul`, `kategori`, `waktu`, `lampiran`) VALUES
(1, 'Benyamin', 'wifi suka putus-putus', 'Wifi', 'mahasiswa', '2019-12-04 13:10:58', 'Pembuatan_WEB_GIS.docx'),
(2, 'Fernando', 'jorok', 'kebersihan', 'infrastruktur', '2019-12-04 13:15:08', 'LapPrak_03_13115045.docx'),
(3, 'agust', 'ccccccccccccccccccccccccccccccccccccc', 'kotor', 'infrastruktur', '2019-12-14 02:49:53', 'Dedi_14115055.docx'),
(4, 'aldo', 'asbes', 'kotor', 'staff', '2019-12-14 03:01:45', 'Format_Surat_Lamaran_2019.docx'),
(5, 'ricky', 'rickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyrickyricky', 'ricky', 'mahasiswa', '2019-12-14 03:14:59', 'Sistem_Informasi_Geografis_Pelayanan_Kesehatan.pdf'),
(6, '', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', '', 'NULL', '2019-12-14 03:25:03', ''),
(7, '', 'cacing', '', 'NULL', '2019-12-14 03:25:15', ''),
(8, '', 'avavavavavaaa', '', 'mahasiswa', '2019-12-14 03:27:53', 'Rencana_Anggaran_Biaya.docx'),
(9, '', 'ayammmm', '', 'staff', '2019-12-14 03:46:42', 'FORMAT-SURAT-LAMARAN_(1).pdf'),
(10, '', 'gorong gorong', '', 'infrastruktur', '2019-12-14 03:53:53', 'Format_Surat_Pernyataan_2019.pdf'),
(11, '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop p', '', 'infrastruktur', '2019-12-14 04:00:10', 'LapPrak_02_13115045.docx'),
(12, '', 'ayam kampung\r\n', '', 'pengajaran', '2019-12-14 04:05:55', 'JOB-DESC-AVG.docx'),
(13, '', 'petai', '', 'staff', '2019-12-14 08:57:37', 'MODUL_PRAKTIKUM_-_7.pdf');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
