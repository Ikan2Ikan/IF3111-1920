-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 02:35 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapor_itera`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `waktuPengiriman` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `judul_komentar` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `lampiran` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `waktuPengiriman`, `judul_komentar`, `komentar`, `kategori`, `lampiran`) VALUES
(35, '0000-00-00 00:00:00', 'Susunan kurikulum', 'WHy', 'Pengajaran', 'Creatlr workshop .png_14122019-104547'),
(36, '2019-12-14 03:55:10', 'Tugas Besar', 'Kenapa ada', 'Dosen', '20-31-36-images.jpg_14122019-105510'),
(37, '2019-12-14 04:05:15', 'UKT', 'kenapa ukt itera mahal tapi infrastruktuk tidak memadai', 'Infrastruktur', 'SeekClipart.com_children-being-kind-clipart_581205.png_14122019-110515'),
(38, '2019-12-14 09:11:09', 'Susunan kurikulum', 'coba isi laporan', 'Mahasiswa', 'C:\\Users\\USER\\Pictures\\Screenshots\\Screenshot (215).png_14122019-161109');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
