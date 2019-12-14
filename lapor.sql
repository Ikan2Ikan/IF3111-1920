-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Des 2019 pada 17.53
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

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
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(10) NOT NULL,
  `isi_laporan` text NOT NULL,
  `lampiran` varchar(55) NOT NULL,
  `aspek` varchar(13) NOT NULL,
  `waktu_laporan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `isi_laporan`, `lampiran`, `aspek`, `waktu_laporan`) VALUES
(2, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius repellat, nostrum dolorum maiores modi consequuntur iure sit enim consectetur officia? Ab itaque blanditiis nemo sint aliquid maxime, quod eligendi dolorum hic reprehenderit tempora cumque molestiae similique praesentium excepturi consequuntur iste nostrum, nisi explicabo modi iusto. Debitis praesentium iure libero nisi, quam animi doloremque temporibus ea alias saepe natus ut officia voluptatibus. Ipsum repudiandae natus fugit repellendus necessitatibus veritatis quibusdam, ipsa officiis incidunt architecto, est quia sed laudantium corporis voluptatem excepturi dolor reiciendis tempore error tenetur vero? Maiores, hic facilis. Illum, hic. Id fugit quas inventore similique. Distinctio nobis accusamus neque.', 'gambar.jpg', 'Komentar', '2019-12-13 04:17:36'),
(3, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius repellat, nostrum dolorum maiores modi consequuntur iure sit enim consectetur officia? Ab itaque blanditiis nemo sint aliquid maxime, quod eligendi dolorum hic reprehenderit tempora cumque molestiae similique praesentium excepturi consequuntur iste nostrum, nisi explicabo modi iusto. Debitis praesentium iure libero nisi, quam animi doloremque temporibus ea alias saepe natus ut officia voluptatibus. Ipsum repudiandae natus fugit repellendus necessitatibus veritatis quibusdam, ipsa officiis incidunt architecto, est quia sed laudantium corporis voluptatem excepturi dolor reiciendis tempore error tenetur vero? Maiores, hic facilis. Illum, hic. Id fugit quas inventore similique. Distinctio nobis accusamus neque.', 'gambar2.png', 'Laporan', '2019-12-13 04:18:03'),
(13, 'putanginamuiaaaaha', '2019-12-14_17-47-13.png', 'Laporan', '2019-12-14 16:47:13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
