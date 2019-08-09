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
-- Database: `nimetdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `high_cloud`
--

CREATE TABLE `high_cloud` (
  `Symbol` geometry NOT NULL,
  `Code_figure` varchar(500) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `high_cloud`
--

INSERT INTO `high_cloud` (`Symbol`, `Code_figure`, `Description`) VALUES
('', '0', 'No cirrus, cirrocumulus or cirrostraus'),
('', '1', 'Cirrus in the form of figaments, starnds or hooks, not progressively invading the sky'),
('', '2', 'Dense cirrus, in patches or entagled sheaves, which usually do not increase and sometimes seem to be the remains of the upper part of cumulonimbus or cirrus with sproutings in the form of small turrets or battlements or cirrus having the apperance of cumuliform tufts'),
('', '3', 'Dense cirrus, often in the form of an anvil being the remains of the upper parts of cumulonimbus'),
('', '4', 'Cirrus in the form of hooks or of filaments, or both, progressively invading the sky, they generally become denser as a whole'),
('', '5', 'Cirrus (often in bands converging towards one point or two opposite points of the horizon) and cirrostratus, or cirrostratus alone, in either case, they are progressively invading the sky, and generally growing denser as a whole, but the continous veil does not reach 45° above the horizon'),
('', '6', 'Cirrus(often in bands converging towards one point or two opposite points of the horizon) and cirrostratus, or cirrostratus alone, in either case, they are progressively invading the sky, and generally growing denser as a whole, but the continous veil extends more than 45° above the horizon, without the sky being totally covered'),
('', '7', 'Veil of cirrostratus covering the celestial dome'),
('', '8', 'Cirrostratus not progressively invading the sky and not completely covering the celestial dome'),
('', '9', 'Cirrocumulus alone, or cirrocumulus accompanied by cirrus or cirrostratus or both, but cirrocumulus is predominant'),
('', '/', 'Cirrus, cirrocumulus or cirrostratus are invisible owing to fog, darkness or other surface phenomena, or because of the presence or a continuos layer of lower cloud'),
('', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
