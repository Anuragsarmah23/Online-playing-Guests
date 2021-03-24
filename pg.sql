-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 16, 2018 at 01:23 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pg`
--
CREATE DATABASE IF NOT EXISTS `pg` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pg`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `date`) VALUES
('admin@gmail.com', '123456', '2018-11-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `bookingpg`
--

CREATE TABLE IF NOT EXISTS `bookingpg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `pgtype` varchar(100) NOT NULL,
  `pgname` varchar(50) NOT NULL,
  `seater` int(11) NOT NULL,
  `fee` varchar(5) NOT NULL,
  `stayfrom` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `bookingpg`
--

INSERT INTO `bookingpg` (`id`, `email`, `pgtype`, `pgname`, `seater`, `fee`, `stayfrom`, `status`, `regdate`) VALUES
(1, 'biki@gmail.com', 'Boy PG', 'Biswa PG', 1, '2500', '2018-11-06', 'APPROVED', '2018-12-15 06:08:22'),
(4, '23@fg.com', 'Boy PG', 'Biswa PG', 2, '1500', '2018-11-17', 'APPROVED', '2018-12-15 06:08:34'),
(5, 'test@gmail.com', 'boypg', 'Hirak', 3, '1500', '2018-12-10', 'APPROVED', '2018-12-10 06:14:58');

-- --------------------------------------------------------

--
-- Table structure for table `pgdetails`
--

CREATE TABLE IF NOT EXISTS `pgdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pgtype` varchar(50) NOT NULL,
  `pgname` varchar(50) NOT NULL,
  `seater` int(11) NOT NULL,
  `fee` varchar(50) NOT NULL,
  `pgaddress` varchar(100) NOT NULL,
  `pgimage` varchar(1000) NOT NULL,
  `pgpostingdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `pgdetails`
--

INSERT INTO `pgdetails` (`id`, `pgtype`, `pgname`, `seater`, `fee`, `pgaddress`, `pgimage`, `pgpostingdate`) VALUES
(7, 'girlpg', 'momi', 3, '2000', 'shilpukhuri', 'pg1.jpg', '2018-12-13 08:15:03'),
(8, 'boypg', 'Hirak', 3, '1500', 'chandmari', 'pg8.jpg', '2018-12-10 05:55:09'),
(9, 'boypg', 'Kaushik', 2, '3000', 'goneshguri', 'pg9.jpg', '2018-12-15 06:09:50');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE IF NOT EXISTS `userregistration` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`name`, `email`, `address`, `gender`, `phone`, `password`, `date`) VALUES
('lllll', '23@fg.com', 'ffgfgfgg', 'female', '45678945', 'kaushik', '0000-00-00 00:00:00'),
('biki', 'biki@gmail.com', 'kkkkkkk', 'male', '7895641230', 'biki', '2018-11-25 16:35:17'),
('ooooo', 'qweqqq', 'lllllll', 'others', '1234567890', 'kkkkk', '0000-00-00 00:00:00'),
('kkkkkkkk', 'test@gmail.com', 'khjghgjxjengh', 'male', '5645678945', '123', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
