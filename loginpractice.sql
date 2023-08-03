-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2023 at 11:40 AM
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
-- Database: `loginpractice`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(20) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `order_id` int(50) NOT NULL,
  `orderedby` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone_no` bigint(50) NOT NULL,
  `payment_mode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `item_name`, `price`, `quantity`, `order_id`, `orderedby`, `address`, `phone_no`, `payment_mode`) VALUES
(1, 'Men\'s T-shirt', 10000, 1, 84, 'Shushanta', 'ramhiti', 9865062545, 'COD'),
(2, 'Men\'s T-shirt', 10000, 1, 6, 'Shushanta', 'ramhiti', 9865062545, 'COD'),
(3, 'Men\'s T-shirt', 10000, 1, 33, 'Shushanta', 'ramhiti', 9865062545, 'COD'),
(4, 'Men\\\'s T-shirt', 10000, 1, 93, 'Shushanta', 'ramhiti', 9865062545, 'COD'),
(5, 'Men\'s Jacket', 2000, 1, 93, 'Shushanta', 'ramhiti', 9865062545, 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_description` varchar(225) NOT NULL,
  `product_price` decimal(65,2) NOT NULL,
  `product_image` varchar(225) NOT NULL,
  `product_stock` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `product_name`, `product_description`, `product_price`, `product_image`, `product_stock`) VALUES
(1, 'Men\\\'s T-shirt', 'Our flagship .....', '10000.00', 'a.jpg', 100),
(2, 'Men\'s T-shirt', 'Our flagship tshirt with best in class quality and greteast fabric Available in different sizes', '1800.00', 'b.jpg', 0),
(3, 'Men\'s T-shirt', 'Our flagship tshirt with best in class quality and greteast fabric Available in different sizes', '1600.00', 'c.jpg', 0),
(4, 'Men\'s Jacket', 'Our flagship jackets with best in class quality and greteast fabric Available in different sizes', '2000.00', 'e.jpg', 0),
(5, 'Men\'s T-shirt', 'Our flagship tshirt with best in class quality and greteast fabric Available in different sizes', '1600.00', 'f.jpg', 0),
(6, 'Men\'s T-shirt', 'Our flagship tshirt with best in class quality and greteast fabric Available in different sizes', '1800.00', 'j.jpg', 0),
(12, 'Men\'s T-shirt', 'Our flagship tshirt with best in class quality and greteast fabric Available in different sizes', '1400.00', 'a.jpg', 0),
(13, 'Men\'s T-shirt', 'Our flagship tshirt with best in class quality and greteast fabric Available in different sizes', '1600.00', 'h.jpg', 0),
(14, 'Men\'s T-shirt', 'Best T-shirt there is in this country.', '1400.00', 'g.jpg', 0),
(15, 'Men\'s T-shirt', 'Best T-shirt there is available in this country', '1600.00', 'k.jpg', 0),
(26, 'T shirt', 'asdasdasdasdasdasdasdasdasdasd', '2000.00', 'a.jpg', 200);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `uid` int(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `isAdmin` int(1) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`uid`, `username`, `fname`, `lname`, `email`, `phone`, `password`, `isAdmin`, `address`) VALUES
(18, 'shushu', 'Shushanta', 'Dhungana', 'shushanta@gmail.com', 9865062545, 'y2u2j224', 0, 'ramhiti'),
(25, '', 'Kripa', 'Budhthoki', 'k@gmail.com', 9841012451, '12345678', 0, ''),
(31, 'bimoas37', 'Bimochan', 'Bajimaya', 'bmochanb@gmail.com', 9860232480, 'bimoas37', 0, ''),
(35, 'MatriX', 'Shushanta', 'Dhungana', 'shushantadhungana0@g', 9865062545, 'y2u2j224', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `uid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
