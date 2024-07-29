-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 01, 2019 at 10:52 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE IF NOT EXISTS `test` (
  `slno` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `phnno` varchar(20) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `clg` varchar(60) NOT NULL,
  `place` varchar(50) NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `pixelid` varchar(40) NOT NULL,
  PRIMARY KEY (`rollno`),
  UNIQUE KEY `slno` (`slno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail`
--

INSERT INTO `test` (`slno`, `name`, `mail`, `phnno`, `branch`, `clg`, `place`, `rollno`, `pixelid`) VALUES
(1, '0', '0', '0', '0', '0', '0', '0', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
