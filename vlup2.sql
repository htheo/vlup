-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2016 at 07:47 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vlup2`
--

-- --------------------------------------------------------

--
-- Table structure for table `vlup_articles2`
--

CREATE TABLE IF NOT EXISTS `vlup_articles2` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `img_nom` varchar(36) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sous_title` varchar(1300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` blob NOT NULL,
  `validation` int(2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `vlup_articles2`
--

INSERT INTO `vlup_articles2` (`ID`, `img_nom`, `title`, `sous_title`, `type`, `description`, `image`, `validation`) VALUES
(4, '1463144253.jpg', 'BDE', '', 'Pole', 'woahhsfg', '', 0),
(5, '1463144712.jpg', 'BDE', '', 'Pole', 'woahhsfg', '', 0),
(6, '1463483634.jpg', 'Ceci est un titre', '', '3D', 'ahah les 3D ils sont trop cons mdr', '', 0),
(7, '1463490731.jpg', 'trop bien', '', 'Web', 'ahah mdsr zeptiqre ghfd', '', 0),
(8, '1463584915.jpg', 'Il se croit artiste en prenant n''importe quoi en p', '', 'CV', 'ahah fqdsjkqh sqlkjdfh qdsknb sq;df bqsdb fqsdhb', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vlup_users`
--

CREATE TABLE IF NOT EXISTS `vlup_users` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `vlup_users`
--

INSERT INTO `vlup_users` (`ID`, `pseudo`, `password`, `role`) VALUES
(1, 'badabouh', 'abc', 0),
(2, 'badabouh', 'badabouh', 2),
(3, 'jean-paul', 'gauthier', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
