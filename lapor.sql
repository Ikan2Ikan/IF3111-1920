-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 02:26 PM
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
-- Table structure for table `simple_lapor`
--

CREATE TABLE `simple_lapor` (
  `id` int(11) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `lampiran` varchar(255) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simple_lapor`
--

INSERT INTO `simple_lapor` (`id`, `deskripsi`, `lampiran`, `waktu`, `kategori`) VALUES
(51, 'Curabitur hendrerit id augue sed sollicitudin. Nunc tempus, erat pulvinar accumsan finibus, dolor nunc venenatis enim, ac malesuada sem enim ac justo. Phasellus rhoncus lacus sit amet pellentesque dapibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut dictum interdum nulla, quis volutpat ligula eleifend porta. Nullam quis lacus ultricies, tincidunt neque placerat, viverra lectus. Nullam elementum lorem sit amet cursus lacinia. Nam mattis laoreet pellentesque. Etiam sed rutrum sem, nec condimentum mi. Proin sapien tellus, scelerisque et dolor sed, blandit interdum diam.\r\n\r\nSuspendisse ac massa justo. In sodales, nibh quis condimentum lobortis, lorem tellus fermentum lectus, in viverra dui ex quis tortor. Nunc vehicula erat lorem, vel semper massa tempor ut. Aenean tristique dui at orci sagittis bibendum. Donec quis feugiat nisi. In nec fermentum augue. Donec in nisl velit. Quisque suscipit hendrerit risus, sed elementum mauris iaculis facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque congue aliquet lorem, in fringilla lectus vulputate nec. ', 'itera.png', '2019-12-14 10:27:55', 'Infrastruktur'),
(52, 'Praesent malesuada et turpis lobortis malesuada. In hac habitasse platea dictumst. Mauris iaculis pretium risus a cursus. Maecenas sollicitudin rutrum magna quis dignissim. Ut porta, est vel facilisis porttitor, ante sapien cursus augue, eu sodales est lacus nec massa. Sed a lacus sit amet nunc auctor placerat. Ut eget convallis nisl. Nunc porttitor nisl a volutpat ullamcorper. \r\n\r\nNunc lorem est, pretium id nisl sit amet, congue fermentum purus. Mauris imperdiet leo a mollis fermentum. Fusce libero metus, aliquet et erat ac, ultricies luctus lacus. Proin rhoncus consequat est sed hendrerit. Donec sodales ipsum vitae nunc fermentum vehicula. Vestibulum eu nisi at purus suscipit suscipit. Nullam sed risus nulla. Suspendisse ipsum purus, accumsan ac est non, commodo commodo lectus. Phasellus pulvinar metus id urna commodo, ac sagittis purus ultrices. ', 'JOSHUA.jpg', '2019-12-14 10:28:51', 'Mahasiswa'),
(53, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec orci eu tellus rutrum faucibus vel ac nibh. Donec eget finibus nisi. Proin congue pharetra mauris, a tristique sem pharetra nec. Quisque et lacinia nulla, sit amet placerat diam. Cras non auctor enim, sit amet mattis libero. Etiam bibendum eu orci quis commodo. Praesent ut lacinia mauris, eu gravida velit. Praesent in ultricies ipsum, non tempor nulla. \r\nUt arcu lacus, vestibulum sit amet nulla eu, vehicula faucibus purus. Donec tristique eleifend ornare. Fusce pulvinar mi nec nisi pulvinar sodales. Sed erat tortor, tempor at elit facilisis, imperdiet fringilla odio. Mauris eu felis imperdiet, mollis nulla volutpat, ullamcorper ipsum. Nulla sed justo risus. Morbi a mauris dui. Maecenas condimentum tempus mauris eu sagittis. \r\nNullam eu ex pellentesque, finibus tortor a, tempor tortor. Donec quis consequat sem, quis iaculis tortor. Nunc nec accumsan odio. Donec pharetra, lorem et interdum gravida, odio tellus posuere nisl, eu consequat sapien elit eget purus. Nunc id elementum lacus. Duis auctor felis vel porta tincidunt. Sed porttitor a quam in placerat. Phasellus sollicitudin tortor nec vulputate posuere. \r\nMauris et ligula eget sem aliquet pulvinar vel vitae dolor. Curabitur urna arcu, porttitor at ultricies ornare, lobortis quis ipsum. Quisque scelerisque elit quis diam dapibus ultrices. Aliquam in convallis velit. Phasellus consequat fermentum dolor eu condimentum. Mauris suscipit varius mi. Duis ut est posuere, consequat tortor at, tincidunt libero. Praesent pretium consectetur ligula, non pharetra felis. Fusce sit amet nibh vitae dui condimentum egestas. \r\n\r\nOrci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi id ligula quis elit elementum auctor id dignissim nibh. Maecenas placerat semper nisi, ut aliquam mauris accumsan quis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam a libero felis. Pellentesque eget nisi iaculis, ultrices elit id, ornare turpis. Mauris id dictum enim, et lacinia nisi. Cras dapibus finibus diam nec varius. Proin quis orci cursus ligula euismod volutpat. Duis at tortor vel eros pretium auctor id at justo. \r\nVivamus mattis, augue nec tempor vestibulum, lorem magna consectetur dolor, nec eleifend quam purus ut ipsum. Nunc auctor mauris at lorem efficitur, vel rhoncus est tincidunt. Maecenas in dolor tortor. Aliquam nulla ligula, sollicitudin at mollis a, blandit ac magna. Etiam eu neque nec turpis sagittis maximus sed sit amet eros. Sed a purus non urna porttitor varius eu et ex. Praesent mollis sed sem vel elementum. Duis aliquet mi maximus erat volutpat suscipit. Donec eleifend a urna vel condimentum. Maecenas nec mauris id eros congue mattis eu quis mi. \r\nPraesent malesuada et turpis lobortis malesuada. In hac habitasse platea dictumst. Mauris iaculis pretium risus a cursus. Maecenas sollicitudin rutrum magna quis dignissim. Ut porta, est vel facilisis porttitor, ante sapien cursus augue, eu sodales est lacus nec massa. Sed a lacus sit amet nunc auctor placerat. Ut eget convallis nisl. Nunc porttitor nisl a volutpat ullamcorper. ', 'tperiodik.png', '2019-12-14 10:29:33', 'Pengajar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `simple_lapor`
--
ALTER TABLE `simple_lapor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `simple_lapor`
--
ALTER TABLE `simple_lapor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
