-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 02:15 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

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
  `id` int(11) NOT NULL,
  `deskripsi` varchar(300) DEFAULT NULL,
  `aspek` varchar(100) DEFAULT NULL,
  `berkas` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `deskripsi`, `aspek`, `berkas`, `created_at`) VALUES
(15, 'Data Organisasi Kesehatan Dunia (WHO) tahun 2016 menunjukkan, stroke menempati peringkat kedua sebagai penyakit tidak menular penyebab kematian. Stroke juga menjadi peringkat ketiga penyebab utama kecacatan di seluruh dunia.', 'Pilih Aspek Laporan/Komentar', 'stroke.jpg', '2019-12-14 00:36:45'),
(16, '\"Kerjakan saja apa yang terbaik bisa dipersembahkan. Saya yakin pak menteri dan jajarannya sebagai tim bisa karena saya orang kampung, menulis ini di kampung,\" ujar Fahri di akunnya itu.', 'Bidang Politik, Hukum, dan Kesejahteraan', 'FAHRI.png', '2019-12-14 10:06:19'),
(17, ' Minyak ikan dipercaya bermanfaat untuk kesehatan otak, baik anak-anak maupun orang dewasa. Khusus untuk anak, minyak ikan disebut dapat meningkatkan fungsi otak. ', 'Kesehatan', 'minyakikan.jpg', '2019-12-14 10:08:01'),
(18, 'Ketika menjalani sebuah hubungan cobalah menjadi terbuka dan saling menghargai pendapat mengenai keuangan. Bagaimana masing-masing menilai uang dan bagaimana masing-masing ingin mengelola keuangan.', 'Bidang Resejahteraan Rakyat', 'AAK2fHi.jpg', '2019-12-14 10:09:32'),
(21, 'Anggota DPR Amerika Serikat dari Partai Demokrat pada Jumat, 13 Desember 2019, melakukan pemungutan suara untuk menentukan kelanjutan permohonan pemakzulan Presiden Amerika Serikat Donald Trump. Hasilnya, DPR menyetujui dua tuntutan terhadap Trump.', 'Bidang Politik, Hukum, dan Kesejahteraan', 'BBX5ZDT.jpg', '2019-12-14 12:03:08'),
(22, 'Di hadapan ratusan anak muda, Erick mengungkapkan bahwa menjadi pimpinan di BUMN sebesar PT Garuda Indonesia Tbk (Persero) tidak mudah. Menurutnya, ada tiga tantangan yang harus dihadapi oleh para petinggi perusahaan penerbangan pelat merah itu yakni kekuasaan, uang, dan wanita.', 'Pekerjaan', 'AAK7hay.jpg', '2019-12-14 12:06:07'),
(23, 'Kejadian bermula dari penertiban lahan yang didahului dengan apel pengamanan di halaman Kantor PDAM Tirta Wening, Jalan Badak Singa, Kota Bandung, sekitar pukul 07.00 WIB.\r\nPenertiban akan dilakukan terhadap bangunan-bangunan di kawasan rumah deret Tamansari yang ditinggali sekitar 176 keluarga. Pen', 'Infrastruktur', 'AAK4vqq.jpg', '2019-12-14 12:08:02'),
(25, 'Assalamualaikum, berikut ini merupakan jadwal ujian akhir semester di ITERA', 'Pendidikan', 'JADWAL_UAS_SMT_GASAL_TA_2019-2020.xlsx', '2019-12-14 12:11:30'),
(26, ' Menikmati sepiring nasi hangat dengan ayam atau bebek dan cocolan sambal mungkin sudah biasa. Namun apa jadinya jika menikmati sepiring nasi dengan sepotong daging angsa?', 'Umum', 'AAK4QTR.jpg', '2019-12-14 12:12:29'),
(27, 'Di akhir pekan ini, momen berkumpul bersama keluarga semakin lengkap jika ditambah menu makanan yang nikmat dan lezat tentunya. Lantas, sudahkah Anda punya ide akan menyajikan apa? Jika belum, resep makaroni panggang rumahan ini bisa menjadi pilihan Anda, Moms.\r\n\r\n\r\n', 'Umum', 'AAK72ov.jpg', '2019-12-14 12:16:16');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
