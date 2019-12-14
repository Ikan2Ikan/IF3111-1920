-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 12:20 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

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
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(20) NOT NULL,
  `laporan` mediumtext NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `lampiran` varchar(255) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `aspek` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `laporan`, `tanggal`, `waktu`, `lampiran`, `tipe`, `aspek`) VALUES
(8, 'afkhdsjkfhkdjafkhdsjkfhkdjafkhdsjkfhkdjafkhdsjkfhkdj fjkh   afkhdsjkfhkdjafkhdsjkfhkdjafkhdsjkfhkdjafkhdsjkfhkdj fjkh   afkhdsjkfhkdjafkhdsjkfhkdjafkhdsjkfhkdjafkhdsjkfhkdj fjkh   afkhdsjkfhkdjafkhdsjkfhkdjafkhdsjkfhkdjafkhdsjkfhkdj fjkh   afkhdsjkfhkdjafkhdsjkfhkdjafkhdsjkfhkdjafkhdsjkfhkdj fjkh   afkhdsjkfhkdjafkhdsjkfhkdjafkhdsjkfhkdjafkhdsjkfhkdj fjkh   afkhdsjkfhkdjafkhdsjkfhkdjafkhdsjkfhkdjafkhdsjkfhkdj fjkh   afkhdsjkfhkdjafkhdsjkfhkdjafkhdsjkfhkdjafkhdsjkfhkdj fjkh   afkhdsjkfhkdjafkhdsjkfhkdjafkhdsjkfhkdjafkhdsjkfhkdj fjkh   ', '2019-12-14', '17:25:43', 'Screenshot_(1)1.png', '', 'Akademik'),
(9, 'kcjdlkfjkldjfkldjk', '2019-12-14', '17:50:33', 'Screenshot_(1)2.png', 'image/png', 'Politik'),
(10, 'gkfk\';fdlgl;fdg\';ldf\';gls;fd\'', '2019-12-14', '18:19:21', 'Screenshot_(1)3.png', 'image/png', 'Akademik');

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
