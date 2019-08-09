-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2018 at 02:16 PM
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
-- Table structure for table `present_weather`
--

CREATE TABLE `present_weather` (
  `code_figure` int(200) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `present_weather`
--

INSERT INTO `present_weather` (`code_figure`, `description`) VALUES
(0, 'Cloud development not observed or observable'),
(1, 'Cloud(s) dissolving or becoming less developed'),
(2, 'State of the sky on the whole unchanged'),
(3, 'Cloud(s) generally forming or developing'),
(4, 'Visibility reduced by smoke haze'),
(5, 'Haze'),
(5, 'Widespread dust in suspension in the air,not raised by wind at or near station at the time of observation'),
(7, 'Dust or sand raised by the wind at or near the station at the time of observation,but not well developed dust whirls, and no sandstorm seen or, in case of ships, blowing spray at the station'),
(8, 'Well developed dust whirls or sand whirl seen at or near the station during the preceding hour or at the time of observation, but no duststorm or sandstorm'),
(9, 'Duststorm or sandstorm within sight at the time of observation, or at the station during the preceding hour'),
(10, 'Mist'),
(11, 'Patches of shallow fog or ice fog'),
(12, 'More or less continuous shallow fog or ice fog less than 2 metres on land or 10 metres at sea'),
(13, 'Lightning seen, no thunder heard'),
(14, 'Precipitation within sight, not reaching the ground or the surface of the sea'),
(15, 'Precipitation witin sight, reaching the ground or the surface of the sea, but distant(estimated to be more than 5km from the station)'),
(1, 'Precipitation within sight , reaching the ground or the surface of the sea, near to, but not at the station'),
(17, 'Thunderstorm, but no precipitation at the time of observation'),
(18, 'Squall(s) at or within sight of the station during the preceding hour or at the time of observation'),
(19, 'Funnel cloud(s) at or within sight of the station during the preceding hour or at the time of observation'),
(20, 'Drizzle(not freezing) or snow grains, not falling at showers'),
(21, 'Rain(not freezing), not falling as showers'),
(22, 'Snow, not falling as showers'),
(22, 'Rain and snow or ice pellets, not falling as showers'),
(24, 'Freeing drizzle or freezing rain, not falling as showers'),
(25, 'Shower(s) of rain'),
(26, 'Shower(s) of snow, or of rain and snow'),
(27, 'Shower(s) of hail, or of rain and hail'),
(28, 'Fog or ice fog'),
(29, 'Thunderstorm(with or without precipitation)'),
(30, 'Slight or moderate duststorm or sandstorm-has decreased during the preceding hour '),
(31, 'Slight or moderate duststorm or sandstorm-no appreciable change during the preceding hour'),
(32, 'Slight or moderate duststorm or sandstorm-has begun or increased during the preceding hour'),
(33, 'Severe duststorm or sandstorm-has decreased during the preceding hour '),
(34, 'Severe duststorm or sandstorm-no appreciable change during the preceding hour'),
(35, 'Severe duststorm or sandstorm-has begun or increased during the preceding hour'),
(36, 'Slight or moderate drifting snow,generally low(below eye level)'),
(37, 'Heavy drifting snow,generally low (below eye level)'),
(38, 'Slight or moderate drifting snow, generally high ( above eye level)'),
(39, 'Heavy drifting snow,generally high(above eye level)'),
(40, 'Fog or ice at a distance at the time of observation, but not at the station during the preceding hour,the fog or ice fog extending to a level above that of the observer'),
(41, 'Fog or ice fog in patches'),
(42, 'Fog or ice fog, sky visible, has become thinner during the preceding hour'),
(43, 'Fog or ice fog, sky obscured, has become thinner during the preceding hour'),
(44, 'Fog or ice fog, sky visible, no appreciable change during the preceding hour \"'),
(45, 'Fog or ice fog, sky obscured, no appreciable change during the preceding hour\"'),
(46, 'Fog or ice fog , sky obscured , has begun or become thicker during the preceding hour \"'),
(47, 'Fog or ice fog, sky obscured, has begun or become thicker during the preceding hour\"'),
(48, 'Fog depositing time, sky visible'),
(49, 'Fog, depositing time, sky obscured'),
(50, 'Drizzle, not freezing, intermittent-slight at the time of observation\"'),
(51, 'Drizzle, not freezing, continuous-slight at the time of observation\"'),
(52, 'Drizzle, not freezing intermittent-moderate at the time of observation\"'),
(53, 'Drizzle, not freezing, continuous-moderate at the time of observation \"'),
(54, 'Drizzle, not freezing, intermittent-heavy (dense)at the time of observation\"'),
(55, 'Drizzle, not freezing, continuous-heavy (dense) at the time of observation\"'),
(56, 'Drizzle, freezing, slight'),
(57, 'Drizzle, freezing, moderate or heavy(dense)'),
(58, 'Drizzle and rain, slight'),
(59, 'Drizzle and rain, moderate or heavy(dense)'),
(60, 'Rain, not freezing, intermittent-slight at the time of observation'),
(61, 'Rain, not freezing, continuous-slight at the time of observation'),
(62, 'Rain, not freezing, intermittent-moderate at the time of observation '),
(63, 'Rain, not freezing, continuous-moderate at the time of observation '),
(64, 'Rain, not freezing, intermittent-heavy at the time of observation '),
(65, 'Rain, not freezing, continuous-heavy at the time of observation '),
(66, 'Rain, freezing, slight\"'),
(67, 'Rain, freezing, moderate or heavy'),
(68, 'Rain, or drizzle and  snow, slight'),
(69, 'Rain, or drizzle and snow, moderate or heavy'),
(70, 'Intermittent fall of snowflakes-slight at the time of observation'),
(71, 'Continuous fall of snowflakes-slight at the time of observation'),
(72, 'Intermittent fall of snowflakes-moderate at the time of observation '),
(73, 'Continuous fall of snowflakes-moderate at the time of observation '),
(74, 'Intermittent fall of snowflakes-heavy at the time of observation '),
(75, 'Continuous fall of snowflakes-heavy at the time of observation '),
(76, 'Diamond dust(with or without fog)'),
(77, 'Snow grains(with or without fog)'),
(78, 'Isolated star-like snow crystals (with or without fog)'),
(79, 'Ice pellets'),
(80, 'Rain shower(s) , slight'),
(81, 'Rain shower(s), moderate or heavy'),
(82, 'Rain shower(s) , violent'),
(83, 'Shower(s) or rain and snow mixed, slight'),
(84, 'Shower(s) or rain and snow mixed, moderate or heavy'),
(85, 'Snow shower(s), slight'),
(86, 'Snow shower(s), slight or heavy'),
(87, 'Shower(s) of snow pelles or small hail , with or without rain or rain and snow mixed, slight'),
(88, 'Shower(s) of snow pellets or small hail, with or without rain or rain and snow mixed, moderate or heavy'),
(89, 'Shower(s) of hail, with or without rain or rain and snow mixed, not associated with thuder , slight'),
(90, 'Shower(s) of hail, with or without rain or rain and snow mixed, not associated with thunder, moderate or heavy'),
(91, 'Slight rain at the time of observation'),
(92, 'Moderate or heavy rain at the time of observation'),
(93, 'Slight snow, or rain and snow, or hail at the time of observation'),
(94, 'Moderate or heavy snow, or rain and snow mixed, or hail at the time of observation'),
(95, 'Thunderstorm, slight or moderate, without hail but with rain andor snow at the time of observation'),
(96, 'Thunderst slight or moderate, with hail at the time of observation'),
(97, 'Thunderstorm, heavy, without hail but with rain and/or snow at the time of observation'),
(98, 'Thunderstorm, combined with duststorm or sandstorm at the time of observation'),
(99, 'Thunderstorm, heavy, with hail at the time of observation');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
