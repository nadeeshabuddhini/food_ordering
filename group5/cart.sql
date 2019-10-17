-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2019 at 04:10 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartfd`
--

CREATE TABLE IF NOT EXISTS `cartfd` (
  `food` varchar(20) NOT NULL,
  `price` varchar(4) NOT NULL,
  `id` int(11) NOT NULL,
  `image` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cartfd`
--

INSERT INTO `cartfd` (`food`, `price`, `id`, `image`) VALUES
('EggPesta', '20', 1, 'p1.png'),
('KaravilaCorb', '30', 2, 'p2.png'),
('ChickenFry', '40', 3, 'p3.png'),
('PestaRole', '30', 4, 'p4.png'),
('HunnnyBunny', '30', 5, 'p5.png'),
('OmbletBun', '30', 6, 'p6.png'),
('FishBunRole', '30', 7, 'p7.png'),
('Pizza', '30', 8, 'p8.png'),
('ChocoBun', '35', 9, 'p9.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartfd`
--
ALTER TABLE `cartfd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cartfd`
--
ALTER TABLE `cartfd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
