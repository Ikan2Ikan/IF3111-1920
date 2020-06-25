-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2020 at 09:00 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `password` varchar(256) NOT NULL,
  `username` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `password`, `username`) VALUES
(1, '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'admin', 'robby');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `nim` varchar(9) NOT NULL,
  `aspek` varchar(50) NOT NULL,
  `hal` varchar(256) NOT NULL,
  `lampiran` text NOT NULL,
  `status` enum('MENUNGGU','BERHASIL') NOT NULL,
  `cp` varchar(13) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `nim`, `aspek`, `hal`, `lampiran`, `status`, `cp`, `created`) VALUES
(1, '14116097', '', 'Permohonan peringanan biaya uang kuliah tunggal', 'Program Studi Teknik Informatika.docx', 'BERHASIL', '082281718656', '2019-12-13 14:46:10'),
(2, '14116097', '', 'Peniadaan hari tanpa asap di wilayah kampus', '', 'MENUNGGU', '082281718656', '2019-12-13 14:46:10'),
(5, '14117101', '', 'Jalanan Rusak', 'header.jpg', 'MENUNGGU', '082167423559', '2019-12-14 04:25:26'),
(6, '14117101', 'Dosen', 'Tes Dosen', 'header.jpg', 'MENUNGGU', '082167423559', '2019-12-14 06:14:47'),
(7, '14116097', 'Mahasiswa', 'tes 123457', 'b66f504ae848468a198b935b06240475.jpg', 'MENUNGGU', '0821647898484', '2020-01-10 07:46:54');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(9) NOT NULL,
  `password` varchar(256) NOT NULL,
  `prodi` varchar(24) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `verif` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `password`, `prodi`, `nama`, `verif`) VALUES
('14116097', 'b0a787a82ffb983d64d1b835a263e607', 'Teknik Informatika', 'Yusuf Firmansyah W. P.', '1'),
('14117101', '8217e4231b715950b7c772ddef2623e9', 'Teknik Informatika', 'Robby Legitra', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
