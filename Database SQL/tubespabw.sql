-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2019 pada 22.41
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubespabw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapor`
--

CREATE TABLE `lapor` (
  `laporan` text NOT NULL,
  `aspek` varchar(20) NOT NULL,
  `file` blob NOT NULL,
  `waktu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lapor`
--

INSERT INTO `lapor` (`laporan`, `aspek`, `file`, `waktu`) VALUES
('Timestamp adalah istilah untuk format waktu berupa jumlah detik sejak epoch time (1970-01-01 00:00:00), sehingga timestamp 1 berarti 1 detik sejak 1970-01-01 00:00:00 atau 1970-01-01 00:00:01, timestamp 60 berarti 1970-01-01 00:01:00, dst…\r\n\r\nArgumen timestamp sifatnya opsional, jika tidak diisi, maka PHP akan menggunakan timestamp waktu sekarang (tanggal dan waktu yang ada di komputer server) sesuai dengan konfigurasi zona waktu.\r\n\r\nTimestamp ini digunakan hanya ketika kita ingin menampilkan tanggal dan waktu selain tanggal dan waktu sekarang, misal kita memiliki tanggal dari database sebagai berikut: ‘2017-01-20 16:05:55’, selanjutnya kita ubah formatnya menjadi:', 'Keamanan', 0x6c616d6172616e5f6b65726a615f31315f6d617265745f323031392e646f6378, ''),
('Sejauh ini, kita telah dapat menampilkan tanggal dan waktu pada PHP, namun demikian, nama hari dan bulan yang ditampilkan masih berbahasa Inggris.\r\n\r\nUntuk mengubahnya ke dalam Bahasa Indonesia, kita tidak dapat menggunakan karakter date, karena karakter date hanya menyediakan tanggal berbahasa Inggris, untuk itu, kita harus membuat cara tersendiri.', 'Teknologi', 0x4e616d6120556e64616e67616e2e786c7378, ''),
('Pengguna dapat mengubah laporan/komentar yang sudah dibuat. Form yang digunakan memiliki tampilan yang sama dengan form untuk bertanya, namun field-field yang ada sudah terisi. Gunakan HTTP POST untuk menyimpan perubahan.', 'Teknologi', '', '12-12-2019 03:27:46');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
