-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2023 at 12:07 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `p_price` float NOT NULL,
  `p_details` varchar(20) NOT NULL,
  `p_image` varbinary(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `isAdmin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `email`, `phone`, `password`, `isAdmin`) VALUES
(2, 'sakar', 'dahal', 'sakar.sd36@gmail.com', 9860428325, 'sakar123', 0),
(3, 'sakar', 'dahal', 'sakar.sd36@gmail.com', 9860428325, 'sakar123', 0),
(4, 'sakar', 'dahal', 'sakar.sd36@gmail.com', 9860428325, 'sakar123', 0),
(5, 'sakar', 'dahal', 'sakar.sd36@gmail.com', 9860428325, 'sakar123', 0),
(6, 'sakar', 'dahal', 'sakar.sd36@gmail.com', 9860428325, 'sakar123', 0),
(7, 'sakar', 'dahal', 'sakar.sd36@gmail.com', 9860428325, '12345678', 0),
(8, 'sakar', 'dahal', 'sakar.sd36@gmail.com', 9860428325, '12345678', 0),
(9, 'sakar', 'dahal', 'sakar.sd36@gmail.com', 9860428325, '12345678', 0),
(10, 'sakar', 'dahal', 'sakar.sd36@gmail.com', 9860428325, '12345678', 0),
(11, 'sakar', 'dahal', 'sakar.sd36@gmail.com', 9860428325, '12345678', 0),
(12, 'sakar', 'dahal', 'sakar.sd36@gmail.com', 9860428325, '12345678', 0),
(13, 'sakar', 'dahal', 'sakar.sd36@gmail.com', 9860428325, '12345678', 0),
(14, 'sakar', 'dahal', 'sakar.sd36@gmail.com', 9860428325, '12345678', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
