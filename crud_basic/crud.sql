-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 16, 2016 at 02:08 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `ID` int(11) NOT NULL,
  `parentID` int(11) NOT NULL,
  `categoryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `parentID`, `categoryName`) VALUES
(1, 0, 'Nokia'),
(2, 0, 'LG');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `productName` varchar(60) NOT NULL,
  `productPrice` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `categoryID`, `productName`, `productPrice`, `description`) VALUES
(1, 2, 'Nokia 6630', 8000, 'lg'),
(5, 1, 'Test', 90, 'Test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
