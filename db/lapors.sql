-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 14, 2019 at 11:35 PM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapordb`
--

-- --------------------------------------------------------

--
-- Table structure for table `lapors`
--

CREATE TABLE `lapors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `report` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `aspect` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lapors`
--

INSERT INTO `lapors` (`id`, `title`, `report`, `aspect`, `file`, `created_at`, `updated_at`) VALUES
(3, 'sad', 'dsad sd sdf sg fgdh dfj djghs hgf hdfg hfdg jghfj dhgj dhsdfg dsfg dsf rts dasdf bvcb dtfh dhfdg jdgh dsfg fdg dh fgh gfdg regdfsg sdfh sdgfd gfsdg', 'Infrastruktur', '1576336833-poto8.jpg', '2019-12-14 08:20:33', '2019-12-14 08:20:33'),
(4, 'afsda', 'sdf asdf sadf sad fsdaf sdaf sdaf sdf sadf sadf sadfsdaf sdaf asdf', 'Pengajaran', '1576336889-poto6.jpg', '2019-12-14 08:21:29', '2019-12-14 08:21:29'),
(5, 'sadasd', 'asd asdasd asd as dasd asd asd as', 'Dosen', '1576336932-poto4.jpg', '2019-12-14 08:22:12', '2019-12-14 08:22:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lapors`
--
ALTER TABLE `lapors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lapors`
--
ALTER TABLE `lapors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
