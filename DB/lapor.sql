-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2020 at 06:01 AM
-- Server version: 10.1.9-MariaDB
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
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(5) NOT NULL,
  `isi` text NOT NULL,
  `aspek` varchar(20) NOT NULL,
  `lampiran` varchar(100) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `isi`, `aspek`, `lampiran`, `waktu`) VALUES
(9, 'tempat wudhu di mushola D lantai 2 mampet sehingga menyebabkan bau tidak sedap', 'Infrastruktur', '1.png', '2019-12-13 13:50:56'),
(11, 'tempat parkir GKU kurang luas', 'Infrastruktur', '10-512.png', '2019-12-14 06:54:09'),
(12, 'saya menyarankan agar disediakan ruang khusus untuk anak if, dikarenakan sulitnya penggunaan lab yang dicampur dengan prodi lain ', 'Infrastruktur', '0_1174c6_d2a91c3d_L.png', '2019-12-14 07:00:11'),
(13, 'satpam terkadang tidak mengecek stnk, sehingga mengurangi tingkat keamanan', 'Staff', '', '2019-12-14 07:07:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
