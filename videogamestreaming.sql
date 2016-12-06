-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2016 at 05:59 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `videogamestreaming`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `GameTitle` text NOT NULL,
  `Thumbnail` text NOT NULL,
  `ReleaseDate` date NOT NULL,
  `GameID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`GameID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Username` text NOT NULL,
  `Email` text NOT NULL,
  `Hash` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uservideos`
--

DROP TABLE IF EXISTS `uservideos`;
CREATE TABLE IF NOT EXISTS `uservideos` (
  `Uploader` text NOT NULL,
  `VideoID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `VideoName` text NOT NULL,
  `Thumbnail` text NOT NULL,
  `VideoURL` text NOT NULL,
  `VideoLength` time NOT NULL,
  `Uploader` text NOT NULL,
  `GameID` int(11) NOT NULL,
  `VideoID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`VideoID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`VideoName`, `Thumbnail`, `VideoURL`, `VideoLength`, `Uploader`, `GameID`, `VideoID`) VALUES
('TestVideo1', '', '', '00:00:00', '', 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
