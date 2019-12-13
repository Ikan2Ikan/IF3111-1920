-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 05:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

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
-- Table structure for table `list_lapor`
--

CREATE TABLE `list_lapor` (
  `id_lapor` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text,
  `kategori` varchar(40) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_lapor`
--

INSERT INTO `list_lapor` (`id_lapor`, `judul`, `isi`, `kategori`, `file`, `waktu`) VALUES
(59, 'nah ini nih', 'mantap boskuu', 'Staff', '599379.jpg', '2019-12-12 07:55:56'),
(60, 'yes', 'Akhirnya bisa juga ya Tuhan', 'Pilihan 1', 'LINKLOGIN@WIFIID.docx', '2019-12-12 01:24:27'),
(61, 'the lust', 'now u choose either naughty or nice', 'Pilihan 1', '', '2019-12-12 11:50:21'),
(62, 'bapak pegang tongkat', 'ibu megang sapu bapak naik pangkat ibu jadi guru.\r\nsearching itu mencari sesuatu yang ingin di cari tahu.\r\n\r\ntapi boong.\r\n\r\ndia gak ke wc.\r\nemang iya?', 'Pilihan 1', '', '2019-12-12 04:34:38'),
(66, 'Baru nih', 'ya gitu dah pokok nya', 'Ifrastruktur', '604713.png', '2019-12-12 07:05:21'),
(67, '3rd honkai', 'ini game mantap', 'Pengajaran', '800920.png', '2019-12-12 10:56:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_lapor`
--
ALTER TABLE `list_lapor`
  ADD PRIMARY KEY (`id_lapor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_lapor`
--
ALTER TABLE `list_lapor`
  MODIFY `id_lapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
