-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2017 at 10:26 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tiffin`
--
CREATE DATABASE IF NOT EXISTS `tiffin` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tiffin`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `billrecord`
--

CREATE TABLE IF NOT EXISTS `billrecord` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `bill` int(5) NOT NULL,
  `date` date NOT NULL,
  `room` varchar(4) NOT NULL,
  `status` varchar(14) NOT NULL DEFAULT 'undelivered',
  `foodtime` varchar(10) NOT NULL DEFAULT 'lunch',
  `type` varchar(15) NOT NULL,
  `name` varchar(33) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `billrecord`
--

INSERT INTO `billrecord` (`id`, `username`, `bill`, `date`, `room`, `status`, `foodtime`, `type`, `name`) VALUES
(1, 'sv33', 60, '2017-06-14', '77', 'delivered', 'dinner', 'veg', 'sohaib'),
(3, 'sv33', 50, '2017-06-21', '22', 'undelivered', 'lunch', 'veg', 'sohaib'),
(4, 'sv33', 60, '2017-06-21', '013', 'undelivered', 'lunch', 'nonveg', 'sohaib'),
(5, 'sv33', 60, '2017-06-21', '22', 'undelivered', 'lunch', 'nonveg', 'sohaib'),
(6, 'sv33', 60, '2017-06-21', 'a14', 'undelivered', 'lunch', 'nonveg', 'sohaib'),
(7, 'sv33', 50, '2017-06-21', 'a14', 'undelivered', 'lunch', 'veg', 'sohaib baig');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `room` varchar(3) NOT NULL,
  `email` varchar(33) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `password`, `name`, `phone`, `room`, `email`) VALUES
(1, 'soahib12', 'aaa', 'sohaib baig', 9658968895, 'a12', 'priyankasatpathy.9'),
(2, 'sv33', '99', 'sarwar baig', 8989898989, '098', 'priyankasatpathy@gmail.com'),
(3, 'sv33r', 'mm', 'sohaib baig', 8989898989, 'a14', 'priyankasatpathy.96@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `a` varchar(20) NOT NULL DEFAULT 'rice',
  `b` varchar(20) NOT NULL DEFAULT 'roti',
  `da` varchar(10) NOT NULL DEFAULT 'daal',
  `c` varchar(20) NOT NULL,
  `d` varchar(20) NOT NULL,
  `e` varchar(20) NOT NULL,
  `f` varchar(20) NOT NULL,
  `bill` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `a`, `b`, `da`, `c`, `d`, `e`, `f`, `bill`) VALUES
(1, 'rice', 'roti', 'daal', 'paneer', 'papad', 'mixveg', 'icecream', 50),
(2, 'rice', 'naan', 'daal', 'mutton', 'salted', 'salad', 'custard', 60),
(3, 'rice', 'roti', 'daal', 'papad', 'paneer', 'mixveg', 'rasogulla', 60),
(4, 'rice', 'paratha', 'daal', 'chicken', 'salted', 'salad', 'custard', 65);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
