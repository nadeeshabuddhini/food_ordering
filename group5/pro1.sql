-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2019 at 07:58 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pro1`
--

-- --------------------------------------------------------

--
-- Table structure for table `userreg`
--

CREATE TABLE IF NOT EXISTS `userreg` (
  `RegID` int(11) NOT NULL,
  `FName` varchar(20) NOT NULL,
  `LName` varchar(25) NOT NULL,
  `NIC` varchar(12) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(64) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `RegDate` date NOT NULL,
  `userType` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userreg`
--

INSERT INTO `userreg` (`RegID`, `FName`, `LName`, `NIC`, `Email`, `Username`, `Password`, `Status`, `RegDate`, `userType`) VALUES
(1, 'Hi', 'Bye', '454564', '', '', 'f3a6f0f5024e6a331c59f7e7ec47cadc26b123e3662fba4fbb3c5a6383a2f833', 1, '2019-07-21', 'Accountant'),
(2, 'Hidupp', 'Bye', '4564+97', '', 'apsara', 'f3a6f0f5024e6a331c59f7e7ec47cadc26b123e3662fba4fbb3c5a6383a2f833', 1, '2019-07-21', 'Accountant'),
(15, 'lala', 'Bye', '54+2+689', '', 'kumari', 'f3a6f0f5024e6a331c59f7e7ec47cadc26b123e3662fba4fbb3c5a6383a2f833', 1, '2019-07-21', 'Admin'),
(16, 'kasun', 'goo', '', '', 'hasini', 'de0011eb456a0ad06455e6ac8bf41eecc0bb79e47e639ce33e025253664d5b1c', 1, '2019-07-21', 'Section'),
(17, 'Kamal', 'blaakka', '', '', '', 'de0011eb456a0ad06455e6ac8bf41eecc0bb79e47e639ce33e025253664d5b1c', 1, '2019-07-21', 'Manager'),
(18, 'Kelum', 'saaaalla', '', '', '', 'de0011eb456a0ad06455e6ac8bf41eecc0bb79e47e639ce33e025253664d5b1c', 1, '2019-07-21', 'Section'),
(19, 'rosa', 'mna', '', '', '', 'de0011eb456a0ad06455e6ac8bf41eecc0bb79e47e639ce33e025253664d5b1c', 1, '2019-07-21', 'Manager'),
(20, 'mana', 'ppp', '5555555', 'mh', 'ka', 'de0011eb456a0ad06455e6ac8bf41eecc0bb79e47e639ce33e025253664d5b1c', 1, '2019-07-21', 'Section'),
(21, 'maheshi', 'apsara', '947520733V', 'mhshapsara@gmail.com', 'aps', '04f115febca2cdd560213434232d0119263f0bbffe0c9843829c0c01f516d3ec', 1, '2019-07-21', 'User'),
(22, 'kumudu', 'kawshalya', '565656', 'mhshapsara@gmail.com', 'apsara', '04f115febca2cdd560213434232d0119263f0bbffe0c9843829c0c01f516d3ec', 1, '2019-08-18', 'Admin'),
(34, 'aaa', 'bbb', '947520733V', 'mhshapsara@gmail.com', 'wa', 'b31bc00d4efdd0d54bd1eb15e3989c4176ae56dc8d52416fad545a961ca8a887', 1, '2019-09-02', 'User'),
(35, 'Chanaka', 'anurada', '947520733V', 'mhshapsara@gmail.com', 'chana', 'd3027fee07005dac7adb630bb7eb8dbe2cf67ed6e24309595af062fa96c228a9', 1, '2019-09-03', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userreg`
--
ALTER TABLE `userreg`
  ADD PRIMARY KEY (`RegID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userreg`
--
ALTER TABLE `userreg`
  MODIFY `RegID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
