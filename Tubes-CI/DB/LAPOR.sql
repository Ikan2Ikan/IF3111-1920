-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Des 2019 pada 15.12
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `id_laporan` int(3) NOT NULL,
  `isi_laporan` varchar(5000) CHARACTER SET latin1 NOT NULL,
  `kategori` varchar(15) CHARACTER SET latin1 NOT NULL,
  `tgl_laporan` datetime NOT NULL,
  `lampiran` varchar(10) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `isi_laporan`, `kategori`, `tgl_laporan`, `lampiran`) VALUES
(42, 'Dalam tradisi pengobatan, relasi dokter-pasien mesti memungkinkan terjadinya komunikasi manusiawi yang memberikan kesempatan kepada pasien agar lebih merdeka dan leluasa mengungkapkan perjalanan penyakitnya. Hal ini sangat dibutuhkan oleh seorang dokter agar dapat mendiagnosa penyakit yangdiderita pasiennya. Komunikasi pasien-dokter hanya dapat berlangsung positif jika kondisi psiologis pasien benar-benar merasa “nyaman”. Nah, kenyamanan ketika masuk RS inilah yang menjadi permasalahan saat ini.\r\n\r\nPada sisi lain, bagi sebagian orang, masuk RS itu menjadi pilihan terakhir jika penyakit yang diderita sudah tidak bisa ditahan lagi. Mereka beranggapan akan sangat beresiko cepat-cepat masuk RS. Selain karena biaya yang cukup mahal, juga rentan dengan resiko terjadinya infeksi nosokomial (penularan penyakit dari RS terhadap orang-orang yang beraktivitas di dalamnya).', 'Laporan', '2019-12-14 21:10:51', ''),
(43, 'Berbagai peraturan yang menjelaskan hubungan pengobatan, hak-hak pasien dan hak-hak dokter/paramedik relatif cukup jelas dan mudah dimengerti. Hanya saja, pasien atau keluarga pasien yang masuk di RS cenderung tidak memperhatikan hal ini atau memang tidak tahu sama sekali.\r\n\r\nUntuk menyikapi hal ini, maka pihak RS melalui dokter/paramedik yang merawat pasien mestinya memberikan penjelasan dan penyadaran kepada pasien-pasiennya, terutama menyangkut hak mereka atas informasi pra pengobatan dari dokter (informed concent) dan kerahasiaan penyakit yang mereka derita.\r\n\r\nKenyataannya, meskipun UU Praktik Kedokteran telah diterapkan, berbagai indikasi pelanggaran atas hak pasien masih juga mencuat ke permukaan. Artinya, pihak RS, termasuk dokter dan perawat yang bekerja di dalamnya, harus menyadari bahwa saat ini masyarakat kita perlahan semakin sadar atas hak mereka mendapatkan “pengobatan yang benar”. Karenanya, otoritas RS mesti giat memperbaiki pelayanan dan “keramahan”-nya terhadap pasien-pasien mereka.', 'Komentar', '2019-12-14 21:11:58', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
