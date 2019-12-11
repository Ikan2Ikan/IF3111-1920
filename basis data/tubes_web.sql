-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Des 2019 pada 15.19
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_komentar`
--

CREATE TABLE `tabel_komentar` (
  `komentar_id` int(5) NOT NULL,
  `komentar` text NOT NULL,
  `lampiran` varchar(30) NOT NULL,
  `waktu` varchar(40) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_komentar`
--

INSERT INTO `tabel_komentar` (`komentar_id`, `komentar`, `lampiran`, `waktu`, `kategori`, `email`) VALUES
(19, 'test', 'ff.png', 'Sunday,01-December-2019  12:20:15', 'iuran', 'ayoobelajar45@gmail.com'),
(22, 'rgwegwege', 'DSCF6949.JPG', 'Friday,06-December-2019  07+6:44:45', 'administrasi', 'riskalila1919@gmail.com'),
(23, 'bbbbb gcgxahsdhgawkjdhlak dgadgkashdkjass djhasgdkjagdj,sd', 'DSCF6944.JPG', 'Friday,06-December-2019  07:43:19', 'administrasi', 'yudi.gunaone87@gmail.com'),
(34, 'yudi gunawan yudi gunawan yudi gunawan yudi gunawanyudi gunawan', 'gg.jpg', 'Sunday,08-December-2019  04:25:13', 'iuran', 'yudi.gunaone87@gmail.com'),
(35, 'vblASHbVSAv', '', 'Sunday,08-December-2019  04:05:32', 'pemerintah', 'yudi.gunaone87@gmail.com'),
(36, 'dvlh.dbv', '', 'Sunday,08-December-2019  04:05:54', 'administrasi', 'yudi.gunaone87@gmail.com'),
(37, ' lhchaslkcs fckjsab.kjfsa', 'IMG-20171225-WA0028.jpg', 'Sunday,08-December-2019  04:24:45', 'iuran', 'yudi.gunaone87@gmail.com'),
(38, 'dvDvd', '', 'Sunday,08-December-2019  04:09:39', 'pemerintah', 'yudi.gunaone87@gmail.com'),
(39, 'yudi gunawan', 'foster.png', 'Sunday,08-December-2019  04:10:09', 'iuran', 'yudi.gunaone87@gmail.com'),
(40, 'jajal pdf', '14117035-prak05.pdf', 'Sunday,08-December-2019  04:45:49', 'administrasi', 'yudi.gunaone87@gmail.com'),
(41, 'jajal docx', 'minggu5_tugas.docx', 'Sunday,08-December-2019  05:05:24', 'administrasi', 'yudi.gunaone87@gmail.com'),
(45, 'uuuuu', 'Modul_5.pdf', 'Monday,09-December-2019  09:00:28', 'administrasi', 'yudi.gunaone87@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `email` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`email`, `nama`, `password`) VALUES
('aaa@aaa.com', 'aaa', 'aaa'),
('aku@aku.com', 'aku', 'gewgEW'),
('asuss@gmail.com', 'casc', 'csacsa'),
('ayoobelajar45@gmail.com', 'siapa aja boleh', '1212'),
('eeee@gmail.com', 'fwefewff', 'ewfewfe'),
('riskalila1919@gmail.com', 'riska laila', '22222'),
('SSS@gmail.vom', 'wdawf', 'fefe'),
('wwww@gmail.com', 'gege', 'sfsf'),
('yudi.gunaone87@gmail.com', 'julia armanda', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_komentar`
--
ALTER TABLE `tabel_komentar`
  ADD PRIMARY KEY (`komentar_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_komentar`
--
ALTER TABLE `tabel_komentar`
  MODIFY `komentar_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tabel_komentar`
--
ALTER TABLE `tabel_komentar`
  ADD CONSTRAINT `tabel_komentar_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
