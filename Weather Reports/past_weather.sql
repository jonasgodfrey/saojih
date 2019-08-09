-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2018 at 02:15 PM
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
-- Table structure for table `past_weather`
--

CREATE TABLE `past_weather` (
  `code_figure` int(50) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `past_weather`
--

INSERT INTO `past_weather` (`code_figure`, `description`) VALUES
(0, 'Cloud cover  ½ or less of the sky throughout the appropriate period'),
(1, 'Cloud cover  ½ or less for part of the appropriate period and more than ½ for part of the period'),
(2, 'Cloud cover more than ½ of the sky throughout the appropriate period'),
(3, 'Duststorm, sandstorm or blowing snow-visibility less than 1,000 metres'),
(4, 'Fog or thick haze'),
(5, 'Drizzle'),
(5, 'Rain'),
(7, 'Snow'),
(8, 'Showers'),
(9, 'Thunderstorm, with or without precipitation');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
