-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2024 at 05:05 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pembersih_kain`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `quantity`, `name`, `email`) VALUES
(1, 6, 1, 2, 'fitrah', 'fitrahmm09@gmail.com'),
(2, 6, 1, 2, 'fitrah', 'fitrahmm09@gmail.com'),
(3, 6, 2, 3, 'fitrah malik', 'fitrahmm09@gmail.com'),
(4, 6, 2, 2, 'akbar', 'akbar@gmail.com'),
(5, 6, 2, 2, 'akbar', 'akbar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`) VALUES
(1, 'Unitop Fast Cleaner 500g', 'Efektif menghilangkan noda membandel tanpa merusak serat pakaian dan warna.', '5.99', 'images/cleaner_500g.jpg'),
(2, 'Unitop Fast Cleaner 1kg', 'Formula tidak mengandung Klorin dan aman untuk berbagai jenis kain.', '9.99', 'images/cleaner_1kg.jpg'),
(3, 'Unitop Fast Cleaner Refill 2kg', 'Ekonomis dan ramah lingkungan dengan kemasan refill.', '17.99', 'images/cleaner_refill_2kg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `phone`, `password`) VALUES
(1, 'fitrah', '$2y$10$xQrQCybEdcFFrfh41W3hCOKZg1IDJvlH2ZguPbq.jZEhUg7Cm3Yai'),
(2, 'fitrah', '$2y$10$.idBTUa1hdhnvRKZ8kdlAuRFh7pArepDG6KvR0dQr2bIDdJtqMOM6'),
(3, '000', '$2y$10$QqZsvS4RCAHNnF.T7rf2FODY0tCzGGT2pYTqJB63C2xECuFRko2WC'),
(4, '087784841645', '$2y$10$mlPtGTMOJ3YpE7PN1aGw2uuXs492teL2x/Co310ExV5jN0CKs2/VC'),
(5, '087784841645', '$2y$10$cMjJnIC1M96n0kLdZJ8IYOu5wtAg05JeeMjKLZQSyJeu8kyuT5f5m'),
(6, '087777731656', '$2y$10$A8d/PZhN0pBp6.KRARzfw.Jd5rmS5niYfI3qhiAsx2D8yd7D/Eazm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
