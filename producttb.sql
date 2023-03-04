-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 02:34 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `producttb`
--

CREATE TABLE `producttb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producttb`
--

INSERT INTO `producttb` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Titan Watch For Men', 9, './upload/watch1.webp'),
(2, 'Titan Watch For Men', 36.28, './upload/watch2.webp'),
(3, 'Titan Watch For Men', 339.16, './upload/watch3.webp'),
(12, 'Titan Watch For Men', 72.63, './upload/watch4.webp'),
(13, 'Titan Watch For Women', 60, './upload/watch5.webp'),
(14, 'Titan Watch For Women', 98.38, './upload/watch6.webp'),
(15, 'Titan Watch For Women', 16.38, './upload/watch7.webp'),
(16, 'Titan Watch For Women', 37, './upload/watch8.jpg'),
(17, 'Sonato Watch For Men', 14, './upload/watch9.webp'),
(18, 'Sonato Watch For Men', 20, './upload/watch10.webp'),
(19, 'Sonato Watch For Men', 25, './upload/watch11.webp'),
(20, 'Sonato Watch For Men', 19, './upload/watch12.webp'),
(21, 'Sonato Watch For Women', 27.86, './upload/watch13.webp'),
(22, 'Sonato Watch For Women', 29.38, './upload/watch14.webp'),
(23, 'Sonato Watch For Women', 18.17, './upload/watch15.webp'),
(24, 'Sonato Watch For Women', 7, './upload/watch16.webp'),
(25, 'Fastrack Watch For Men', 48.46, './upload/watch17.webp'),
(26, 'Fastrack Watch For Men', 51.49, './upload/watch18.webp'),
(27, 'Fastrack Watch For Men', 20.6, './upload/watch19.webp'),
(28, 'Fastrack Watch For Men', 17, './upload/watch20.webp'),
(29, 'Fastrack Watch For Women', 18.17, './upload/watch21.webp'),
(30, 'Fastrack Watch For Women', 26.63, './upload/watch22.webp'),
(31, 'Fastrack Watch For Women', 35.07, './upload/watch23.webp'),
(32, 'Fastrack Watch For Women', 46.64, './upload/watch24.webp'),
(33, 'Mancini Watch For Men', 79, './upload/watch25.webp'),
(34, 'Mancini Watch For Men', 12, './upload/watch26.webp'),
(35, 'Mancini Watch For Women', 97, './upload/watch27.webp'),
(36, 'Mancini Watch For Women', 10, './upload/watch28.webp'),
(37, 'Apple Watch For Men', 499, './upload/watch29.jpg'),
(38, 'Apple Watch For Men', 799, './upload/watch30.jpg'),
(39, 'Apple Watch For Men', 121, './upload/watch31.jpeg'),
(40, 'Apple Watch For Men', 100, './upload/watch32.jpg'),
(41, 'Apple Watch For Women', 242, './upload/watch33.webp'),
(42, 'Apple Watch For Women', 354, './upload/watch34.avif'),
(43, 'Apple Watch For Women', 250, './upload/watch35.webp'),
(44, 'Titan Watch For Women', 50.55, './upload/watch36.jpeg'),
(45, 'Nordgren Watch For Women', 30.05, './upload/watch37.webp'),
(46, 'Nordgren Watch For Women', 60, './upload/watch38.webp'),
(47, 'Samsung Watch For Men', 45.87, './upload/watch40.jpg'),
(48, 'Sonato Watch For Men', 14.05, './upload/watch41.webp'),
(49, 'Seiko Watch For Women', 16.05, './upload/watch42.webp'),
(50, 'Sonato Watch For Women', 44.98, './upload/watch43.webp'),
(51, 'Smart Watch For Men', 100, './upload/watch44.webp'),
(52, 'Smart Watch For Women', 98.99, './upload/watch45.jpg'),
(53, 'Smart Watch For Women', 98.99, './upload/watch46.jpg'),
(54, 'Fossil Watch For Men', 25.06, './upload/watch47.jpg'),
(55, 'Apple Brand Watch', 30.09, './upload/watch48.webp'),
(56, 'Smart Watch For Men', 50.55, './upload/watch49.jpg'),
(57, 'Smart Watch For Women', 91.66, './upload/watch50.webp'),
(58, 'Smart Watch For Women', 90, './upload/watch51.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `producttb`
--
ALTER TABLE `producttb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `producttb`
--
ALTER TABLE `producttb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
