-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2016 at 06:31 AM
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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`GameTitle`, `Thumbnail`, `ReleaseDate`, `GameID`) VALUES
('Overwatch', 'overwatch.jpg', '2016-05-16', 1),
('League of Legends', 'league.jpg', '2016-10-27', 2),
('Grand Theft Auto V', 'Grand_Theft_Auto_V.png', '2013-09-17', 6),
('Super Mario Bros', 'super mario bros.jpg', '1985-09-13', 5),
('Minecraft', 'minecraft.jpg', '2011-10-07', 7),
('World of Warcraft', 'wow.jpg', '2004-11-23', 8),
('The Elder Scrolls V: Skyrim', 'The_Elder_Scrolls_V_Skyrim_cover.png', '2011-11-11', 9),
('Fallout 4', 'Fallout_4_cover_art.jpg', '2015-11-10', 10),
('Out of This World', 'out of this world.jpg', '1991-12-08', 11);

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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`VideoName`, `Thumbnail`, `VideoURL`, `VideoLength`, `Uploader`, `GameID`, `VideoID`) VALUES
('Test Vid 1', 'tn_001', 'test_vid_1.php', '00:04:10', 'Mike Ruba', 1, 2),
('Building the Death Star Part 2', 'Building the Death Star Part 2_tn.jpg', 'Building the Death Star Part 2.php', '02:15:21', 'Lets Play', 5, 8),
('Building the Death Star Part 1', 'Building the Death Star Part 1_tn.jpg', 'Building the Death Star Part 1.php', '01:21:02', 'Lets Play', 7, 5),
('Moto-Frisbee', 'Moto-Frisbee_tn.jpg', 'Moto-Frisbee.php', '12:15:05', 'TheGtaErs', 6, 7),
('Raiding 101', 'Raiding 101_tn.jpg', 'Raiding 101.php', '12:30:00', 'Leroy Jenkins', 6, 9),
('Messing around in Skyrim', 'Messing around in Skyrim_tn.jpg', 'Messing around in Skyrim.php', '01:11:22', 'RichERich', 7, 10),
('Overwatch Competive Mode: Grandmaster Widowmaker', 'Overwatch Competive Mode: Grandmaster Widowmaker_tn.jpg', 'Overwatch Competive Mode: Grandmaster Widowmaker.php', '12:55:12', 'Krusher99', 1, 11),
('wasteland.avi', 'wasteland.avi_tn.jpg', 'wasteland.avi.php', '12:00:36', 'mememaster99', 8, 12);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
