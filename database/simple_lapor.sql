-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 08:29 AM
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
(1, 'asmdqmw qkmw kqm kqkw mqkm', '', '0000-00-00 00:00:00', 'Pendidikan'),
(2, 'asmdqmw qkmw kqm kqkw mqkm', '', '0000-00-00 00:00:00', 'Pendidikan'),
(3, 'asdasdas', '1200px-Badak_Lampung_FC_logo.svg.png', '2019-11-27 00:00:00', 'pendidikan'),
(4, 'gambar sukses', 'GitHub-Logo.png', '2019-11-27 00:00:00', 'Lingkungan'),
(5, 'aaa', 'WhatsApp Image 2019-10-25 at 18.04.36.jpeg', '2019-11-27 00:00:00', 'Infrastruktur'),
(6, 'asdad new', 'download.png', '2019-11-27 11:37:52', 'Lingkungan'),
(7, 'assamdkm wkmkqkcmkqmcoq1jcoeqwcjqkkqcmwkqmk kqk vwkmckqmkwcqke0qw0qmkcqk kmcq', 'WhatsApp Image 2019-10-25 at 18.04.36.jpeg', '2019-11-27 12:12:18', 'Infrastruktur'),
(8, 'ada', '', '2019-11-27 14:20:08', 'pendidikan'),
(9, 'asdasda', '5337108_0.jpg', '2019-11-27 18:44:22', 'Infrastruktur'),
(10, 'asdasda 222', '5337108_0.jpg', '2019-11-27 18:44:32', 'Infrastruktur'),
(11, 'asdasdas', '1200px-Badak_Lampung_FC_logo.svg.png', '2019-11-28 05:29:02', 'pendidikan'),
(12, 'ada yang baru', 'download.png', '2019-11-28 05:45:28', 'Lingkungan'),
(13, 'makan pak', 'WhatsApp Image 2019-10-25 at 18.04.36.jpeg', '2019-11-28 06:29:45', 'Mahasiswa'),
(15, 'Beberapa bulan terakhir ini, marak diberitakan di televisi tentang kelakuan guru terhadap muridnya yang sanngat memalukan. Murid atau anak didik merupakan generasi penerus yang seharusnya diperlakukan oleh seorang guru dengan baik, dan guru merupakan pend', '1280px-Stack_Overflow_logo.svg.png', '2019-11-28 07:37:46', 'Staff'),
(16, 'Beberapa bulan terakhir ini, marak diberitakan di televisi tentang kelakuan guru terhadap muridnya yang sanngat memalukan. Murid atau anak didik merupakan generasi penerus yang seharusnya diperlakukan oleh seorang guru dengan baik, dan guru merupakan pendidik, pengajar yang memberikan contoh yang baik kepada murid- muridnya. \r\n\r\nBanyak kasus- kasus yang sangat memprihatinkan yang dilakukan terhadap anak. Kasus yang sangat banyak adalah kekerasan terhadap anak yang dilakukan oleh orang- orang yang tak bertanggung jawab dan ada juga pelakunya adalah guru. Tak disangka- sangka, seorang guru melakukan perbuatan yang seharusnya tidak ia lakukan terhadap anak didiknya.\r\n\r\nSeperti kasus yang terjadi di China. Li Jishun seorang guru yang mengajar di sebuah sekolah di Provinsi Gangsu yang melecehkan murid- muridnya. Li terbukti bersalah memerkosa 21 di antara para korbannya, dan melakukan pelecehan terhadap 5 lainnya di kelas, asrama, dan hutan di sekitar desa yang berada di dejat Kota Wushan.', '1280px-Stack_Overflow_logo.svg.png', '2019-11-28 07:42:04', 'Dosen'),
(17, 'adasdas', '1280px-Stack_Overflow_logo.svg.png', '2019-11-28 07:44:00', 'Mahasiswa'),
(18, 'testing 22', 'BouAFGxCEAARE86.png', '2019-11-28 00:00:00', 'Pengajaran'),
(19, 'asdasdasd', 'img003.jpg', '2019-11-28 08:01:00', 'Mahasiswa'),
(20, 'Salah satu penyebabnya adalah wajib militer yang diterapkan negara tersebut. Tak ada lagi tawar-menawar untuk anak-anak muda yang ingin mengukir prestasi. Jika usianya sudah 18 tahun maka mereka pun harus menjalani wajib militer.\r\n\r\n\"Orang mungkin tidak mengerti kondisi negara saya. Negara saya terhambat dengan development pemain. Soalnya, kami ada wajib militer,\" kata asisten pelatih Singapura, Alam Shah, di Manila.\r\n\r\n\"Itu suatu hal yang tidak bisa kami jelaskan kepada negara-negara lain. Soalnya, ketika kami sampai di usia 18 tahun atau 19 tahun, sudah mau bagus, diambil militer dua tahun dan balik lagi menjadi nol,\" dia menambahkan.\r\n\r\nKejadian wajib militer ini paling segar di ingatan menimpa Ben Davis. Pemuda kelahiran 24 November 2000 itu dapat beasiswa di akademi Fulham pada 2017.\r\n', 'unnamed.png', '2019-11-28 13:13:46', 'Mahasiswa');

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
  MODIFY `id_lapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
