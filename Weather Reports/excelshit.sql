-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2018 at 02:14 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exceldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `excelshit`
--

CREATE TABLE `wind_direction` (
  `code` int(100) NOT NULL,
  `dir°` varchar(100) NOT NULL,
  `direction` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `excelshit`
--

INSERT INTO `wind_direction` (`code`, `dir°`, `direction`) VALUES
(0, '0°', 'NORTH'),
(2, '20°', ' NORTH NORTH EAST'),
(5, '50°', 'NORTH EAST'),
(7, '70°', 'NORTH EAST EAST'),
(9, '90°', 'EAST'),
(11, '110°', 'SOUTH EAST EAST'),
(14, '140°', 'SOUTH EAST'),
(16, '160°', 'SOUTH SOUTH EAST'),
(18, '180°', 'SOUTH'),
(20, '200°', 'SOUTH SOUTH  WEST'),
(23, '230°', 'SOUTH WEST'),
(25, '250°', 'SOUTH SOUTH WEST'),
(27, '270°', 'WEST'),
(29, '290°', 'NORTH WEST WEST'),
(32, '320°', 'NORTH WEST'),
(34, '340°', ' NORTH NORTH WEST'),
(36, '360°', 'NORTH'),
(0, '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
