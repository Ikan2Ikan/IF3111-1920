-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2020 at 10:09 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

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
  `id_laporan` int(10) NOT NULL,
  `isi_laporan` text NOT NULL,
  `lampiran` varchar(55) NOT NULL,
  `aspek` varchar(13) NOT NULL,
  `waktu_laporan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `isi_laporan`, `lampiran`, `aspek`, `waktu_laporan`) VALUES
(1, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius repellat, nostrum dolorum maiores modi consequuntur iure sit enim consectetur officia? Ab itaque blanditiis nemo sint aliquid maxime, quod eligendi dolorum hic reprehenderit tempora cumque molestiae similique praesentium excepturi consequuntur iste nostrum, nisi explicabo modi iusto. Debitis praesentium iure libero nisi, quam animi doloremque temporibus ea alias saepe natus ut officia voluptatibus. Ipsum repudiandae natus fugit repellendus necessitatibus veritatis quibusdam, ipsa officiis incidunt architecto, est quia sed laudantium corporis voluptatem excepturi dolor reiciendis tempore error tenetur vero? Maiores, hic facilis. Illum, hic. Id fugit quas inventore similique. Distinctio nobis accusamus neque.', 'gambar0.jpg', 'Laporan', '2019-12-13 04:18:24'),
(2, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius repellat, nostrum dolorum maiores modi consequuntur iure sit enim consectetur officia? Ab itaque blanditiis nemo sint aliquid maxime, quod eligendi dolorum hic reprehenderit tempora cumque molestiae similique praesentium excepturi consequuntur iste nostrum, nisi explicabo modi iusto. Debitis praesentium iure libero nisi, quam animi doloremque temporibus ea alias saepe natus ut officia voluptatibus. Ipsum repudiandae natus fugit repellendus necessitatibus veritatis quibusdam, ipsa officiis incidunt architecto, est quia sed laudantium corporis voluptatem excepturi dolor reiciendis tempore error tenetur vero? Maiores, hic facilis. Illum, hic. Id fugit quas inventore similique. Distinctio nobis accusamus neque.', 'gambar.jpg', 'Komentar', '2019-12-13 04:17:36'),
(3, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius repellat, nostrum dolorum maiores modi consequuntur iure sit enim consectetur officia? Ab itaque blanditiis nemo sint aliquid maxime, quod eligendi dolorum hic reprehenderit tempora cumque molestiae similique praesentium excepturi consequuntur iste nostrum, nisi explicabo modi iusto. Debitis praesentium iure libero nisi, quam animi doloremque temporibus ea alias saepe natus ut officia voluptatibus. Ipsum repudiandae natus fugit repellendus necessitatibus veritatis quibusdam, ipsa officiis incidunt architecto, est quia sed laudantium corporis voluptatem excepturi dolor reiciendis tempore error tenetur vero? Maiores, hic facilis. Illum, hic. Id fugit quas inventore similique. Distinctio nobis accusamus neque.', 'gambar2.png', 'Laporan', '2019-12-13 04:18:03'),
(10, 'mantap', '', 'Laporan', '2019-12-14 06:46:47'),
(11, 'namuri', '', 'Laporan', '2019-12-14 06:52:42'),
(14, 'gif', '2019-12-14_13-50-11.gif', 'Laporan', '2019-12-14 12:50:11'),
(16, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius repellat, nostrum dolorum maiores modi consequuntur iure sit enim consectetur officia? Ab itaque blanditiis nemo sint aliquid maxime, quod eligendi dolorum hic reprehenderit tempora cumque molestiae similique praesentium excepturi consequuntur iste nostrum, nisi explicabo modi iusto. Debitis praesentium iure libero nisi, quam animi doloremque temporibus ea alias saepe natus ut officia voluptatibus. Ipsum repudiandae natus fugit repellendus necessitatibus veritatis quibusdam, ipsa officiis incidunt architecto, est quia sed laudantium corporis voluptatem excepturi dolor reiciendis tempore error tenetur vero? Maiores, hic facilis. Illum, hic. Id fugit quas inventore similique. Distinctio nobis accusamus neque.', '2019-12-14_14-51-04.jpg', 'Laporan', '2019-12-14 13:51:04'),
(17, 'anjay', '2019-12-14_10-57-20.jpg', 'Laporan', '2019-12-14 09:57:20');

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
  MODIFY `id_laporan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
