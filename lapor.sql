-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 06:18 AM
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
  `nama` varchar(100) NOT NULL,
  `laporan` mediumtext NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `file` varchar(255) NOT NULL,
  `aspek` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `nama`, `laporan`, `tanggal`, `waktu`, `file`, `aspek`) VALUES
(2, 'sfjdosfhkdsj', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, maxime dolore ratione voluptatibus\r\n                dignissimos amet pariatur eaque laboriosam minus fuga, expedita sint laborum ipsa inventore obcaecati\r\n                sunt illo blanditiis! Iste porro dolores dicta laboriosam. Officiis adipisci harum officia nostrum\r\n                necessitatibus eos neque assumenda non et repellendus sunt, blanditiis nobis libero, voluptatibus cumque\r\n                nemo possimus laudantium alias nam repudiandae veniam? Eos quas minus nulla pariatur nisi commodi,\r\n                sapiente esse explicabo inventore, nesciunt incidunt voluptatibus porro officiis illum dolorem\r\n                voluptatum molestiae aut laudantium a nihil accusamus. Dolor quidem ducimus, nihil non consequuntur\r\n                tempore! Veritatis, recusandae tempora accusantium tenetur a reiciendis! Voluptas, veritatis.', '2019-12-06', '21:09:10', ',mnvnsdkdnfkldsnklv', 'vkdnkv'),
(3, 'cobaanama', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, maxime dolore ratione voluptatibus\r\n                dignissimos amet pariatur eaque laboriosam minus fuga, expedita sint laborum ipsa inventore obcaecati\r\n                sunt illo blanditiis! Iste porro dolores dicta laboriosam. Officiis adipisci harum officia nostrum\r\n                necessitatibus eos neque assumenda non et repellendus sunt, blanditiis nobis libero, voluptatibus cumque\r\n                nemo possimus laudantium alias nam repudiandae veniam? Eos quas minus nulla pariatur nisi commodi,\r\n                sapiente esse explicabo inventore, nesciunt incidunt voluptatibus porro officiis illum dolorem\r\n                voluptatum molestiae aut laudantium a nihil accusamus. Dolor quidem ducimus, nihil non consequuntur\r\n                tempore! Veritatis, recusandae tempora accusantium tenetur a reiciendis! Voluptas, veritatis.', '0000-00-00', '00:00:00', 'cobafile', 'Sosial'),
(4, 'cobaanama', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, maxime dolore ratione voluptatibus\r\n                dignissimos amet pariatur eaque laboriosam minus fuga, expedita sint laborum ipsa inventore obcaecati\r\n                sunt illo blanditiis! Iste porro dolores dicta laboriosam. Officiis adipisci harum officia nostrum\r\n                necessitatibus eos neque assumenda non et repellendus sunt, blanditiis nobis libero, voluptatibus cumque\r\n                nemo possimus laudantium alias nam repudiandae veniam? Eos quas minus nulla pariatur nisi commodi,\r\n                sapiente esse explicabo inventore, nesciunt incidunt voluptatibus porro officiis illum dolorem\r\n                voluptatum molestiae aut laudantium a nihil accusamus. Dolor quidem ducimus, nihil non consequuntur\r\n                tempore! Veritatis, recusandae tempora accusantium tenetur a reiciendis! Voluptas, veritatis.', '0000-00-00', '00:00:00', 'cobafile', 'Politik');

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
