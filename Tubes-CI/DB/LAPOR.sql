-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 14, 2019 at 12:45 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `LAPOR`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(3) NOT NULL,
  `isi_laporan` varchar(5000) CHARACTER SET latin1 NOT NULL,
  `kategori` varchar(15) CHARACTER SET latin1 NOT NULL,
  `tgl_laporan` datetime NOT NULL,
  `lampiran` varchar(10) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `isi_laporan`, `kategori`, `tgl_laporan`, `lampiran`) VALUES
(34, 'vvv', 'Komentar', '2019-12-14 09:45:47', '0'),
(35, '', 'Pilih Aspek Pel', '2019-12-14 11:34:37', ''),
(36, '', 'Pilih Aspek Pel', '2019-12-14 11:34:59', ''),
(37, '', 'Pilih Aspek Pel', '2019-12-14 12:13:57', ''),
(38, '', 'Pilih Aspek Pel', '2019-12-14 12:23:11', ''),
(39, 'KETIKA AKU MASIH KECIL ANJING', 'Laporan', '2019-12-14 12:24:42', ''),
(40, 'hahaha', 'Laporan', '2019-12-14 12:26:34', 'white-plus'),
(41, '', 'Pilih Aspek Pel', '2019-12-14 12:34:36', 'white-plus');

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
  MODIFY `id_laporan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
