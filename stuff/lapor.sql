-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 11:42 PM
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
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comm_id` int(5) NOT NULL,
  `timestamp` varchar(30) NOT NULL,
  `comm_title` varchar(100) NOT NULL,
  `comm` text NOT NULL,
  `aspek` varchar(30) NOT NULL,
  `lampiran` varchar(30) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comm_id`, `timestamp`, `comm_title`, `comm`, `aspek`, `lampiran`, `user_id`) VALUES
(32, '14 Dec 2019 | 23:12:23', 'Akses Jalan Gedung Itera', 'Akses jalan antar gedung di Institut Teknologi Sumatera masih kurang memadai, sehingga perlu dilakukan perbaikan guna keselamatan dan kenyamanan mahasiswa dalam beraktivitas di kampus.', 'Infrastruktur', '18-14122019-231223', 18),
(33, '14 Dec 2019 | 23:16:18', 'UKT terlalu mahal', 'Soal biaya UKT sudah lama menjadi sorotan orang tua sejak calon mahasiswa baru Institut Teknologi Sumatera (ITERA) yang mengeluhkan besaran Uang Kuliah Tunggal (UKT) pada penerimaan mahasiswa baru yang besarnya mencapai Rp9 juta / semester', 'Mahasiswa', '14-14122019-231618.jpg', 14),
(34, '14 Dec 2019 | 23:19:17', 'Launching Lapor App!', 'Lapor ITERA merupakan aplikasi layanan pengaduan yang dapat digunakan untuk seluruh civitas akademika di Institut Teknologi Sumatera. Aplikasi Lapor ITERA merupakan aplikasi berbasis WEB hasil karya mahasiswa Teknik Informatika Institut Teknologi Sumatera.', 'Mahasiswa', '17-14122019-231917', 17);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `image` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `role_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fullname`, `password`, `image`, `email`, `role_id`) VALUES
(10, 'siapapun', '$2y$10$9fLEGnMDGXYHrqK2tHPYweC12AIQQcfFvUvhoPQN6xbPEVfmg4VIy', 'default.jpg', 'siapapun@deh.com', 1),
(11, 'coba', '$2y$10$jY5lNQrxzyQCmirHGnTZdOdnLj/jLOEE7EIHn/7gV.eFrGvu0XsQW', 'default.jpg', 'coba@gmail.com', 1),
(14, 'Habib Abdurrasyid', '$2y$10$/JD2tm9vpqwBwi71SE5Uke6qQ7UvZyjuI6MFwA3.YCZ2fij.7aZ4K', 'default.jpg', 'habib.rasyid11@gmail.com', 1),
(15, 'Burhan Suganda', '$2y$10$Wz3wai9nCbqTvwUVRN8cyuBwqHxjzMEwvyJgO2I8M5KXvUG5QM2pa', 'default.jpg', 'burhan@gmail.com', 1),
(16, 'tias cantik', '$2y$10$SCVjuN2h9zPuhVzmqUJer.YdtazQvCVSrhmAXAb9JO9ZxGEkaWzOC', 'default.jpg', 'tiascantik@gmail.com', 1),
(17, 'admin', '$2y$10$jOKJsgT/KmuNz2CWbxfYce6SEotMbvNrKzSIKPuaCPYEHfluCSEwa', 'default.jpg', 'admin@lapor.com', 1),
(18, 'Dhiko Jangjaya Putra', '$2y$10$bf9knZYyMQdYJSbl2VWWhevmVXf.n0xyusPCXjxMQgsU7JT7MckUe', 'default.jpg', 'dhiko@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(5) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role`) VALUES
(1, 'usr'),
(2, 'adm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comm_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comm_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
