-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 11:43 AM
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
-- Table structure for table `simple_lapor`
--

CREATE TABLE `simple_lapor` (
  `id_lapor` int(11) NOT NULL,
  `laporan` longtext NOT NULL,
  `lampiran` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL,
  `aspek` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simple_lapor`
--

INSERT INTO `simple_lapor` (`id_lapor`, `laporan`, `lampiran`, `waktu`, `aspek`) VALUES
(44, 'Raihan poin Indonesia itu sama dengan Thailand. Indonesia harus ada di posisi lebih rendah karena War Elephants mempunyai selisih gol +8. Vietnam menjadi pemuncak klasemen dengan raihan 9 poin dan selisih gol +12.\r\n\r\nDengan Vietnam masih akan berhadapan dengan Thailand, selisih gol ini bisa menjadi penentu untuk lolos ke semifinal.\r\n\r\nBrunei merupakan lumbung gol di Grup B. Mereka sudah kemasukkan 16 gol. Perjuangan Indonesia untuk melawan Brunei bisa disaksikan lewat RCTI dan TVRI, juga bisa tonton via link ini serta ini mulai pukul 19.00 WIB.', 'BIOINFORMATIKA_12_14116158_AsrilRinaldi.pdf', '2019-12-03 19:34:24', 'Staff'),
(46, 'Kali ini web tutorial saja memberikan sebuah tutorial bagaimana membuat pencarian pada codeigniter.Membuat pencarian pada codeigniter sebenarnya lebih mudah dibandingkan dengan membuat pencarian pada php karena sudah disiapkan library library yang dapat memudahkan progammer membuat pencarian.  asril rinaldi aksdksad', 'TP_BIOINFORMATIKA_06_14116158_AsrilRinaldi.docx', '2019-12-04 20:56:18', 'Infrastruktur'),
(47, 'testing testing samdkm kwmkqmkdmqksamdm qmq qwqd', 'BIOINFORMATIKA_06_14116158_AsrilRinaldi.docx', '2019-12-06 15:44:42', 'Mahasiswa'),
(48, '\r\n\r\n7\r\nI was wondering if this is doable? Google comes up with nothing.\r\n\r\nBasically i want to my button to simulate when selected, allowing users to upload files. I\'ve read its possible with labels, but i need to do with a button to do UX/UI', 'TP_BIOINFORMATIKA_06_14116158_AsrilRinaldi.docx', '2019-12-06 18:21:51', 'Pengajaran'),
(49, 'I was creating a career page on a website for a client, My requirement was simple. I just needed to style the file input button of HTML in a way that it matches with my other Bootstrap buttons. I learnt that there is no traditional way to override the default button styles for the file input.', 'TP_BIOINFORMATIKA_06_14116158_AsrilRinaldi.docx', '2019-12-06 20:03:37', 'Mahasiswa'),
(50, 'Silakan commit pada repository anda (hasil fork). Lakukan berberapa commit dengan pesan yang bermakna, contoh: fix css, membuat post done, jangan seperti final, benerin dikit, oke deh, update deh dll. Disarankan untuk tidak melakukan commit dengan perubahan yang besar karena akan mempengaruhi penilaian (contoh: hanya melakukan satu commit kemudian dikumpulkan).', 'BIOINFORMATIKA_KELOMPOK_10.pptx', '2019-12-09 09:57:36', 'Dosen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `simple_lapor`
--
ALTER TABLE `simple_lapor`
  ADD PRIMARY KEY (`id_lapor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `simple_lapor`
--
ALTER TABLE `simple_lapor`
  MODIFY `id_lapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
