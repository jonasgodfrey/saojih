-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2018 at 11:18 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saojih`
--

-- --------------------------------------------------------

--
-- Table structure for table `decoded`
--

CREATE TABLE `decoded` (
  `id` int(11) NOT NULL,
  `day` varchar(300) DEFAULT NULL,
  `Hour` varchar(5) NOT NULL,
  `location_id` int(2) NOT NULL,
  `stationnos_id` int(2) NOT NULL,
  `h` varchar(3) NOT NULL,
  `visibility_id` varchar(3) NOT NULL,
  `winddirection_id` int(2) NOT NULL,
  `ff` varchar(56) NOT NULL,
  `temp1` varchar(56) NOT NULL,
  `temp2` varchar(56) NOT NULL,
  `mslp` varchar(56) NOT NULL,
  `r1` int(11) NOT NULL,
  `r2` int(11) NOT NULL,
  `r3` int(11) NOT NULL,
  `tr` int(11) NOT NULL,
  `presentweather_id` int(2) NOT NULL,
  `pastweather_id` int(2) NOT NULL,
  `lowcloud_id` int(2) NOT NULL,
  `mediumcloud_id` int(2) NOT NULL,
  `highcloud_id` int(2) NOT NULL,
  `atherm` int(11) NOT NULL,
  `levelpress` int(11) NOT NULL,
  `baroread` int(11) NOT NULL,
  `wetbulb` int(11) NOT NULL,
  `rhumidity` varchar(11) NOT NULL,
  `vappressure` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `decoded`
--

INSERT INTO `decoded` (`id`, `day`, `Hour`, `location_id`, `stationnos_id`, `h`, `visibility_id`, `winddirection_id`, `ff`, `temp1`, `temp2`, `mslp`, `r1`, `r2`, `r3`, `tr`, `presentweather_id`, `pastweather_id`, `lowcloud_id`, `mediumcloud_id`, `highcloud_id`, `atherm`, `levelpress`, `baroread`, `wetbulb`, `rhumidity`, `vappressure`) VALUES
(11, '27/07/2018', '04:00', 4, 4, '90', '3', 5, '40', '33.3', '32.3', '1332.3', 0, 0, 0, 0, 3, 3, 3, 3, 3, 20, 10, 10, 10, '60', 30),
(12, '27/07/2018', '03:00', 11, 11, '240', '10', 10, '90', '99.8', '99.9', '1998.9', 0, 0, 0, 0, 8, 9, 10, 10, 10, 70, 90, 60, 50, '80', 50),
(13, '27/07/2018', '02:00', 1, 1, '90', '5', 4, '30', '33.4', '53.3', '1333.3', 0, 0, 0, 0, 8, 5, 4, 4, 4, 30, 30, 50, 30, '40', 40),
(14, '26/07/2018', '16:00', 4, 4, '90', '5', 3, '20', '12.1', '22.2', '1222.2', 0, 0, 0, 0, 3, 3, 3, 2, 7, 30, 70, 50, 50, '80', 60),
(15, '27/07/2018', '06:00', 2, 1, '210', '9', 9, '90', '86.5', '85.6', '1551.1', 0, 0, 0, 0, 2, 6, 6, 5, 4, 90, 90, 80, 70, '50', 20),
(16, '27/03/2018', '09:00', 12, 1, '150', '2', 2, '10', '11.4', '11.5', '1151.5', 0, 0, 0, 0, 4, 2, 4, 3, 2, 10, 10, 20, 10, '00', 10),
(17, '27/07/2018', '10:00', 3, 2, '30', '2', 5, '10', '14.1', '11.4', '1141.4', 0, 0, 0, 0, 2, 4, 5, 2, 2, 30, 10, 10, 10, '00', 10),
(18, '27/07/2010', '07:00', 3, 2, '30', '6', 13, '10', '99.5', '76.8', '1654.1', 0, 0, 0, 0, 2, 6, 2, 2, 3, 20, 10, 10, 10, '00', 10),
(19, '06/08/2018', '12:00', 10, 1, '240', '74', 1, '60', '77.4', '74.0', '1850.8', 0, 0, 0, 0, 41, 21, 5, 4, 7, 11, 16, 67, 98, '47', 62),
(20, '06/08/2018', '13:00', 1, 1, '180', '56', 1, '30', '30.4', '33.5', '1532.4', 0, 0, 0, 0, 46, 32, 7, 1, 6, 45, 234, 23, 5, '34', 334),
(21, '06/08/2018', '00:00', 1, 1, '90', '3', 3, '20', '22.2', '22.2', '1434.5', 0, 0, 0, 0, 4, 4, 3, 3, 4, 23, 34, 124, 123, '22', 54),
(22, '06/08/2018', '00:00', 2, 1, '90', '1', 1, '50', '02.3', '55.4', '10.4', 0, 0, 0, 0, 41, 52, 8, 8, 6, 5, 32323, 45656, 4, '2234', 664),
(23, '06/08/2018', '00:00', 11, 1, '180', '72', 10, '30', '43.2', '53.6', '1473.2', 0, 0, 0, 0, 44, 43, 4, 3, 8, 34, 2, 445567, 745, '335', 66),
(24, '07/08/2018', '00:00', 2, 2, '270', '9', 4, '20', '31.2', '11.2', '1113.1', 0, 0, 0, 0, 2, 2, 2, 2, 2, 23, 34, 124, 123, '22', 54),
(25, '07/08/2018', '00:00', 2, 2, '270', '9', 4, '20', '31.2', '11.2', '1113.1', 0, 0, 0, 0, 2, 2, 2, 2, 2, 23, 34, 124, 123, '22', 54),
(26, '07/08/2018', '01:00', 1, 1, '60', '3', 6, '30', '33.2', '21.1', '1214.1', 0, 0, 0, 0, 3, 2, 5, 4, 3, 23, 34, 124, 123, '45', 54),
(27, '07/08/2018', '01:00', 9, 9, '90', '2', 2, '20', '31.2', '22.2', '1253.1', 0, 0, 0, 0, 3, 15, 4, 4, 2, 24, 50, 87, 24, '99.9', 56),
(28, '08/08/2018', '03:00', 2, 2, '210', '11', 12, '50', '76.6', '47.5', '1696.7', 0, 0, 0, 0, 11, 9, 7, 7, 6, 23, 24, 23, 23, '56', 34),
(29, '09/08/2018', '00:00', 2, 2, '90', '2', 3, '30', '22.3', '21.2', '1114.2', 0, 0, 0, 0, 3, 5, 3, 4, 3, 24, 34, 23, 67, '87', 23),
(30, '09/08/2018', '01:00', 2, 2, '90', '2', 3, '20', '32.2', '22.2', '1213.3', 0, 0, 0, 0, 3, 3, 4, 2, 4, 24, 50, 124, 23, '22', 32),
(31, '09/08/2018', '02:00', 2, 2, '60', '10', 8, '00', '12.5', '00.0', '10', 0, 0, 0, 0, 12, 31, 3, 3, 4, 21, 22, 45, 21, '33', 62),
(32, '12/08/2018', '00:00', 2, 2, '120', '6', 3, '40', '23.2', '15.7', '1436.2', 0, 0, 0, 0, 2, 3, 3, 2, 3, 23, 44, 56, 23, '34', 123),
(33, '14/08/2018', '00:00', 1, 1, '210', '3', 4, '30', '43.2', '24.2', '1222.3', 0, 0, 0, 0, 5, 3, 6, 4, 4, 24, 50, 56, 24, '22', 123),
(34, '14/08/2018', '00:00', 2, 2, '210', '3', 4, '30', '43.2', '24.2', '1222.3', 0, 0, 0, 0, 5, 3, 6, 4, 4, 24, 50, 56, 24, '22', 123),
(35, '16/08/2018', '06:00', 2, 2, '150', '56', 6, '10', '63.3', '72.3', '1593.6', 0, 0, 0, 0, 71, 52, 5, 6, 8, 4345, 87654, 67856, 86754, '66', 68765),
(36, '16/08/2018', '07:00', 2, 2, '210', '8', 7, '60', '67.9', '59.5', '1553.9', 0, 0, 0, 0, 28, 22, 7, 8, 6, 11, 32323, 45656, 5, '2234', 334),
(37, '16/08/2018', '09:00', 2, 2, '150', '35', 12, '50', '78.3', '69.5', '1788.5', 0, 0, 0, 0, 66, 69, 8, 9, 10, 4345, 67, 89766, 46578, '87654', 87654),
(38, '16/08/2018', '10:00', 2, 2, '60', '5', 2, '10', '22.2', '13.3', '1753.1', 0, 0, 0, 0, 4, 4, 4, 4, 4, 0, 0, 0, 0, 'FCH B', 0),
(39, '16/08/2018', '01:00', 2, 2, '150', '6', 6, '40', '88.3', '27.5', '10', 0, 0, 0, 0, 6, 5, 9, 10, 1, 34, 54, 23, 65, '77', 89),
(40, '16/08/2018', '19:00', 2, 2, '240', '13', 5, '60', '64.3', '14.5', '1559.3', 0, 0, 0, 0, 2, 6, 5, 4, 4, 34, 16, 44556, 98, '47', 62),
(41, '16/08/2018', '06:00', 2, 2, '180', '6', 4, '50', '53.5', '57.6', '1454.4', 0, 0, 0, 0, 19, 5, 9, 8, 8, 353, 4567, 977, 65656, '4466', 4656),
(42, '16/08/2018', '07:00', 3, 3, '60', '3', 3, '30', '32.2', '22.2', '1222.2', 0, 0, 0, 0, 2, 2, 3, 3, 4, 0, 0, 0, 0, 'DFT', 0),
(43, '16/08/2018', '17:00', 2, 2, '210', '76', 17, '60', '88.7', '97.8', '1789.8', 0, 0, 0, 0, 61, 15, 8, 8, 7, 987, 98765, 97868, 9876, '08976', 87654),
(44, '17/08/2018', '07:00', 2, 2, '60', '3', 4, '20', '32.2', '11.2', '1431.2', 0, 0, 0, 0, 3, 2, 2, 3, 2, 1, 6, 124, 19, '89', 23),
(45, '20/08/2018', '00:00', 2, 2, '90', '3', 4, '30', '12.3', '21.1', '1111.1', 0, 0, 0, 0, 2, 3, 2, 3, 4, 24, 50, 56, 123, '22', 54),
(46, '20/08/2018', '01:00', 3, 3, '120', '7', 5, '40', '54.3', '44.3', '1333.2', 0, 0, 0, 0, 6, 4, 3, 3, 4, 23, 34, 56, 24, '54', 123),
(47, '20/08/2018', '02:00', 2, 2, '60', '3', 2, '10', '11.2', '15.8', '1121.1', 0, 0, 0, 0, 2, 2, 2, 2, 3, 12, 50, 56, 123, '23', 54),
(48, '20/08/2018', '03:00', 2, 2, '60', '3', 2, '10', '11.2', '15.8', '1121.1', 0, 0, 0, 0, 2, 2, 2, 2, 3, 12, 50, 56, 123, '23', 54),
(49, '20/08/2018', '04:00', 2, 2, '60', '3', 2, '10', '11.2', '15.8', '1121.1', 0, 0, 0, 0, 2, 2, 2, 2, 3, 12, 50, 56, 123, '23', 54),
(50, '28/08/2018', '00:00', 2, 2, '150', '4', 4, '40', '27.4', '33.2', '1323.2', 0, 0, 0, 0, 3, 3, 2, 4, 3, 12, 34, 23, 23, '22', 54),
(51, '28/08/2018', '01:00', 2, 2, '150', '4', 4, '40', '27.4', '33.2', '1323.2', 0, 0, 0, 0, 3, 3, 2, 4, 3, 12, 34, 23, 23, '22', 54);

-- --------------------------------------------------------

--
-- Table structure for table `high_cloud`
--

CREATE TABLE `high_cloud` (
  `highcloud_id` int(2) NOT NULL,
  `highcloud_code` varchar(2) NOT NULL,
  `highcloud_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `high_cloud`
--

INSERT INTO `high_cloud` (`highcloud_id`, `highcloud_code`, `highcloud_description`) VALUES
(1, '0', 'No cirrus, cirrocumulus or cirrostraus'),
(2, '1', 'Cirrus in the form of figaments, starnds or hooks, not progressively invading the sky'),
(3, '2', 'Dense cirrus, in patches or entagled sheaves, which usually do not increase and sometimes seem to be the remains of the upper part of cumulonimbus or cirrus with sproutings in the form of small turrets or battlements or cirrus having the apperance of cumuliform tufts'),
(4, '3', 'Dense cirrus, often in the form of an anvil being the remains of the upper parts of cumulonimbus'),
(5, '4', 'Cirrus in the form of hooks or of filaments, or both, progressively invading the sky, they generally become denser as a whole'),
(6, '5', 'Cirrus (often in bands converging towards one point or two opposite points of the horizon) and cirrostratus, or cirrostratus alone, in either case, they are progressively invading the sky, and generally growing denser as a whole, but the continous veil does not reach 45° above the horizon'),
(7, '6', 'Cirrus(often in bands converging towards one point or two opposite points of the horizon) and cirrostratus, or cirrostratus alone, in either case, they are progressively invading the sky, and generally growing denser as a whole, but the continous veil extends more than 45° above the horizon, without the sky being totally covered'),
(8, '7', 'Veil of cirrostratus covering the celestial dome'),
(9, '8', 'Cirrostratus not progressively invading the sky and not completely covering the celestial dome'),
(10, '9', 'Cirrocumulus alone, or cirrocumulus accompanied by cirrus or cirrostratus or both, but cirrocumulus is predominant'),
(11, '/', 'Cirrus, cirrocumulus or cirrostratus are invisible owing to fog, darkness or other surface phenomena, or because of the presence or a continuos layer of lower cloud');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `location_id` int(2) NOT NULL,
  `location_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`location_id`, `location_name`) VALUES
(1, 'Abeokuta'),
(2, 'Abuja'),
(3, 'Akure'),
(4, 'Awka'),
(5, 'Bauchi '),
(6, 'Benin'),
(7, 'Bida'),
(8, 'Birnin Kebbi'),
(9, 'Calabar'),
(10, 'Enugu'),
(11, 'Gombe '),
(12, 'Gusau '),
(13, 'Ibadan'),
(14, 'Ibi'),
(15, 'Ijebu-Ode'),
(16, 'Ikeja'),
(17, 'Ikom'),
(18, 'Ilorin'),
(19, 'Iseyin'),
(20, 'Jos'),
(21, 'Kaduna '),
(22, 'Kano '),
(23, 'Katsina '),
(24, 'Lafia'),
(25, 'Lagos Marine'),
(26, 'Lagos Roof'),
(27, 'Lokoja'),
(28, 'Maduguri'),
(29, 'Markurdi'),
(30, 'Minna'),
(31, 'Nguru '),
(32, 'Ogoja'),
(33, 'Ondo'),
(34, 'Onitsha'),
(35, 'Oshodi'),
(36, 'Osogbo'),
(37, 'Owerri'),
(38, 'PortHarcourt'),
(39, 'Potiskum'),
(40, 'Sharki'),
(41, 'Sokoto'),
(42, 'Umuahia'),
(43, 'Uyo'),
(44, 'Warri'),
(45, 'Yelwa'),
(46, 'Yola'),
(47, 'Zaria ');

-- --------------------------------------------------------

--
-- Table structure for table `low_cloud`
--

CREATE TABLE `low_cloud` (
  `lowcloud_id` int(2) NOT NULL,
  `lowcloud_code` varchar(2) NOT NULL,
  `lowcloud_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `low_cloud`
--

INSERT INTO `low_cloud` (`lowcloud_id`, `lowcloud_code`, `lowcloud_description`) VALUES
(1, '0', 'No stratocumulus, stratas, cumulus or cumulonimbus'),
(2, '1', 'Cumulus with little vertical extent and seemingly flattened, or ragged cumulus other than of bad weather, or both'),
(3, '2', 'Cumulus of moderate or strong vertical extent, generally with protuberances in the form of domes or towers, either accompanied or not by other cumulus or by stratocumulus, all having their bases at the same level'),
(4, '3', 'Cumulonimbus, the summits of which, at least partially, lack sharp outlines, but are neither clearly fibrous(cirriform) nor in form of an anvil; cumulus, stratocumulus or stratus may also be present'),
(5, '4', 'Stratocumulus formed by the spreading out of cumulus, cumulus may also be present '),
(6, '5', 'Stratocumulus not resulting from the spreading out of cumulus'),
(7, '6', 'Stratus in a more or less continuous sheet or layer, or in ragged shreds, or both, but not stratus fractus of bad weather '),
(8, '7', 'Stratus fractus of bad weather or cumulus fractus of bad weather or both (pannus), usually below altostratus or nimbostratus'),
(9, '8', 'Cumulus  and stratocumulus other than that formed from the spreading of cumulus, the base of the cumulus is at a different level from that of the stratocumulus'),
(10, '9', 'Cumulonimbus, the upper part of which is clearly fibrous(cirriform), often in the form or an anvil, either accompanied or not by cumulonimbus without anvil or fibrous part, by cumulus, stratocumulus, stratus or pannus'),
(11, '/', 'Stratocumulus, stratus, cumulus or cumulonimbus are invisible owing to fog, darkness or other surface phenomena');

-- --------------------------------------------------------

--
-- Table structure for table `marine_weather`
--

CREATE TABLE `marine_weather` (
  `id` int(11) NOT NULL,
  `location_id` int(2) NOT NULL,
  `day` varchar(200) NOT NULL,
  `hour` varchar(4) NOT NULL,
  `tidal_height` varchar(4) NOT NULL,
  `tidal_movement` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marine_weather`
--

INSERT INTO `marine_weather` (`id`, `location_id`, `day`, `hour`, `tidal_height`, `tidal_movement`) VALUES
(20, 0, '16/08/2018', '13:0', '3.22', 'RISING TIDE (RT)'),
(21, 0, '28/08/2018', '06:0', '3.6', 'EBBING TIDE (ET)');

-- --------------------------------------------------------

--
-- Table structure for table `medium_cloud`
--

CREATE TABLE `medium_cloud` (
  `mediumcloud_id` int(2) NOT NULL,
  `mediumcloud_code` varchar(2) NOT NULL,
  `mediumcloud_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medium_cloud`
--

INSERT INTO `medium_cloud` (`mediumcloud_id`, `mediumcloud_code`, `mediumcloud_description`) VALUES
(1, '0', 'No altocumulus, altostratus or nimbostratus'),
(2, '1', 'Altostratus, the greater part of which is semi-transparent, through this part the sun or moon may be weakly visible, as seen through ground grass'),
(3, '2', 'Altostratus, the greater part of which is sufficiently dense to hide the sun or moon, or nimbostratus'),
(4, '3', 'Altocumulus, the greater part of which is semi-transparent; the various elements of the cloud change only slowly and are all at a sinlge level'),
(5, '4', 'Patches(often in the form of almonds or fishes) or altocumulus, the greater part of which is semi-transparent; the clouds occur at one or more levels and the elements are continuously changing in appearance'),
(6, '5', 'Semi-transparent altocumulus in bands, or altocumulus in one or more fairly continuous layers(semi-transparent or opaque), progressively invading the sky; these altocumulus clouds generally thicken as a whole'),
(7, '6', 'Altocumulus resulting from the spreading out of cumulus (or cumulonimbus)'),
(8, '7', 'Altocumulus in two more layers, usually opaque in places or an opaque layer and not progressively invading the sky, or altocumulus together with altostratus or nimbostratus'),
(9, '8', 'Altocumulus with sproutings in the form of small towers or battlements or altocumulus having the appearance of cumuliform tufts'),
(10, '9', 'Altocumulus of a chaotic sky, generally at several levels'),
(11, '/', 'Altocumulus, altrostratus or nimbostratus are invisible owing to fog darkness or other surface phenomena or because of the presence of a continuous layer of lower cloud.');

-- --------------------------------------------------------

--
-- Table structure for table `parameter1`
--

CREATE TABLE `parameter1` (
  `day` varchar(65) NOT NULL,
  `Hour` varchar(5) NOT NULL,
  `location_id` int(2) NOT NULL,
  `stationnos_id` int(2) NOT NULL,
  `iR` int(1) NOT NULL,
  `iX` int(1) NOT NULL,
  `h` int(1) NOT NULL,
  `visibility_id` int(2) NOT NULL,
  `n` int(1) NOT NULL,
  `winddirection_id` int(2) NOT NULL,
  `ff` int(1) NOT NULL,
  `I1` int(11) NOT NULL,
  `sn1` int(11) NOT NULL,
  `t1` int(11) NOT NULL,
  `t2` int(11) NOT NULL,
  `t3` int(11) NOT NULL,
  `I2` int(11) NOT NULL,
  `sn2` int(11) NOT NULL,
  `td1` int(11) NOT NULL,
  `td2` int(11) NOT NULL,
  `td3` int(11) NOT NULL,
  `I4` int(11) NOT NULL,
  `p1` int(11) NOT NULL,
  `p2` int(11) NOT NULL,
  `p3` int(11) NOT NULL,
  `p4` int(11) NOT NULL,
  `I6` int(11) NOT NULL,
  `r1` int(11) NOT NULL,
  `r2` int(11) NOT NULL,
  `r3` int(11) NOT NULL,
  `tr` int(11) NOT NULL,
  `I7` int(11) NOT NULL,
  `presentweather_id` int(2) NOT NULL,
  `pastweather_id` int(2) NOT NULL,
  `I8` int(11) NOT NULL,
  `nh` int(11) NOT NULL,
  `lowcloud_id` int(2) NOT NULL,
  `mediumcloud_id` int(2) NOT NULL,
  `highcloud_id` int(2) NOT NULL,
  `I9` int(11) NOT NULL,
  `h1` int(11) NOT NULL,
  `h2` int(11) NOT NULL,
  `h3` int(11) NOT NULL,
  `h4` int(1) NOT NULL,
  `I3` int(11) NOT NULL,
  `t3i` int(11) NOT NULL,
  `t3ii` int(11) NOT NULL,
  `slash1` int(11) NOT NULL,
  `slash2` int(11) NOT NULL,
  `I21` int(11) NOT NULL,
  `sn3` int(11) NOT NULL,
  `tntx1` int(11) NOT NULL,
  `tntx2` int(11) NOT NULL,
  `tntx3` int(11) NOT NULL,
  `I5` int(11) NOT NULL,
  `I89` int(11) NOT NULL,
  `p241` int(11) NOT NULL,
  `p242` int(11) NOT NULL,
  `p243` int(11) NOT NULL,
  `Ieight` int(11) NOT NULL,
  `ns` int(11) NOT NULL,
  `c` int(11) NOT NULL,
  `hs1` int(11) NOT NULL,
  `hs2` int(11) NOT NULL,
  `Inine` int(11) NOT NULL,
  `sp1` int(11) NOT NULL,
  `sp2` int(11) NOT NULL,
  `sp3` int(11) NOT NULL,
  `sp4` int(11) NOT NULL,
  `atherm` int(11) NOT NULL,
  `levelpress` int(11) NOT NULL,
  `baroread` int(11) NOT NULL,
  `wetbulb` int(11) NOT NULL,
  `rhumidity` varchar(11) NOT NULL,
  `vappressure` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parameter1`
--

INSERT INTO `parameter1` (`day`, `Hour`, `location_id`, `stationnos_id`, `iR`, `iX`, `h`, `visibility_id`, `n`, `winddirection_id`, `ff`, `I1`, `sn1`, `t1`, `t2`, `t3`, `I2`, `sn2`, `td1`, `td2`, `td3`, `I4`, `p1`, `p2`, `p3`, `p4`, `I6`, `r1`, `r2`, `r3`, `tr`, `I7`, `presentweather_id`, `pastweather_id`, `I8`, `nh`, `lowcloud_id`, `mediumcloud_id`, `highcloud_id`, `I9`, `h1`, `h2`, `h3`, `h4`, `I3`, `t3i`, `t3ii`, `slash1`, `slash2`, `I21`, `sn3`, `tntx1`, `tntx2`, `tntx3`, `I5`, `I89`, `p241`, `p242`, `p243`, `Ieight`, `ns`, `c`, `hs1`, `hs2`, `Inine`, `sp1`, `sp2`, `sp3`, `sp4`, `atherm`, `levelpress`, `baroread`, `wetbulb`, `rhumidity`, `vappressure`) VALUES
('20/07/2018', '01:00', 2, 2, 0, 0, 2, 5, 3, 5, 60, 3, 3, 2, 2, 2, 4, 4, 4, 3, 0, 3, 3, 3, 3, 3, 3, 4, 3, 3, 3, 2, 4, 4, 2, 2, 4, 4, 4, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2, 3, 3, 2, 4, 5, 9, 3, 3, 4, 8, 4, 4, 3, 4, 9, 3, 3, 3, 4, 30, 30, 40, 50, '30.00%', 30),
('21/07/2018', '02:00', 2, 2, 0, 0, 0, 1, 0, 1, 0, 0, 0, 2, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 5, 8, 0, 0, 0, 8, 0, 0, 0, 0, 9, 0, 0, 0, 0, 0, 0, 0, 0, '00.00%', 0),
('22/07/2018', '00:00', 1, 1, 4, 0, 4, 4, 0, 3, 60, 0, 0, 3, 1, 9, 0, 0, 4, 7, 0, 0, 5, 4, 5, 0, 0, 4, 2, 4, 8, 0, 17, 8, 0, 0, 9, 4, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 5, 8, 0, 0, 0, 8, 0, 0, 0, 0, 9, 0, 0, 0, 0, 30, 60, 90, 70, '80.00%', 60),
('22/07/2018', '03:00', 1, 1, 0, 0, 0, 1, 0, 12, 40, 0, 0, 2, 7, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 5, 8, 0, 0, 0, 8, 0, 0, 0, 0, 9, 0, 0, 0, 0, 0, 0, 0, 0, '00', 0),
('23/07/2018', '00:00', 1, 1, 0, 0, 2, 14, 0, 11, 20, 0, 0, 3, 1, 5, 0, 2, 2, 9, 0, 0, 5, 8, 9, 6, 0, 7, 4, 2, 8, 0, 12, 13, 0, 0, 6, 8, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 5, 8, 0, 0, 0, 8, 0, 0, 0, 0, 9, 0, 0, 0, 0, 20, 10, 90, 70, '60', 20),
('23/07/2018', '01:00', 1, 1, 0, 0, 3, 11, 0, 8, 10, 0, 0, 3, 4, 0, 0, 0, 2, 3, 0, 0, 5, 6, 6, 4, 0, 6, 3, 9, 3, 0, 13, 14, 0, 0, 3, 6, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 5, 8, 0, 0, 0, 8, 0, 0, 0, 0, 9, 0, 0, 0, 0, 0, 0, 0, 0, '30', 0),
('23/07/2018', '02:00', 1, 1, 0, 0, 0, 9, 0, 5, 30, 0, 0, 3, 4, 5, 0, 0, 6, 4, 0, 0, 0, 0, 0, 0, 0, 6, 5, 2, 7, 0, 48, 72, 0, 0, 5, 7, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 5, 8, 0, 0, 0, 8, 0, 0, 0, 0, 9, 0, 0, 0, 0, 0, 0, 0, 0, '50', 0),
('23/07/2018', '04:00', 1, 1, 4, 4, 4, 4, 3, 4, 30, 3, 3, 3, 3, 3, 3, 3, 3, 4, 0, 3, 3, 3, 2, 3, 3, 3, 3, 2, 3, 3, 5, 4, 3, 3, 4, 4, 4, 2, 4, 5, 4, 3, 3, 2, 4, 3, 3, 2, 3, 3, 3, 3, 5, 9, 2, 2, 3, 8, 3, 3, 3, 3, 9, 3, 3, 3, 3, 30, 40, 30, 30, '60', 30),
('26/07/2018', '01:00', 2, 1, 2, 1, 1, 3, 4, 2, 20, 0, 0, 2, 4, 5, 0, 0, 2, 3, 0, 0, 2, 2, 3, 3, 0, 2, 2, 3, 2, 2, 4, 5, 1, 0, 3, 4, 4, 0, 2, 2, 2, 3, 0, 0, 0, 0, 0, 1, 0, 2, 2, 2, 5, 8, 2, 2, 2, 8, 1, 2, 1, 2, 9, 2, 3, 3, 3, 20, 0, 20, 20, '80', 20),
('26/07/2018', '11:00', 2, 1, 8, 8, 5, 94, 8, 14, 50, 8, 4, 2, 2, 9, 6, 3, 3, 1, 0, 3, 4, 5, 6, 7, 8, 9, 2, 4, 6, 3, 7, 11, 5, 8, 8, 6, 1, 3, 6, 6, 9, 5, 8, 5, 3, 3, 3, 1, 6, 4, 1, 4, 5, 8, 2, 6, 8, 8, 5, 2, 2, 7, 9, 6, 6, 7, 8, 80, 50, 40, 50, '40', 10),
('26/07/2018', '00:00', 2, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 5, 8, 0, 0, 0, 8, 0, 0, 0, 0, 9, 0, 0, 0, 0, 0, 0, 0, 0, '00', 0),
('26/07/2018', '23:00', 10, 1, 8, 5, 7, 15, 9, 13, 60, 8, 9, 6, 5, 3, 6, 3, 4, 7, 0, 7, 8, 6, 3, 7, 4, 3, 7, 2, 6, 0, 7, 8, 7, 1, 3, 5, 9, 3, 2, 4, 5, 5, 5, 6, 5, 4, 7, 1, 0, 0, 0, 0, 5, 8, 9, 9, 8, 8, 7, 6, 8, 7, 9, 9, 2, 4, 7, 50, 20, 10, 30, '90', 40),
('26/07/2018', '07:00', 6, 4, 5, 5, 4, 6, 4, 2, 20, 1, 1, 1, 1, 1, 1, 1, 6, 1, 0, 0, 4, 1, 3, 1, 3, 2, 2, 2, 2, 4, 4, 2, 1, 0, 1, 7, 7, 6, 6, 4, 9, 5, 3, 4, 6, 5, 3, 2, 2, 1, 4, 4, 5, 9, 4, 6, 4, 8, 3, 3, 1, 3, 9, 2, 0, 4, 2, 40, 40, 40, 40, '30', 20),
('26/07/2018', '11:00', 8, 1, 7, 9, 7, 12, 8, 6, 90, 9, 9, 9, 1, 3, 9, 9, 9, 9, 0, 1, 9, 5, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 1, 1, 2, 2, 2, 5, 1, 5, 4, 4, 1, 2, 1, 6, 1, 2, 1, 5, 4, 5, 5, 9, 1, 1, 6, 8, 5, 1, 2, 1, 9, 3, 2, 1, 4, 10, 20, 20, 10, '20', 10),
('27/07/2018', '04:00', 4, 4, 3, 4, 3, 3, 4, 5, 40, 3, 4, 3, 3, 3, 2, 3, 3, 2, 0, 4, 3, 3, 2, 3, 2, 3, 4, 3, 2, 3, 3, 3, 3, 2, 3, 3, 3, 3, 4, 2, 2, 2, 1, 3, 1, 2, 2, 2, 1, 1, 2, 1, 5, 8, 1, 2, 1, 8, 1, 0, 2, 1, 9, 2, 1, 1, 1, 20, 10, 10, 10, '60', 30),
('27/07/2018', '03:00', 11, 11, 9, 9, 8, 10, 8, 10, 90, 9, 0, 9, 9, 8, 9, 9, 9, 9, 0, 9, 9, 9, 8, 9, 9, 9, 9, 9, 9, 9, 8, 9, 9, 9, 10, 10, 10, 9, 4, 9, 9, 9, 8, 8, 9, 9, 8, 2, 8, 9, 8, 9, 5, 9, 7, 6, 8, 8, 6, 6, 4, 7, 9, 1, 7, 6, 7, 70, 90, 60, 50, '80', 50),
('27/07/2018', '02:00', 1, 1, 4, 1, 3, 5, 3, 4, 30, 3, 4, 3, 3, 4, 3, 5, 5, 3, 0, 4, 3, 3, 3, 3, 3, 3, 4, 3, 3, 3, 8, 5, 3, 3, 4, 4, 4, 3, 3, 3, 2, 3, 3, 3, 3, 2, 4, 2, 4, 3, 3, 2, 5, 9, 3, 3, 2, 8, 3, 4, 4, 4, 9, 3, 3, 3, 4, 30, 30, 50, 30, '40', 40),
('26/07/2018', '16:00', 4, 4, 3, 2, 3, 5, 3, 3, 20, 2, 2, 1, 2, 1, 1, 2, 2, 2, 0, 4, 2, 2, 2, 2, 2, 3, 1, 1, 1, 1, 3, 3, 2, 1, 3, 2, 7, 9, 5, 6, 0, 3, 3, 3, 2, 1, 0, 1, 0, 0, 0, 0, 5, 8, 0, 0, 0, 8, 0, 0, 0, 0, 9, 0, 0, 0, 0, 30, 70, 50, 50, '80', 60),
('27/07/2018', '06:00', 2, 1, 6, 8, 7, 9, 8, 9, 90, 9, 8, 8, 6, 5, 7, 8, 8, 5, 0, 4, 5, 5, 1, 1, 1, 0, 0, 8, 7, 3, 2, 6, 3, 5, 6, 5, 4, 5, 5, 6, 5, 6, 6, 5, 7, 6, 5, 2, 6, 6, 6, 4, 5, 9, 7, 5, 2, 8, 9, 4, 4, 5, 9, 5, 6, 7, 9, 90, 90, 80, 70, '50', 20),
('27/03/2018', '09:00', 12, 1, 2, 5, 5, 2, 1, 2, 10, 1, 1, 1, 1, 4, 1, 5, 1, 1, 0, 1, 1, 5, 1, 5, 1, 4, 3, 1, 3, 1, 4, 2, 2, 1, 4, 3, 2, 2, 1, 3, 1, 1, 3, 1, 1, 3, 1, 2, 1, 3, 1, 3, 5, 9, 3, 1, 1, 8, 1, 2, 2, 3, 9, 3, 1, 1, 2, 10, 10, 20, 10, '00', 10),
('27/07/2018', '10:00', 3, 2, 1, 1, 1, 2, 1, 5, 10, 2, 1, 1, 4, 1, 1, 4, 1, 1, 0, 1, 1, 4, 1, 4, 1, 3, 1, 1, 2, 1, 2, 4, 1, 1, 5, 2, 2, 2, 1, 1, 1, 2, 1, 4, 1, 1, 4, 2, 4, 1, 4, 1, 5, 9, 4, 1, 2, 8, 1, 1, 4, 1, 9, 1, 1, 1, 1, 30, 10, 10, 10, '00', 10),
('27/07/2010', '07:00', 3, 2, 4, 1, 1, 6, 1, 13, 10, 9, 2, 9, 9, 5, 1, 9, 7, 6, 0, 7, 6, 5, 4, 1, 1, 5, 1, 1, 1, 2, 2, 6, 1, 6, 2, 2, 3, 2, 3, 4, 3, 5, 2, 1, 0, 1, 3, 2, 1, 1, 1, 1, 5, 9, 1, 1, 1, 8, 1, 1, 2, 1, 9, 1, 1, 1, 1, 20, 10, 10, 10, '00', 10),
('27/07/2018', '10:00', 1, 7, 8, 8, 9, 10, 6, 2, 10, 2, 1, 1, 1, 1, 5, 1, 1, 1, 0, 1, 3, 1, 2, 1, 3, 1, 3, 1, 2, 1, 4, 2, 4, 1, 6, 2, 5, 1, 5, 1, 5, 1, 5, 1, 4, 1, 3, 2, 1, 3, 1, 3, 5, 9, 2, 1, 4, 8, 1, 4, 3, 1, 9, 1, 5, 5, 1, 40, 80, 40, 10, '10', 20),
('27/07/2018', '10:00', 1, 1, 7, 4, 1, 2, 4, 2, 40, 4, 1, 5, 1, 4, 1, 4, 1, 3, 0, 4, 1, 6, 1, 2, 1, 4, 1, 4, 1, 2, 2, 2, 3, 3, 5, 2, 2, 1, 1, 1, 4, 1, 6, 1, 4, 1, 4, 2, 4, 1, 5, 1, 5, 9, 4, 1, 5, 8, 4, 1, 4, 1, 9, 1, 5, 1, 4, 30, 10, 20, 40, '40', 50),
('06/08/2018', '12:00', 10, 1, 3, 8, 8, 74, 7, 1, 60, 6, 5, 7, 7, 4, 3, 7, 7, 4, 0, 7, 8, 5, 0, 8, 6, 6, 4, 6, 9, 9, 41, 21, 5, 7, 5, 4, 7, 8, 5, 3, 5, 7, 5, 3, 5, 7, 6, 1, 7, 7, 4, 4, 5, 8, 5, 3, 4, 8, 7, 0, 9, 2, 9, 3, 7, 7, 0, 11, 16, 67, 98, '47', 62),
('06/08/2018', '13:00', 1, 1, 4, 5, 6, 56, 6, 1, 30, 7, 4, 3, 0, 4, 7, 5, 3, 3, 0, 7, 5, 3, 2, 4, 6, 4, 2, 4, 6, 7, 46, 32, 4, 0, 7, 1, 6, 7, 5, 3, 5, 7, 7, 5, 4, 4, 2, 1, 7, 7, 6, 4, 5, 8, 6, 7, 6, 8, 0, 3, 5, 4, 9, 5, 3, 8, 9, 45, 234, 23, 5, '34', 334),
('06/08/2018', '00:00', 1, 1, 3, 3, 3, 3, 3, 3, 20, 4, 2, 2, 2, 2, 2, 2, 2, 2, 0, 2, 4, 3, 4, 5, 3, 5, 2, 3, 5, 4, 4, 4, 2, 3, 3, 3, 4, 3, 4, 2, 2, 3, 3, 2, 3, 4, 2, 2, 3, 2, 3, 2, 5, 9, 9, 2, 2, 8, 2, 2, 2, 5, 9, 2, 8, 2, 4, 23, 34, 124, 123, '22', 54),
('06/08/2018', '00:00', 2, 1, 3, 4, 3, 1, 3, 1, 50, 4, 3, 0, 2, 3, 4, 0, 5, 5, 0, 3, 0, 0, 0, 4, 6, 7, 6, 4, 2, 2, 41, 52, 6, 7, 8, 8, 6, 4, 4, 3, 2, 1, 3, 6, 4, 4, 5, 1, 3, 5, 6, 3, 5, 8, 3, 4, 5, 8, 1, 3, 6, 5, 9, 5, 3, 3, 4, 5, 32323, 45656, 4, '2234', 664),
('06/08/2018', '00:00', 11, 1, 4, 3, 6, 72, 6, 10, 30, 2, 2, 4, 3, 2, 3, 4, 5, 3, 0, 5, 4, 7, 3, 2, 6, 6, 7, 5, 3, 3, 44, 43, 4, 4, 4, 3, 8, 5, 3, 7, 5, 3, 6, 5, 3, 7, 5, 1, 9, 8, 5, 5, 5, 8, 5, 8, 9, 8, 4, 4, 7, 8, 9, 3, 3, 4, 5, 34, 2, 445567, 745, '335', 66),
('07/08/2018', '00:00', 2, 2, 2, 7, 9, 9, 0, 4, 20, 2, 2, 3, 1, 2, 1, 1, 1, 1, 0, 1, 1, 1, 3, 1, 1, 1, 1, 2, 1, 1, 2, 2, 2, 4, 2, 2, 2, 2, 0, 0, 3, 2, 1, 1, 2, 1, 2, 0, 1, 1, 1, 1, 5, 9, 0, 2, 0, 8, 0, 2, 1, 1, 9, 1, 1, 1, 1, 23, 34, 124, 123, '22', 54),
('07/08/2018', '00:00', 2, 2, 2, 7, 9, 9, 0, 4, 20, 2, 2, 3, 1, 2, 1, 1, 1, 1, 0, 1, 1, 1, 3, 1, 1, 1, 1, 2, 1, 1, 2, 2, 2, 4, 2, 2, 2, 2, 0, 0, 3, 2, 1, 1, 2, 1, 2, 0, 1, 1, 1, 1, 5, 9, 0, 2, 0, 8, 0, 2, 1, 1, 9, 1, 1, 1, 1, 23, 34, 124, 123, '22', 54),
('07/08/2018', '01:00', 1, 1, 2, 3, 2, 3, 2, 6, 30, 3, 3, 3, 3, 2, 2, 2, 2, 1, 0, 2, 2, 1, 4, 1, 1, 2, 2, 2, 1, 2, 3, 2, 2, 2, 5, 4, 3, 3, 2, 1, 2, 2, 2, 2, 2, 5, 2, 2, 3, 2, 2, 3, 5, 9, 2, 2, 2, 8, 3, 3, 2, 3, 9, 2, 2, 2, 2, 23, 34, 124, 123, '45', 54),
('07/08/2018', '01:00', 9, 9, 1, 6, 3, 2, 3, 2, 20, 2, 1, 3, 1, 2, 2, 2, 2, 2, 0, 2, 2, 5, 3, 1, 1, 1, 2, 2, 2, 2, 3, 15, 8, 4, 4, 4, 2, 4, 3, 3, 2, 1, 2, 2, 2, 2, 2, 2, 1, 5, 3, 3, 5, 9, 3, 2, 2, 8, 4, 3, 3, 2, 9, 3, 2, 2, 4, 24, 50, 87, 24, '99.9', 56),
('08/08/2018', '03:00', 2, 2, 9, 8, 7, 11, 7, 12, 50, 5, 7, 7, 6, 6, 5, 5, 4, 7, 0, 3, 6, 9, 6, 7, 7, 7, 6, 0, 9, 8, 11, 9, 5, 6, 7, 7, 6, 6, 6, 6, 5, 4, 3, 4, 6, 6, 7, 1, 5, 5, 6, 6, 5, 8, 0, 0, 0, 8, 5, 6, 6, 7, 9, 0, 6, 5, 7, 23, 24, 23, 23, '56', 34),
('09/08/2018', '00:00', 2, 2, 4, 2, 3, 2, 5, 3, 30, 2, 3, 2, 2, 3, 2, 2, 2, 1, 0, 2, 1, 1, 4, 2, 4, 2, 3, 3, 2, 3, 3, 5, 3, 2, 3, 4, 3, 2, 2, 2, 2, 2, 1, 2, 2, 4, 2, 2, 2, 1, 2, 1, 5, 9, 3, 3, 3, 8, 3, 2, 3, 3, 9, 2, 2, 2, 3, 24, 34, 23, 67, '87', 23),
('09/08/2018', '01:00', 2, 2, 3, 4, 3, 2, 3, 3, 20, 3, 1, 3, 2, 2, 2, 3, 2, 2, 0, 3, 2, 1, 3, 3, 2, 3, 3, 3, 2, 1, 3, 3, 2, 0, 4, 2, 4, 1, 2, 3, 2, 2, 2, 2, 3, 3, 2, 2, 3, 2, 2, 3, 5, 9, 2, 3, 2, 8, 1, 2, 2, 2, 9, 3, 2, 1, 2, 24, 50, 124, 23, '22', 32),
('09/08/2018', '02:00', 2, 2, 3, 5, 2, 10, 3, 8, 0, 5, 3, 1, 2, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12, 31, 0, 0, 3, 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 5, 8, 0, 0, 0, 8, 0, 0, 0, 0, 9, 0, 0, 0, 0, 21, 22, 45, 21, '33', 62),
('12/08/2018', '00:00', 2, 2, 3, 3, 4, 6, 4, 3, 40, 3, 1, 2, 3, 2, 1, 1, 1, 5, 0, 4, 4, 3, 6, 2, 2, 1, 2, 0, 3, 1, 2, 3, 2, 2, 3, 2, 3, 5, 3, 2, 2, 1, 1, 2, 1, 1, 1, 2, 2, 1, 1, 1, 5, 9, 1, 1, 1, 8, 1, 2, 1, 1, 9, 1, 1, 1, 2, 23, 44, 56, 23, '34', 123),
('14/08/2018', '00:00', 1, 1, 4, 4, 7, 3, 4, 4, 30, 4, 3, 4, 3, 2, 3, 3, 2, 4, 0, 3, 2, 2, 2, 3, 2, 3, 3, 2, 3, 3, 5, 3, 3, 3, 6, 4, 4, 3, 2, 3, 2, 2, 2, 2, 3, 1, 2, 2, 3, 1, 2, 1, 5, 9, 2, 2, 1, 8, 2, 1, 1, 1, 9, 4, 4, 3, 3, 24, 50, 56, 24, '22', 123),
('14/08/2018', '00:00', 2, 2, 4, 4, 7, 3, 4, 4, 30, 4, 3, 4, 3, 2, 3, 3, 2, 4, 0, 3, 2, 2, 2, 3, 2, 3, 3, 2, 3, 3, 5, 3, 3, 3, 6, 4, 4, 3, 2, 3, 2, 2, 2, 2, 3, 1, 2, 2, 3, 1, 2, 1, 5, 9, 2, 2, 1, 8, 2, 1, 1, 1, 9, 4, 4, 3, 3, 24, 50, 56, 24, '22', 123),
('16/08/2018', '06:00', 2, 2, 4, 4, 5, 56, 7, 6, 10, 4, 5, 6, 3, 3, 6, 5, 7, 2, 0, 7, 5, 9, 3, 6, 7, 5, 7, 8, 4, 5, 71, 52, 4, 6, 5, 6, 8, 5, 6, 6, 7, 8, 4, 7, 8, 4, 6, 1, 8, 4, 6, 6, 5, 8, 7, 8, 4, 8, 7, 6, 8, 4, 9, 5, 7, 5, 8, 4345, 87654, 67856, 86754, '66', 68765),
('16/08/2018', '07:00', 2, 2, 8, 7, 7, 8, 9, 7, 60, 6, 6, 6, 7, 9, 6, 6, 5, 9, 0, 5, 5, 5, 3, 9, 3, 5, 6, 8, 5, 5, 28, 22, 9, 7, 7, 8, 6, 5, 9, 5, 7, 6, 1, 6, 7, 6, 6, 2, 6, 6, 6, 5, 5, 9, 6, 5, 5, 8, 5, 5, 5, 4, 9, 2, 4, 5, 4, 11, 32323, 45656, 5, '2234', 334),
('16/08/2018', '09:00', 2, 2, 7, 8, 5, 35, 9, 12, 50, 3, 5, 7, 8, 3, 3, 5, 6, 9, 0, 5, 7, 8, 8, 5, 6, 5, 8, 6, 8, 7, 66, 69, 8, 7, 8, 9, 10, 9, 8, 7, 8, 7, 6, 8, 7, 9, 6, 1, 6, 8, 6, 6, 5, 8, 9, 8, 7, 8, 7, 8, 4, 7, 9, 8, 5, 7, 6, 4345, 67, 89766, 46578, '87654', 87654),
('16/08/2018', '10:00', 2, 2, 2, 3, 2, 5, 2, 2, 10, 1, 2, 2, 2, 2, 7, 2, 1, 3, 0, 4, 7, 5, 3, 1, 3, 4, 4, 2, 2, 3, 4, 4, 2, 3, 4, 4, 4, 3, 2, 3, 2, 2, 2, 2, 2, 1, 4, 2, 1, 3, 2, 2, 5, 9, 3, 2, 2, 8, 2, 2, 2, 2, 9, 3, 2, 2, 2, 0, 0, 0, 0, 'FCH B', 0),
('16/08/2018', '01:00', 2, 2, 2, 2, 5, 6, 5, 6, 40, 6, 7, 8, 8, 3, 4, 4, 2, 7, 0, 0, 0, 0, 0, 0, 0, 2, 4, 4, 6, 0, 6, 5, 0, 7, 9, 10, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 5, 8, 0, 0, 0, 8, 0, 0, 0, 0, 9, 0, 0, 0, 0, 34, 54, 23, 65, '77', 89),
('16/08/2018', '19:00', 2, 2, 9, 9, 8, 13, 9, 5, 60, 6, 5, 6, 4, 3, 3, 1, 1, 4, 0, 5, 5, 5, 9, 3, 2, 3, 3, 2, 1, 4, 2, 6, 4, 5, 5, 4, 4, 1, 2, 4, 1, 5, 3, 1, 4, 1, 4, 2, 1, 4, 1, 4, 5, 9, 1, 5, 1, 8, 4, 5, 1, 3, 9, 4, 1, 5, 1, 34, 16, 44556, 98, '47', 62),
('16/08/2018', '06:00', 2, 2, 6, 6, 6, 6, 6, 4, 50, 5, 3, 5, 3, 5, 7, 6, 5, 7, 0, 6, 4, 5, 4, 4, 4, 3, 5, 6, 4, 4, 19, 5, 5, 6, 9, 8, 8, 7, 3, 5, 8, 6, 2, 6, 6, 7, 7, 1, 4, 5, 5, 0, 5, 8, 4, 4, 4, 8, 8, 8, 7, 7, 9, 3, 5, 6, 4, 353, 4567, 977, 65656, '4466', 4656),
('16/08/2018', '07:00', 3, 3, 2, 2, 2, 3, 3, 3, 30, 3, 3, 3, 2, 2, 3, 2, 2, 2, 0, 2, 2, 2, 2, 2, 3, 2, 2, 3, 1, 1, 2, 2, 2, 0, 3, 3, 4, 3, 3, 3, 2, 3, 2, 3, 3, 3, 4, 2, 3, 2, 3, 2, 5, 9, 2, 2, 2, 8, 0, 2, 2, 2, 9, 3, 3, 2, 2, 0, 0, 0, 0, 'DFT', 0),
('16/08/2018', '17:00', 2, 2, 6, 8, 7, 76, 9, 17, 60, 6, 7, 8, 8, 7, 7, 7, 9, 7, 0, 6, 7, 8, 9, 8, 8, 6, 7, 8, 8, 5, 61, 15, 7, 6, 8, 8, 7, 5, 3, 6, 6, 6, 6, 5, 6, 7, 6, 1, 6, 7, 6, 7, 5, 8, 6, 7, 6, 8, 6, 7, 6, 8, 9, 6, 3, 7, 6, 987, 98765, 97868, 9876, '08976', 87654),
('17/08/2018', '07:00', 2, 2, 3, 3, 2, 3, 2, 4, 20, 3, 2, 3, 2, 2, 1, 1, 1, 1, 0, 3, 4, 3, 1, 2, 3, 2, 2, 2, 2, 0, 3, 2, 1, 2, 2, 3, 2, 1, 2, 2, 1, 1, 2, 1, 1, 2, 1, 2, 2, 1, 2, 2, 5, 9, 1, 1, 2, 8, 2, 1, 2, 2, 9, 1, 2, 1, 1, 1, 6, 124, 19, '89', 23),
('20/08/2018', '00:00', 2, 2, 2, 4, 3, 3, 5, 4, 30, 2, 2, 1, 2, 3, 2, 3, 2, 1, 0, 2, 1, 1, 1, 1, 2, 1, 4, 2, 1, 2, 2, 3, 1, 1, 2, 3, 4, 1, 2, 1, 2, 1, 1, 1, 2, 1, 1, 2, 2, 2, 5, 2, 5, 9, 1, 2, 2, 8, 1, 2, 2, 1, 9, 3, 2, 3, 2, 24, 50, 56, 123, '22', 54),
('20/08/2018', '01:00', 3, 3, 3, 4, 4, 7, 3, 5, 40, 5, 2, 5, 4, 3, 3, 2, 4, 4, 0, 3, 3, 3, 3, 2, 2, 5, 3, 2, 1, 1, 6, 4, 3, 4, 3, 3, 4, 2, 3, 2, 2, 2, 1, 3, 2, 2, 3, 2, 1, 4, 2, 2, 5, 9, 3, 1, 2, 8, 2, 3, 1, 3, 9, 2, 3, 1, 1, 23, 34, 56, 24, '54', 123),
('20/08/2018', '02:00', 2, 2, 3, 3, 2, 3, 2, 2, 10, 3, 2, 1, 1, 2, 2, 2, 1, 5, 0, 2, 1, 2, 1, 1, 2, 1, 2, 1, 1, 2, 2, 2, 2, 1, 2, 2, 3, 1, 1, 1, 1, 2, 1, 1, 2, 1, 1, 2, 1, 2, 1, 1, 5, 9, 1, 1, 1, 8, 1, 1, 2, 1, 9, 1, 1, 2, 1, 12, 50, 56, 123, '23', 54),
('20/08/2018', '03:00', 2, 2, 3, 3, 2, 3, 2, 2, 10, 3, 2, 1, 1, 2, 2, 2, 1, 5, 0, 2, 1, 2, 1, 1, 2, 1, 2, 1, 1, 2, 2, 2, 2, 1, 2, 2, 3, 1, 1, 1, 1, 2, 1, 1, 2, 1, 1, 2, 1, 2, 1, 1, 5, 9, 1, 1, 1, 8, 1, 1, 2, 1, 9, 1, 1, 2, 1, 12, 50, 56, 123, '23', 54),
('20/08/2018', '04:00', 2, 2, 3, 3, 2, 3, 2, 2, 10, 3, 2, 1, 1, 2, 2, 2, 1, 5, 0, 2, 1, 2, 1, 1, 2, 1, 2, 1, 1, 2, 2, 2, 2, 1, 2, 2, 3, 1, 1, 1, 1, 2, 1, 1, 2, 1, 1, 2, 1, 2, 1, 1, 5, 9, 1, 1, 1, 8, 1, 1, 2, 1, 9, 1, 1, 2, 1, 12, 50, 56, 123, '23', 54),
('28/08/2018', '00:00', 2, 2, 3, 4, 5, 4, 4, 4, 40, 2, 3, 2, 7, 4, 3, 3, 3, 3, 0, 2, 3, 2, 3, 2, 2, 3, 3, 3, 2, 2, 3, 3, 1, 2, 2, 4, 3, 1, 1, 3, 2, 2, 1, 1, 2, 1, 2, 2, 1, 1, 1, 1, 5, 9, 2, 1, 1, 8, 1, 1, 1, 2, 9, 1, 1, 1, 1, 12, 34, 23, 23, '22', 54),
('28/08/2018', '01:00', 2, 2, 3, 4, 5, 4, 4, 4, 40, 2, 3, 2, 7, 4, 3, 3, 3, 3, 0, 2, 3, 2, 3, 2, 2, 3, 3, 3, 2, 2, 3, 3, 1, 2, 2, 4, 3, 1, 1, 3, 2, 2, 1, 1, 2, 1, 2, 2, 1, 1, 1, 1, 5, 9, 2, 1, 1, 8, 1, 1, 1, 2, 9, 1, 1, 1, 1, 12, 34, 23, 23, '22', 54);

-- --------------------------------------------------------

--
-- Table structure for table `past_weather`
--

CREATE TABLE `past_weather` (
  `pastweather_id` int(2) NOT NULL,
  `pastweather_code` varchar(2) NOT NULL,
  `pastweather_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `past_weather`
--

INSERT INTO `past_weather` (`pastweather_id`, `pastweather_code`, `pastweather_description`) VALUES
(1, '00', 'Cloud cover  half or less of the sky throughout the appropriate period'),
(2, '01', 'Cloud cover  half or less for part of the appropriate period and more than half for part of the period'),
(3, '02', 'Cloud cover more than half of the sky throughout the appropriate period'),
(4, '03', 'Duststorm, sandstorm or blowing snow-visibility less than 1,000 metres'),
(5, '04', 'Fog or thick haze'),
(6, '05', 'Drizzle'),
(7, '06', 'Rain'),
(8, '07', 'Snow'),
(9, '08', 'Showers'),
(10, '09', 'Thunderstorm, with or without precipitation'),
(11, '10', ''),
(12, '11', 'Cloud cover  half or less for part of the appropriate period and more than half for part of the period'),
(13, '12', ''),
(14, '13', ''),
(15, '14', ''),
(16, '15', ''),
(17, '16', ''),
(18, '17', ''),
(19, '18', ''),
(20, '19', ''),
(21, '20', ''),
(22, '21', ''),
(23, '22', 'Cloud cover more than half of the sky throughout the appropriate period'),
(24, '23', ''),
(25, '24', ''),
(26, '25', ''),
(27, '26', ''),
(28, '26', ''),
(29, '27', ''),
(30, '28', ''),
(31, '29', ''),
(32, '30', ''),
(33, '31', ''),
(34, '32', ''),
(35, '33', 'Duststorm, sandstorm or blowing snow-visibility less than 1,000 metres'),
(36, '34', ''),
(37, '35', ''),
(38, '36', ''),
(39, '37', ''),
(40, '38', ''),
(41, '39', ''),
(42, '40', ''),
(43, '41', ''),
(44, '42', ''),
(45, '43', ''),
(46, '44', 'Fog or thick haze'),
(47, '45', ''),
(48, '46', ''),
(49, '47', ''),
(50, '48', ''),
(51, '49', ''),
(52, '50', ''),
(53, '51', ''),
(54, '52', ''),
(55, '53', ''),
(56, '54', ''),
(57, '55', 'Drizzle'),
(58, '56', ''),
(59, '57', ''),
(60, '58', ''),
(61, '59', ''),
(62, '60', ''),
(63, '61', ''),
(64, '62', ''),
(65, '63', ''),
(66, '64', ''),
(67, '65', ''),
(68, '66', 'Rain'),
(69, '67', ''),
(70, '68', ''),
(71, '69', ''),
(72, '70', ''),
(73, '71', ''),
(74, '72', ''),
(75, '73', ''),
(76, '74', ''),
(77, '75', ''),
(78, '76', ''),
(79, '77', 'Snow'),
(80, '78', ''),
(81, '79', ''),
(82, '80', ''),
(83, '80', ''),
(84, '81', ''),
(85, '82', ''),
(86, '83', ''),
(87, '84', ''),
(88, '85', ''),
(89, '86', ''),
(90, '87', ''),
(91, '88', 'Showers'),
(92, '89', ''),
(93, '90', ''),
(94, '91', ''),
(95, '92', ''),
(96, '93', ''),
(97, '94', ''),
(98, '95', 'Thunderstorm, with or without drizzle'),
(99, '96', 'Thunderstorm, with or without rain'),
(100, '97', ''),
(101, '98', ''),
(102, '99', 'Thunderstorm, with or without precipitation');

-- --------------------------------------------------------

--
-- Table structure for table `present_weather`
--

CREATE TABLE `present_weather` (
  `presentweather_id` int(2) NOT NULL,
  `presentweather_code` varchar(2) NOT NULL,
  `presentweather_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `present_weather`
--

INSERT INTO `present_weather` (`presentweather_id`, `presentweather_code`, `presentweather_description`) VALUES
(1, '00', 'Cloud development not observed or observable'),
(2, '01', 'Cloud(s) dissolving or becoming less developed'),
(3, '02', 'State of the sky on the whole unchanged'),
(4, '03', 'Cloud(s) generally forming or developing'),
(5, '04', 'Visibility reduced by smoke haze'),
(6, '05', 'Haze'),
(7, '06', 'Widespread dust in suspension in the air,not raised by wind at or near station at the time of observation'),
(8, '07', 'Dust or sand raised by the wind at or near the station at the time of observation,but not well developed dust whirls, and no sandstorm seen or, in case of ships, blowing spray at the station'),
(9, '08', 'Well developed dust whirls or sand whirl seen at or near the station during the preceding hour or at the time of observation, but no duststorm or sandstorm'),
(10, '09', 'Duststorm or sandstorm within sight at the time of observation, or at the station during the preceding hour'),
(11, '10', 'Mist'),
(12, '11', 'Patches of shallow fog or ice fog'),
(13, '12', 'More or less continuous shallow fog or ice fog less than 2 metres on land or 10 metres at sea'),
(14, '13', 'Lightning seen, no thunder heard'),
(15, '14', 'Precipitation within sight, not reaching the ground or the surface of the sea'),
(16, '15', 'Precipitation witin sight, reaching the ground or the surface of the sea, but distant(estimated to be more than 5km from the station)'),
(17, '16', 'Precipitation within sight , reaching the ground or the surface of the sea, near to, but not at the station'),
(18, '17', 'Thunderstorm, but no precipitation at the time of observation'),
(19, '18', 'Squall(s) at or within sight of the station during the preceding hour or at the time of observation'),
(20, '19', 'Funnel cloud(s) at or within sight of the station during the preceding hour or at the time of observation'),
(21, '20', 'Drizzle(not freezing) or snow grains, not falling at showers'),
(22, '21', 'Rain(not freezing), not falling as showers'),
(23, '22', 'Snow, not falling as showers'),
(24, '23', 'Rain and snow or ice pellets, not falling as showers'),
(25, '24', 'Freeing drizzle or freezing rain, not falling as showers'),
(26, '25', 'Shower(s) of rain'),
(27, '26', 'Shower(s) of snow, or of rain and snow'),
(28, '27', 'Shower(s) of hail, or of rain and hail'),
(29, '28', 'Fog or ice fog'),
(30, '29', 'Thunderstorm(with or without precipitation)'),
(31, '30', 'Slight or moderate duststorm or sandstorm-has decreased during the preceding hour '),
(32, '31', 'Slight or moderate duststorm or sandstorm-no appreciable change during the preceding hour'),
(33, '32', 'Slight or moderate duststorm or sandstorm-has begun or increased during the preceding hour'),
(34, '33', 'Severe duststorm or sandstorm-has decreased during the preceding hour '),
(35, '34', 'Severe duststorm or sandstorm-no appreciable change during the preceding hour'),
(36, '35', 'Severe duststorm or sandstorm-has begun or increased during the preceding hour'),
(37, '36', 'Slight or moderate drifting snow,generally low(below eye level)'),
(38, '37', 'Heavy drifting snow,generally low (below eye level)'),
(39, '38', 'Slight or moderate drifting snow, generally high ( above eye level)'),
(40, '39', 'Heavy drifting snow,generally high(above eye level)'),
(41, '40', 'Fog or ice at a distance at the time of observation, but not at the station during the preceding hour,the fog or ice fog extending to a level above that of the observer'),
(42, '41', 'Fog or ice fog in patches'),
(43, '42', 'Fog or ice fog, sky visible, has become thinner during the preceding hour'),
(44, '43', 'Fog or ice fog, sky obscured, has become thinner during the preceding hour'),
(45, '44', 'Fog or ice fog, sky visible, no appreciable change during the preceding hour \"'),
(46, '45', 'Fog or ice fog, sky obscured, no appreciable change during the preceding hour\"'),
(47, '46', 'Fog or ice fog , sky obscured , has begun or become thicker during the preceding hour \"'),
(48, '47', 'Fog or ice fog, sky obscured, has begun or become thicker during the preceding hour\"'),
(49, '48', 'Fog depositing time, sky visible'),
(50, '49', 'Fog, depositing time, sky obscured'),
(51, '50', 'Drizzle, not freezing, intermittent-slight at the time of observation\"'),
(52, '51', 'Drizzle, not freezing, continuous-slight at the time of observation\"'),
(53, '52', 'Drizzle, not freezing intermittent-moderate at the time of observation\"'),
(54, '53', 'Drizzle, not freezing, continuous-moderate at the time of observation \"'),
(55, '54', 'Drizzle, not freezing, intermittent-heavy (dense)at the time of observation\"'),
(56, '55', 'Drizzle, not freezing, continuous-heavy (dense) at the time of observation\"'),
(57, '56', 'Drizzle, freezing, slight'),
(58, '57', 'Drizzle, freezing, moderate or heavy(dense)'),
(59, '58', 'Drizzle and rain, slight'),
(60, '59', 'Drizzle and rain, moderate or heavy(dense)'),
(61, '60', 'Rain, not freezing, intermittent-slight at the time of observation'),
(62, '61', 'Rain, not freezing, continuous-slight at the time of observation'),
(63, '62', 'Rain, not freezing, intermittent-moderate at the time of observation '),
(64, '63', 'Rain, not freezing, continuous-moderate at the time of observation '),
(65, '64', 'Rain, not freezing, intermittent-heavy at the time of observation '),
(66, '65', 'Rain, not freezing, continuous-heavy at the time of observation '),
(67, '66', 'Rain, freezing, slight\"'),
(68, '67', 'Rain, freezing, moderate or heavy'),
(69, '68', 'Rain, or drizzle and  snow, slight'),
(70, '69', 'Rain, or drizzle and snow, moderate or heavy'),
(71, '70', 'Intermittent fall of snowflakes-slight at the time of observation'),
(72, '71', 'Continuous fall of snowflakes-slight at the time of observation'),
(73, '72', 'Intermittent fall of snowflakes-moderate at the time of observation '),
(74, '73', 'Continuous fall of snowflakes-moderate at the time of observation '),
(75, '74', 'Intermittent fall of snowflakes-heavy at the time of observation '),
(76, '75', 'Continuous fall of snowflakes-heavy at the time of observation '),
(77, '76', 'Diamond dust(with or without fog)'),
(78, '77', 'Snow grains(with or without fog)'),
(79, '78', 'Isolated star-like snow crystals (with or without fog)'),
(80, '79', 'Ice pellets'),
(81, '80', 'Rain shower(s) , slight'),
(82, '81', 'Rain shower(s), moderate or heavy'),
(83, '82', 'Rain shower(s) , violent'),
(84, '83', 'Shower(s) or rain and snow mixed, slight'),
(85, '84', 'Shower(s) or rain and snow mixed, moderate or heavy'),
(86, '85', 'Snow shower(s), slight'),
(87, '86', 'Snow shower(s), slight or heavy'),
(88, '87', 'Shower(s) of snow pelles or small hail , with or without rain or rain and snow mixed, slight'),
(89, '88', 'Shower(s) of snow pellets or small hail, with or without rain or rain and snow mixed, moderate or heavy'),
(90, '89', 'Shower(s) of hail, with or without rain or rain and snow mixed, not associated with thuder , slight'),
(91, '90', 'Shower(s) of hail, with or without rain or rain and snow mixed, not associated with thunder, moderate or heavy'),
(92, '91', 'Slight rain at the time of observation'),
(93, '92', 'Moderate or heavy rain at the time of observation'),
(94, '93', 'Slight snow, or rain and snow, or hail at the time of observation'),
(95, '94', 'Moderate or heavy snow, or rain and snow mixed, or hail at the time of observation'),
(96, '95', 'Thunderstorm, slight or moderate, without hail but with rain andor snow at the time of observation'),
(97, '96', 'Thunderst slight or moderate, with hail at the time of observation'),
(98, '97', 'Thunderstorm, heavy, without hail but with rain and/or snow at the time of observation'),
(99, '98', 'Thunderstorm, combined with duststorm or sandstorm at the time of observation'),
(100, '99', 'Thunderstorm, heavy, with hail at the time of observation');

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `registered` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `category` varchar(30) NOT NULL,
  `station` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`id`, `username`, `password`, `category`, `station`) VALUES
(0, 'guut', 'guutadmin', 'Met Station', 'Abuja'),
(0, 'guut', 'guutadmin', 'Met Station', 'Abuja'),
(0, 'admin', 'fmysdadmin', 'Met Station', 'Abuja'),
(0, 'admin', 'fmysdadmin', 'Met Station', 'Abuja'),
(0, 'agrostore', 'Agro@Store218', 'Collaborated Met Statios', 'Lagos');

-- --------------------------------------------------------

--
-- Table structure for table `station_no`
--

CREATE TABLE `station_no` (
  `stationnos_id` int(2) NOT NULL,
  `location_id` int(2) NOT NULL,
  `station_nos` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `station_no`
--

INSERT INTO `station_no` (`stationnos_id`, `location_id`, `station_nos`) VALUES
(1, 1, '65213'),
(2, 2, '65125'),
(3, 3, '65232'),
(4, 4, '65246'),
(5, 5, '65055'),
(6, 6, '65229'),
(7, 7, '66112'),
(8, 8, '65003'),
(9, 9, '65264'),
(10, 10, '65257'),
(11, 11, '65075'),
(12, 12, '65015'),
(13, 13, '65208'),
(14, 14, '65145'),
(15, 15, '65210'),
(16, 16, '65201'),
(17, 17, '65273'),
(18, 18, '65101'),
(19, 19, '65200'),
(20, 20, '65134'),
(21, 21, '65019'),
(22, 22, '65046'),
(23, 23, '66134'),
(24, 24, '65205'),
(25, 25, '65203'),
(26, 26, '65243'),
(27, 27, '65082'),
(28, 28, '65271'),
(29, 29, '65123'),
(30, 30, '65064'),
(31, 31, '65275'),
(32, 32, '65222'),
(33, 33, '65245'),
(34, 34, '65202'),
(35, 35, '65215'),
(36, 36, '65252'),
(37, 37, '65250'),
(38, 38, '65073'),
(39, 39, '65108'),
(40, 40, '65010'),
(41, 41, '65254'),
(42, 42, '65260'),
(43, 43, '65236'),
(44, 44, '65001'),
(45, 45, '65167'),
(46, 46, '65030');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` int(2) NOT NULL,
  `station` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role`, `station`, `status`) VALUES
(1, 'saojih', 'saojihadmin', 1, 'Abuja', 1);

-- --------------------------------------------------------

--
-- Table structure for table `visibility`
--

CREATE TABLE `visibility` (
  `visibility_id` int(2) NOT NULL,
  `visibility_code` varchar(2) NOT NULL,
  `visibility_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visibility`
--

INSERT INTO `visibility` (`visibility_id`, `visibility_code`, `visibility_description`) VALUES
(1, '00', '<0.0'),
(2, '01', '0.1'),
(3, '02', '0.2'),
(4, '03', '0.3'),
(5, '04', '0.4'),
(6, '05', '0.5'),
(7, '06', '0.6'),
(8, '07', '0.7'),
(9, '08', '0.8'),
(10, '09', '0.9'),
(11, '10', '1'),
(12, '11', '1.1'),
(13, '12', '1.2'),
(14, '13', '1.3'),
(15, '14', '1.4'),
(16, '15', '1.5'),
(17, '16', '1.6'),
(18, '17', '1.7'),
(19, '18', '1.8'),
(20, '19', '1.9'),
(21, '20', '2'),
(22, '21', '2.1'),
(23, '22', '2.2'),
(24, '23', '2.3'),
(25, '24', '2.4'),
(26, '25', '2.5'),
(27, '26', '2.6'),
(28, '27', '2.7'),
(29, '28', '2.8'),
(30, '29', '2.9'),
(31, '30', '3'),
(32, '31', '3.1'),
(33, '32', '3.2'),
(34, '33', '3.3'),
(35, '34', '3.4'),
(36, '35', '3.5'),
(37, '36', '3.6'),
(38, '37', '3.7'),
(39, '38', '3.8'),
(40, '39', '3.9'),
(41, '40', '4'),
(42, '41', '4.1'),
(43, '42', '4.2'),
(44, '43', '4.3'),
(45, '44', '4.4'),
(46, '45', '4.5'),
(47, '46', '4.6'),
(48, '47', '4.7'),
(49, '48', '4.8'),
(50, '49', '4.9'),
(51, '50', '5'),
(52, '56', '6'),
(53, '57', '7'),
(54, '58', '8'),
(55, '59', '9'),
(56, '60', '10'),
(57, '61', '11'),
(58, '62', '12'),
(59, '63', '13'),
(60, '64', '14'),
(61, '65', '15'),
(62, '66', '16'),
(63, '67', '17'),
(64, '68', '18'),
(65, '69', '19'),
(66, '70', '20'),
(67, '71', '21'),
(68, '72', '22'),
(69, '73', '23'),
(70, '74', '24'),
(71, '75', '25'),
(72, '76', '26'),
(73, '77', '27'),
(74, '78', '28'),
(75, '79', '29'),
(76, '80', '30'),
(77, '81', '35'),
(78, '82', '40'),
(79, '83', '45'),
(80, '84', '50'),
(81, '85', '55'),
(82, '86', '60'),
(83, '87', '65'),
(84, '88', '70'),
(85, '89', '>70'),
(86, '90', '<0.05'),
(87, '91', '0.05'),
(88, '92', '0.2'),
(89, '93', '0.5'),
(90, '94', '1.0'),
(91, '95', '2.0'),
(92, '96', '4.0'),
(93, '97', '10.0'),
(94, '98', '20.0'),
(95, '99', '>=50');

-- --------------------------------------------------------

--
-- Table structure for table `weather_forecast`
--

CREATE TABLE `weather_forecast` (
  `day1` varchar(65) NOT NULL,
  `hour1` varchar(5) NOT NULL,
  `location_id` int(3) NOT NULL,
  `stationnos_id` int(3) NOT NULL,
  `rh` varchar(10) NOT NULL,
  `atm` varchar(10) NOT NULL,
  `lowcloud_id1` int(2) NOT NULL,
  `presentweather_id1` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weather_forecast`
--

INSERT INTO `weather_forecast` (`day1`, `hour1`, `location_id`, `stationnos_id`, `rh`, `atm`, `lowcloud_id1`, `presentweather_id1`) VALUES
('23/07/2018', '07:00', 1, 1, '45', '23', 4, '8'),
('23/07/2018', '08:00', 1, 1, '45', '23', 3, '10'),
('26/07/2018', '01:00', 2, 1, '80', '28.6', 3, '3'),
('26/07/2018', '12:00', 2, 1, '50', '50', 5, '8'),
('07/08/2018', '06:00', 2, 1, '20', '33', 3, '9'),
('09/08/2018', '06:00', 4, 1, '80', '28.6', 3, '4'),
('16/08/2018', '06:00', 2, 2, '56', '55', 2, '14'),
('16/08/2018', '11:00', 2, 2, '23', '56', 5, '67'),
('16/08/2018', '11:00', 2, 2, '23', '56', 5, '67'),
('17/08/2018', '07:00', 2, 2, '45', '23', 1, '1'),
('17/08/2018', '06:00', 3, 3, '24', '24', 10, '11'),
('28/08/2018', '00:00', 2, 2, '59', '31', 6, '8'),
('28/08/2018', '01:00', 2, 2, '43', '43', 3, '1');

-- --------------------------------------------------------

--
-- Table structure for table `wind_direction`
--

CREATE TABLE `wind_direction` (
  `winddirection_id` int(2) NOT NULL,
  `winddirection_code` varchar(2) NOT NULL,
  `direction_value` varchar(100) NOT NULL,
  `direction` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wind_direction`
--

INSERT INTO `wind_direction` (`winddirection_id`, `winddirection_code`, `direction_value`, `direction`) VALUES
(1, '00', '0°', 'North'),
(2, '02', '20°', ' North North East'),
(3, '05', '50°', 'North East'),
(4, '07', '70°', 'North East East'),
(5, '09', '90°', 'East'),
(6, '11', '110°', 'South East East'),
(7, '14', '140°', 'South East'),
(8, '16', '160°', 'South South East'),
(9, '18', '180°', 'South'),
(10, '20', '200°', 'South South  West'),
(11, '23', '230°', 'South West'),
(12, '25', '250°', 'South South West'),
(13, '27', '270°', 'West'),
(14, '29', '290°', 'North West West'),
(15, '32', '320°', 'North West'),
(16, '34', '340°', ' North North West'),
(17, '36', '360°', 'North');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `decoded`
--
ALTER TABLE `decoded`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `high_cloud`
--
ALTER TABLE `high_cloud`
  ADD PRIMARY KEY (`highcloud_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `low_cloud`
--
ALTER TABLE `low_cloud`
  ADD PRIMARY KEY (`lowcloud_id`);

--
-- Indexes for table `marine_weather`
--
ALTER TABLE `marine_weather`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medium_cloud`
--
ALTER TABLE `medium_cloud`
  ADD PRIMARY KEY (`mediumcloud_id`);

--
-- Indexes for table `past_weather`
--
ALTER TABLE `past_weather`
  ADD PRIMARY KEY (`pastweather_id`);

--
-- Indexes for table `present_weather`
--
ALTER TABLE `present_weather`
  ADD PRIMARY KEY (`presentweather_id`);

--
-- Indexes for table `station_no`
--
ALTER TABLE `station_no`
  ADD PRIMARY KEY (`stationnos_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `visibility`
--
ALTER TABLE `visibility`
  ADD PRIMARY KEY (`visibility_id`);

--
-- Indexes for table `wind_direction`
--
ALTER TABLE `wind_direction`
  ADD PRIMARY KEY (`winddirection_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `decoded`
--
ALTER TABLE `decoded`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `high_cloud`
--
ALTER TABLE `high_cloud`
  MODIFY `highcloud_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `location_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `low_cloud`
--
ALTER TABLE `low_cloud`
  MODIFY `lowcloud_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `marine_weather`
--
ALTER TABLE `marine_weather`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `medium_cloud`
--
ALTER TABLE `medium_cloud`
  MODIFY `mediumcloud_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `past_weather`
--
ALTER TABLE `past_weather`
  MODIFY `pastweather_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `present_weather`
--
ALTER TABLE `present_weather`
  MODIFY `presentweather_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `station_no`
--
ALTER TABLE `station_no`
  MODIFY `stationnos_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wind_direction`
--
ALTER TABLE `wind_direction`
  MODIFY `winddirection_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
